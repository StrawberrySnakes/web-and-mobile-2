<?php
    $pageTitle = "forum";
    $path = "";
    include("inc/header.php");
    include("/home/MAIN/djs9826/dbConn.php");
    include("inc/validations.php");

    function sanitize($str, $length=1000) {
      $str = trim($str);
    
      // could also do a strip tags
      // strip_tags($str); 
      $str = htmlentities($str, ENT_QUOTES);
    
      return substr($str, 0, $length);
    }

    
    if(!empty($_POST["name"]) && alphaNumericSpacePunctuation($_POST["name"]) && !empty($_POST["comment"]) && alphaNumericSpacePunctuation($_POST["comment"]) && !empty($_POST["email"]) && emailCheck($_POST["email"])) {
      // $name = $_POST["name"];
      // $question = $_POST["question"];
      $name = sanitize($_POST['name']);
      $email = sanitize($_POST['email']);

      $comment = sanitize($_POST["comment"]);
      $rating = sanitize($_POST["rating"]);

      // $QuestionId = $_POST['id'];

      $sql = "INSERT INTO `finalComment` (`name`, `email`, `comment`, `rating`, `date`) VALUES (?, ?, ?, ?, now());";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('sssi', $name, $email, $comment, $rating);
      $stmt->execute();
      $stmt->close();
    } 
    
  
    $sql = "SELECT * FROM `finalComment` ORDER BY `id` DESC LIMIT 50";
    $result = $conn->query($sql);
?>


<main class="container">
    <section class="personalInput">
      <h2>Give your Thoughts About Town! </h2>
      <form id="question-form" method="POST">
        <div>
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name">
        </div>
        <div>
          <label for="name">Email:</label>
          <input type="text" id="email" name="email">
        </div>
        <div class="stars">
            <p>Rate your Town Experience!</p>
            <label for="star1" title="1 star">&#9733;</label>
            <input type="radio" id="star1" name="rating" value="1" checked>
            <label for="star2" title="2 stars">&#9733;</label>
            <input type="radio" id="star2" name="rating" value="2">
            <label for="star3" title="3 stars">&#9733;</label>
            <input type="radio" id="star3" name="rating" value="3">
            <label for="star4" title="4 stars">&#9733;</label>
            <input type="radio" id="star4" name="rating" value="4">
            <label for="star5" title="5 stars">&#9733;</label>
            <input type="radio" id="star5" name="rating" value="5">
        </div>
        <div>
          <label for="comment">Comments:</label>
          <textarea id="comment" name="comment" rows="10" cols="30"></textarea>
        </div>

        <input id="submit" type="submit" value="Submit">
      </form>
    </section>


    <section id="forumSec">
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<div class='forum'>";
        echo "<h3>" . $row["name"] . "</h3>";
        echo "<p class='rating'>Rating: " . $row["rating"] . "/5 Stars</p>";

        echo "<p class='comment'>Comments: " . $row["comment"] . "</p>";
        echo "<p class='date'>Posted: " . $row["date"] . "</p>";
        echo "</div>";


    
      // Fetch and display submitted answers
    //   $question_id = $row["id"];
    //   $sql_answers = "SELECT * FROM `answers` WHERE `questionId` = ?;"; // Use prepared statement with placeholder
    //   $stmt = $conn->prepare($sql_answers);
    //   $stmt->bind_param('i', $question_id); // Bind question ID as an integer
    //   $stmt->execute();
    //   $result_answers = $stmt->get_result(); // Get results from prepared statement
    
    //   echo "<h3 id='communityanswers'>Community Answers:</h3>";
    //   while ($row_answer = $result_answers->fetch_assoc()) {
    //     echo "<p class='answerstoquestions'>" . $row_answer["answer"] . "</p>";
    //   }
    
    //   $stmt->close(); // Close prepared statement after use
    
    //     echo "<form class='answer-form' method='POST'>";
    //         echo "<input type='hidden' name='question_id' value='" . $row["id"] . "'>";
    //         echo "<div>";
    //         echo "<label for='answer'>Your Answer:</label><br>";
    //         echo "<textarea class='Qanswer' name='answer' rows='5' cols='30' required></textarea>";
    //         echo "</div>";
    //         echo "<input class='answersubmit' type='submit' value='Submit Answer'>";
    //         echo "</form>";

    //         echo "</div>";

    //         if (!empty($_POST["answer"])) {
    //           $question_id = $_POST["question_id"];
    //           $answer = sanitize($_POST["answer"]);
  
    //           // Check if the answer already exists for the question
    //           $sql_check_answer = "SELECT * FROM `answers` WHERE `questionId` = ? AND `answer` = ?";
    //           $stmt_check_answer = $conn->prepare($sql_check_answer);
    //           $stmt_check_answer->bind_param('is', $question_id, $answer);
    //           $stmt_check_answer->execute();
    //           $result_check_answer = $stmt_check_answer->get_result();
    //           $stmt_check_answer->close();
  
    //           if ($result_check_answer->num_rows == 0) {
    //               // Insert the answer only if it doesn't already exist for the question
    //               $sql_insert_answer = "INSERT INTO `answers` (`questionId`, `answer`) VALUES (?, ?)";
    //               $stmt_insert_answer = $conn->prepare($sql_insert_answer);
    //               $stmt_insert_answer->bind_param('is', $question_id, $answer);
    //               $stmt_insert_answer->execute();
    //               $stmt_insert_answer->close();
    //           }
    //       }
    }
    ?>
    </section>

  </main>

<?php
    echo "<p class='path'>contact-comments_forum</p>";
    include("inc/footer.php");

?>