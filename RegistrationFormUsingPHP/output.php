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
echo "Name : " .$name."<br>";
echo "Username : " .$username."<br>";
echo "Email : " .$email. "<br>";
echo "Password : " .$psw.md5(1). "<br>";
echo "Contact No : " .$contact. "<br>";
echo "Gender : " .$gender. "<br>";
echo "Programming Skills : " .$skills. "<br>";
echo "College : " .$college. "<br>";
?>
