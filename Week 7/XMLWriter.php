<?php

  $xml = new SimpleXMLElement('<person></person>');
  $user = $xml->addChild('user');
  $user->addChild('name','John Doe');
  $user->addChild('username','john');

  $user1 = $xml->addChild('user');
  $user1->addChild('name','Lex DeHaan');
  $user1->addChild('username','lex');

  $xml->asXML("person.xml");
?>
