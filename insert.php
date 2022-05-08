<?php


$username = $_POST["username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password= $_POST["password"];
// echo "<pre>";

if ($password=='' || $email=='' || $phone==''|| $password=='') {
    echo '<script>alert("all feild is rashel") ; </script>' ;
} else {
 echo 'every thing is ok';
}










