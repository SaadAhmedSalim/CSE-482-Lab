<?php
  if(!isset($person)){
    $person = new stdClass();
  }

  $person->name = "John";
  $person->age = 32;
  $person->city = "Delhi";

  if(!isset($person1)){
    $person1 = new stdClass();
  }

  $person1->name = "Lex";
  $person1->age = 30;
  $person1->city = "Chennai";

  if(!isset($value)){
    $value = new stdClass();
  }
  $value ->persons  = [$person, $person1];

  $json = json_encode($value);
  file_put_contents('person.json', $json);

?>
