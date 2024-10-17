<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page?></title>
    <link rel="icon" type="image/x-icon" href="../assets/images/indProject/treeIconWhite.svg">
    <link href="<?php echo $path; ?>../assets/css/indproject.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="topnav">
            <figure class="main_icon">
                <a href="index.php"><img src="../assets/images/indProject/treeIcon2.svg" alt="Tree Icon"></a>
            </figure>
            <nav class="links" id="navLinks">
                <div class="dropdown">
                    <a href="outdoors.php" class="dropbtn">Outdoors</a>
                    <div class="dropdown-content">
                        <a href="hiking.php">Hiking</a>
                        <a href="biking.php">Biking</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="food.php" class="dropbtn">Food</a>
                    <div class="dropdown-content">
                        <a href="breakfast.php">Breakfast/Lunch</a>
                        <a href="dinner.php">Dinner</a>
                    </div>
                </div>
                <a href="stores.php">Stores</a>
                <a href="events.php">Events</a>
                <a href="contact.php">Contact</a>
                <a href="references.php"><img id="refImg" src="../assets/images/indProject/referencesicon.svg" alt="Icon to References"></a>
                <a href="grading.php"><img id="gradingImg" src="../assets/images/indProject/grading_icon.svg" alt="Icon to Grading Page"></a>
            </nav>
            <a href="javascript:void(0);" class="hamicon" onclick="toggleNav()">
                <img src="../assets/images/indProject/Hamburger_icon_white.svg" alt="hamburger menu">
            </a>
        </div>
    </header>
