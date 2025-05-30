<?php
// cd C:\work_php\new
// php -S localhost:4000

require_once ('SomePeople.php');

echo $_GET['msg'];
echo "<br>";
echo $_GET['name'];

echo "<pre>";
print_r($_GET);
echo "</pre>";
