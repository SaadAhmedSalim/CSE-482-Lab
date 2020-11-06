<?php
  session_start();

  $nameErr = $usernameErr = $passwordErr = $genderErr = $skillErr = $contactErr = $emailErr = $universityErr = $skillErr = "";

  if(isset($_SESSION['nameErr'])) {
    $nameErr = $_SESSION['nameErr'];
  }
  if(isset($_SESSION['usernameErr'])) {
    $usernameErr = $_SESSION['usernameErr'];
  }
  if(isset($_SESSION['passwordErr'])) {
    $passwordErr = $_SESSION['passwordErr'];
  }
  if(isset($_SESSION['genderErr'])) {
    $genderErr = $_SESSION['genderErr'];
  }

  if(isset($_SESSION['skillErr'])) {
    $skillErr = $_SESSION['skillErr'];
  }
  if(isset($_SESSION['contactErr'])) {
    $contactErr = $_SESSION['contactErr'];
  }
  if(isset($_SESSION['emailErr'])) {
    $emailErr = $_SESSION['emailErr'];
  }

  if(isset($_SESSION['universityErr'])) {
    $universityErr = $_SESSION['universityErr'];
  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form class="container" name="Form" action="FormHandling.php" method="get">
      <h1>Form</h1>
      <table>
        <tr>
          <td>Name:</td>
          <td> <input type="text" name="name" value=""><?php echo $nameErr; ?></td>

        </tr>
        <tr>
          <td>Username:</td>
          <td> <input type="text" name="username" value=""><?php echo $usernameErr; ?></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td> <input type="password" name="password" value=""><?php echo $passwordErr; ?></td>
        </tr>
        <tr>
          <td>Re-type Password:</td>
          <td> <input type="password" name="retypepassword" value=""></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td> <input type="radio" name="gender" value="Male">Male
                  <input type="radio" name="gender" value="Female">Female
                  <input type="radio" name="gender" value="Others">Others<?php echo $genderErr; ?></td>
        </tr>
        <tr>
          <td>Skill:</td>
          <td> <input type="checkbox" name="skills[]" value="Java">Java
                  <input type="checkbox" name="skills[]" value="Andriod">Andriod
                  <input type="checkbox" name="skills[]" value="Ruby">Ruby
                  <input type="checkbox" name="skills[]" value=".Net">.Net<?php echo $skillErr; ?></td>
        </tr>
        <tr>
          <td>Contact no:</td>
          <td> <input type="text" name="contact" value=""><?php echo $contactErr; ?></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td> <input type="email" name="email" value=""><?php echo $emailErr; ?></td>
        </tr>
        <tr>
          <td>University:</td>
          <td><select name="university">
                <option value="">Please select university</option>
                <option value="NSU">North South University</option>
                <option value="IUB">Independent University Bangladesh</option>
              </select><?php echo $universityErr; ?>
             </td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="" value="Submit"></td>
        </tr>
      </table>

      <?php
        session_unset();
       ?>


    </form>
  </body>
</html>
