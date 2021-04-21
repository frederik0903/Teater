<?php 
$user = "";  
$password = "";  
$host = "localhost";  
$dbase = "teater";  
$table = "nyhedsbrev";  
 
$name= $_POST['name']; 
$mail= $_POST['mail']; 
$offer= $_POST['offer']; 
  
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO $table  ". "VALUES ('$name', '$mail', '$offer')"; 
 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo 'You have been successfully added.' . '<br>'; 
 
mysqli_close($dbc); 
 
?> 