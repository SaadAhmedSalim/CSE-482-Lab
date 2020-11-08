<?php


$xml=new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$user=$xml->createElement("user");
$xml->appendChild($user);
$xml->load("user.xml");
if(!$xml)
{
    $user=$xml->createElement("user");
    $xml->appendChild($user);
}
else {
  $user=$xml->firstChild;
}

if(isset($_POST['submit']))
{
  $fname=$_POST['name'];
  $fusername=$_POST['username'];
  $fpassword=$_POST['password'];
  $femail=$_POST['email'];
  $fgender=$_POST['gender'];
  $fcontactno=$_POST['contactno'];
  $fprogrammingskills=$_POST['programmingskills'];

$use=$xml->createElement("user");
$user->appendChild($use);
$name=$xml->createElement("name",$fname);
$use=$xml->appendChild($name);
$username=$xml->createElement("username",$fusername);
$use=$xml->appendChild($username);
$password=$xml->createElement("password",$fpassword);
$use=$xml->appendChild($password);
$email=$xml->createElement("email",$femail);
$use=$xml->appendChild($email);
$gender=$xml->createElement("gender",$fgender);
$use=$xml->appendChild($gender);
$contact=$xml->createElement("contactno",$fcontactno);
$use=$xml->appendChild($contact);
$skills=$xml->createElement("skills",$fprogrammingskills);
$use=$xml->appendChild($skills);

echo"<xmp>".$xml->saveXML()."</xmp>";
$xml->save("user.xml");
}


 ?>
