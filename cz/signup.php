<?php



$username = $_POST['jmeno'];

$email = $_POST['jmeno2'];

//$experience = $_POST['exp'];



//the data

$data = "$username | $email \n";



//open the file and choose the mode

$fh = fopen("users.txt", "a");

fwrite($fh, $data);



//close the file

fclose($fh);



print "User Submitted";



?>
