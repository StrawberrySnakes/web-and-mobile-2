<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="assets/css/groupprojectmain.css">
</head>
<body>
    <div class="topnav">
        <figure class="main_icon">
            <a href="../index.php"><img src="assets\images\iconmainlong.png" alt="logo"></a>
        </figure>
        <nav class="links" id="navLinks">

        <?php
        // Connect to MySQ
        $servername = 'localhost';
        $username = 'iste240t10';
        $password = 'Adrenosterone5^sensations';
        $dbname = 'iste240t10';
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch navbar items from the database
        $sql = "SELECT * FROM navbar_items ORDER BY `order`";
        $result = $conn->query($sql);

        // Display navbar items
        // echo '<ul>';
        while ($row = $result->fetch_assoc()) {
            echo '<a href="' . $row['url'] . '">' . $row['label'] . '</a>';
        }
        // echo '</ul>';

        // Close connection
        $conn->close();
        ?>
        </nav>
        <a href="javascript:void(0);" class="hamicon" onclick="toggleNav()">
            <img src="assets/images/Hamburger_icon_white.svg" alt="hamburger menu">
        </a>
    </div>
