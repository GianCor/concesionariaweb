
<?php
 $name = $_POST["name"];

 $email = $_POST["email"];

 $message = $_POST["message"];

 

 if (!$name AND !$email AND !$message){

 

   header("Location: contacto.php?msg=off");

   return false;

 }
 ?>