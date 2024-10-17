<?php
    $pageTitle = "forum";
    $path = "";
    include("inc/navbar.php");
    include("/home/iste240t10/Sites/dbConn.php");

    function sanitize($str, $length=1000) {
      $str = trim($str);
    
      // could also do a strip tags
      // strip_tags($str); 
      $str = htmlentities($str, ENT_QUOTES);
    
      return substr($str, 0, $length);
    }

    
    if(!empty($_POST["name"]) && !empty($_POST["comment"])) {
      // $name = $_POST["name"];
      // $question = $_POST["question"];
      $name = sanitize($_POST['name']);
      $comment = sanitize($_POST["comment"]);
      $rating = sanitize($_POST['rating']);
      // $QuestionId = $_POST['id'];

      $sql = "INSERT INTO `finalComment` (`name`, `comment`, `rating`, `date`) VALUES (?, ?, ?, now());";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ssi', $name, $comment, $rating);
      $stmt->execute();
      $stmt->close();
  }
  
    $sql = "SELECT * FROM `finalComment` ORDER BY `id` DESC LIMIT 50";
    $result = $conn->query($sql);

?>



<main class="container">
    <section class="ask-question">
      <h2>Have a Question?</h2>
      <form id="question-form" method="POST">
        <div>
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div>
          <input type="radio" id="one" name="rating" value=1>
          <label for="one">1/5</label><br>

          <input type="radio" id="two" name="rating" value=2>
          <label for="two">2/5</label><br>

          <input type="radio" id="three" name="rating" value=3>
          <label for="three">3/5</label>

          <input type="radio" id="four" name="rating" value=4>
          <label for="four">4/5</label>

          <input type="radio" id="five" name="rating" value=5>
          <label for="five">5/5</label>
        </div>
        <div>
          <label for="comment">Comments:</label>
          <textarea id="comment" name="comment" value = "comment" rows="10" cols="30"></textarea>
        </div>

        <input id="submit" type="submit" value="Submit Question"/>
      </form>
    </section>
    <section class="qa-section">
      
    </section>

    <section id="forumSec">
    <h2>Interact by answering others questions!</h2>
    <?php
    while ($row = $result->fetch_assoc()) {
      echo "<div class='forum'>";
      echo "<div class='nameandquestion'>";
      echo "<h3>" . $row["name"] . " Asked:</h3>";
      echo "<p>" . $row["comment"] . "</p>";
      echo "<p>" . $row["rating"] . "</p>";
      echo "<p>" . $row["date"] . "</p>";

      echo "</div>";


    
      // Fetch and display submitted answers
      $question_id = $row["id"];
      $sql_answers = "SELECT * FROM `answers` WHERE `questionId` = ?;"; // Use prepared statement with placeholder
      $stmt = $conn->prepare($sql_answers);
      $stmt->bind_param('i', $question_id); // Bind question ID as an integer
      $stmt->execute();
      $result_answers = $stmt->get_result(); // Get results from prepared statement
    
      echo "<h3 id='communityanswers'>Community Answers:</h3>";
      while ($row_answer = $result_answers->fetch_assoc()) {
        echo "<p class='answerstoquestions'>" . $row_answer["answer"] . "</p>";
      }
    
      $stmt->close(); // Close prepared statement after use
    
        echo "<form class='answer-form' method='POST'>";
            echo "<input type='hidden' name='question_id' value='" . $row["id"] . "'>";
            echo "<div>";
            echo "<label for='answer'>Your Answer:</label><br>";
            echo "<textarea class='Qanswer' name='answer' rows='5' cols='30' required></textarea>";
            echo "</div>";
            echo "<input class='answersubmit' type='submit' value='Submit Answer'>";
            echo "</form>";

            echo "</div>";

            if (!empty($_POST["answer"])) {
              $question_id = $_POST["question_id"];
              $answer = sanitize($_POST["answer"]);
  
              // Check if the answer already exists for the question
              $sql_check_answer = "SELECT * FROM `answers` WHERE `questionId` = ? AND `answer` = ?";
              $stmt_check_answer = $conn->prepare($sql_check_answer);
              $stmt_check_answer->bind_param('is', $question_id, $answer);
              $stmt_check_answer->execute();
              $result_check_answer = $stmt_check_answer->get_result();
              $stmt_check_answer->close();
  
              if ($result_check_answer->num_rows == 0) {
                  // Insert the answer only if it doesn't already exist for the question
                  $sql_insert_answer = "INSERT INTO `answers` (`questionId`, `answer`) VALUES (?, ?)";
                  $stmt_insert_answer = $conn->prepare($sql_insert_answer);
                  $stmt_insert_answer->bind_param('is', $question_id, $answer);
                  $stmt_insert_answer->execute();
                  $stmt_insert_answer->close();
              }
          }
    }

    
      ?>
    </section>

  </main>





<?php

    include("inc/footer.php");

?>