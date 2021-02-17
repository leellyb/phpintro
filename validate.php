<?php

$username='';
$email='';
$integer='';

if (isset($_POST{'submit'})){
$username=test_input($_POST["user"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
  $usernameErr = "Only letters and white space allowed";
}
$email=test_input($_POST["email"]);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
   $emailErr="your email is not valid";
} 


$integer= test_input($_POST{'int'});

if (filter_var($integer, FILTER_VALIDATE_INT) === 0 || !filter_var($integer, FILTER_VALIDATE_INT) === false) {
  $integerErr="";
} else {
    $integerErr="integer is valid";
}

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>