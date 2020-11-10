<?php
session_start();

$errors = [];

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];
$gender = $_POST['gender'];
$skills = $_POST['skills'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];
$college = $_POST['college'];



$_SESSION['values'] = $_POST;


if($name === ""){
    array_push($errors, "Name is required");
}
if($username === ""){
    array_push($errors, "Username is required");
}

if($password === ""){
    array_push($errors, "Password is required");
}else if (strlen($password) < 5){
    array_push($errors, "Password should be at least 5 characters");
}

if ($password !== $re_password){
    array_push($errors, "Confirm password did not matched");
}

if (!isset($gender)){
    array_push($errors, "gender is required");
}
if (!isset($skills)){
    array_push($errors, "Skills is required");
}

if ($contact_no === ""){
    array_push($errors, "Contact no is required");
}

if ($email === ""){
    array_push($errors, "Email no is required");
}elseif (!strpos($email, "@")){
    array_push($errors, "Invalid email address");
}


if ($college === ""){
    array_push($errors, "College no is required");
}


$_SESSION['errors'] = [];

if(count($errors)){
    $_SESSION['errors'] = $errors;
    header("Location: index.php");
}else{
    session_unset();
    session_destroy();
    echo "Validation passed";
}
