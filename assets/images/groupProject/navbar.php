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
echo '<ul>';
while ($row = $result->fetch_assoc()) {
    echo '<li><a href="' . $row['url'] . '">' . $row['label'] . '</a></li>';
}
echo '</ul>';

// Close connection
$conn->close();
?>
