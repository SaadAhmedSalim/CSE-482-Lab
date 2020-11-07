<?php

$name = $_GET["name"];
$username = $_GET["username"];
$email = $_GET["email"];
$contact = $_GET["contact"];
$gender = $_GET["gender"];
$skills = $_GET["skills"];
$psw = $_GET["psw"];
$repsw = $_GET["psw-repeat"];
$college = $_GET["college"];

if($psw.md5(1)!=$repsw.md5(1))
{
  echo "Password Not Match !";
} else echo "Password Matched !";

echo "<br>";
echo "Name : " .htmlentities($name."<br>";
echo "Username : " .htmlentities($username)."<br>";
echo "Email : " .htmlentities($email). "<br>";
echo "Password : " .htmlentities($psw.md5(1)). "<br>";
echo "Contact No : " .htmlentities($contact). "<br>";
echo "Gender : " .htmlentities($gender). "<br>";
echo "Programming Skills : " .htmlentities($skills). "<br>";
echo "College : " .htmlentities($college). "<br>";
?>
