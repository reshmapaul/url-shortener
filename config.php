<?php
// Hostname for your URL shortener
$hostname = 'http://localhost';

// PDO connection to the database
$connection = new PDO('mysql:dbname=test;host=localhost', 'paul', '');

// Choose your character set (default)
$chars = 'gZ6hdO59XTJmUP31YMG7FvQyqjlKkf8zwitx0AcupDVs2RWCIBaNreob4nLHES';
$salt = 'shortner';

$padding = 3;
?>
