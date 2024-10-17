<?php
$name = "Todd";

session_name("djs9826_sessiondemo");
session_start();
$_SESSION['name'] = "DJS";

if(!empty($_SESSION['name'])) {
    echo "Welcome Back" . $_SESSION['name'];
} else {
    echo "Name has not been provided";
}

?>