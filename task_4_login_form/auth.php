<?php
session_start();
$auth = [
	'email' => 'admin@email.com',
	'pass' => '123qwe',
];


$email = $_POST['email'];
$password = $_POST['password'];
  if ($password == $auth['pass'] && $email == $auth['email']) {
      $_SESSION['email'] =$email;

      header("Location: admin.php");
} else {
    header("Location: login.php");
}
