<?php
session_start();

if(isset($_SESSION['username'])) {
    echo 'Welcome'. $_SESSION['username'];
    echo '<a href="logout.php">Logout</a>';
} else {
    echo 'Welcome Guest';
    echo '<a href="/NewPHPsite/login.php">Home</a>';
}