<?php

if($_GET['name']!= ''&& $_GET['username']!= ''&& $_GET['password']!= ''
&& $_GET['retypepassword']!= ''&&  $_GET['gender']!= ''&&
 $_GET['programmingskills']!= ''&&  $_GET['contactno']!= ''&& $_GET['email'] &&
 $_GET['college']!= '')
{

$current_data = file_get_contents('form_data.json');
$array_data = json_decode($current_data, true);

//getting new array data
$new_data = array(
          'name' => $_GET['name'],
          'username' => $_GET['username'],
          'password' => $_GET['password'],
          'retypepassword' => $_GET['retypepassword'],
          'gender' => $_GET['gender'],
          'programmingskills' => $_GET['programmingskills'],
          'contactno' => $_GET['contactno'],
          'email' => $_GET['email'],
          'college' => $_GET['college']


);

//Adjusting array data with new data
$array_data [] = $new_data;
//converting into json_decode
$json_data = json_encode($array_data,JSON_PRETTY_PRINT);

if(file_put_contents('form_data.json', $json_data))
{

    echo "<h3> Succesfully saved data into JSON </h3>";

}
else {
  // code...
  echo "<h3> Failed to Save JSON </h3>";
}


}



 ?>
