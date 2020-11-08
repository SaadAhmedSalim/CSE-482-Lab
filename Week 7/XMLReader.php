<?php

  $xml = simplexml_load_file("person.xml");
  $users = $xml->children();
  foreach ($users as $user) {
    echo $user->name."<br>";
    echo $user->username."<br>";
  }
?>
