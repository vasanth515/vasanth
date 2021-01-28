<?php    
$username = 'root'; 
$password = '';  
$database = 'reservation';  
$servername='localhost'; 
$conn=mysqli_connect($servername, $username, $password, "staff");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>  
