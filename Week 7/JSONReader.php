<?php
  $json = file_get_contents('person.json');
  $jsonData = json_decode($json);

  $persons = $jsonData->persons;

  foreach ($persons as $person) {
    echo $person->name."<br>";
    echo $person->age."<br>";
    echo $person->city."<br>";
  }
 ?>
