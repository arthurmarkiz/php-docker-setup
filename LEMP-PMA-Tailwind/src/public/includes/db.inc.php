<?php
$hostname = "mysql";
$db_username = "root";
$db_password = "root";
$db = "mydb";
$connection = mysqli_connect($hostname, $db_username, $db_password, $db);
if ($connection) {
    echo '<p class="text-white">✅ Database Connected! 
    <span class="text-emerald-500 font-medium">Access <span class="text-emerald-300 underline">localhost:81</span></span></p>';
} else {
    die('<p class="text-white">Database Connection Failed!</p>');
}