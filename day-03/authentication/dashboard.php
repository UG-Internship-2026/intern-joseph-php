<?php

session_start();

if(!isset($_SESSION["user"])) {
    echo "You must login first";
    exit;
}

echo "<h1>Welcome " . $_SESSION["user"] . "</h1>";
echo '<a href="logout.php">Logout</a>';

?>