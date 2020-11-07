<?php

$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$gender = $_POST["gender"];
$skills = $_POST["skills"];
$psw = $_POST["psw"];
$repsw = $_POST["psw-repeat"];
$college = $_POST["college"];

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
