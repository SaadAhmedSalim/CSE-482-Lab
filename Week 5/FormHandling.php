<?php

  session_start();

  $name = $username = $password = $retypepassword = $gender = $skill = $contact = $email = $university = $skill ="";
  $skills;

  $nameErr = $usernameErr = $passwordErr = $genderErr = $skillErr = $contactErr = $emailErr = $universityErr = $skillErr = "";
  $flag = 0;

  if (empty($_GET['name'])) {
    $nameErr = "Name is required";
    $flag = 1;
  } else {
    $name = test_input($_GET['name']);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed";
       $flag = 1;
    }
  }

  if (empty($_GET['username'])) {
    $usernameErr = "Username is required";
    $flag = 1;
  } else {
    $username = test_input($_GET['username']);
    if (!preg_match("/^[a-z0-9][a-z0-9_]*[a-z0-9]$/",$username)){
    //if (!ctype_alnum($username)) {
       $usernameErr = "Only letters and numbers allowed";
       $flag = 1;
    }
  }

  if (empty($_GET['password']) || empty($_GET['retypepassword'])) {
    $passwordErr = "Password is required";
    $flag = 1;
  } else {
    $password = test_input($_GET['password']);
    $retypepassword = test_input($_GET['retypepassword']);
    if (strcmp($password,$retypepassword)){
       $passwordErr = "Password did not match";
       $flag = 1;
    }
  }

  if (empty($_GET['gender'])) {
    $genderErr = "Gender is required";
    $flag = 1;
  } else {
    $gender = test_input($_GET["gender"]);
  }

  if (empty($_GET['skills'])) {
    $skillErr = "Skill is required";
    $flag = 1;
  }

  if (empty($_GET['contact'])) {
    $contactErr = "Contact is required";
    $flag = 1;
  } else {
    $contact = test_input($_GET['contact']);
    if (!preg_match("/^[0-9]*$/",$contact)){
    //if (!ctype_num($username)) {
       $contactErr = "Invalid Number";
       $flag = 1;
    }
  }

  if (empty($_GET["email"])) {
    $emailErr = "Email is required";
    $flag = 1;
  } else {
    $email = test_input($_GET["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $flag = 1;
    }
  }

  if (empty($_GET['university'])) {
    $universityErr = "University is required";
    $flag = 1;
  } else {
    $university = test_input($_GET["university"]);
  }

/*  echo $_GET['name']."<br/>";
  echo $_GET['username']."<br/>";
  echo $_GET['gender']."<br/>";
  foreach($_GET['skills'] as $skill) {
        echo $skill." ";
    }
  echo "<br/>";
  echo $_GET['contact']."<br/>";
  echo $_GET['email']."<br/>";
  echo $_GET['university']."<br/>";*/

  if (empty($nameErr)) {
    echo $name."<br/>";
  } else {
    echo $nameErr."<br/>";
  }

  if (empty($usernameErr)) {
    echo $username."<br/>";
  } else {
    echo $usernameErr."<br/>";
  }

  if (empty($passwordErr)) {
    echo $password."<br/>";
  } else {
    echo $passwordErr."<br/>";
  }

  if (empty($genderErr)) {
    echo $gender."<br/>";
  } else {
    echo $genderErr."<br/>";
  }

  // if (empty($skillErr)) {
  //   foreach ($item as $skill) {
  //     echo $item." ";
  //   }
  // } else {
  //   echo $skillErr."<br/>";
  // }

  if (empty($contactErr)) {
    echo $contact."<br/>";
  } else {
    echo $contactErr."<br/>";
  }

  if (empty($emailErr)) {
    echo $email."<br/>";
  } else {
    echo $emailErr."<br/>";
  }

  if (empty($universityErr)) {
    echo $university."<br/>";
  } else {
    echo $universityErr."<br/>";
  }


   if($flag == 1) {
     $_SESSION['nameErr'] = $nameErr;
     $_SESSION['usernameErr'] = $usernameErr;
     $_SESSION['passwordErr'] = $passwordErr;
     $_SESSION['genderErr'] = $genderErr;
     $_SESSION['contactErr'] = $contactErr;
     $_SESSION['emailErr'] = $emailErr;
     $_SESSION['universityErr'] = $universityErr;
     header("Location:index.php");
   }


  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
