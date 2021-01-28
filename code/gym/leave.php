<?php
$con=new mysqli('localhost','root','','staff');

if($con->connect_errno)
{
   echo $con->connect_error;
   die();
}
?>
<html>
<head>
<title>Challenger Gym</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="leave.css">
</head>
<body>
    <h1><center>staff leave taken</center></h1><br><br>
        <table align="center">
            <tr>
             <td>name</td> 
             <td><input type="text" name="name" placeholder="enter the name" required></td>
            </tr>
            <tr>
             <td>phone</td> 
             <td><input type="tel" name="phone" placeholder="0123456789" required></td>
            </tr>
            <tr>
                <td>email</td> 
                <td><input type="email" name="email" placeholder="enter the email" required></td>
               </tr>
            <tr>
             <td>reason</td> 
             <td><input type="text" name="reason" placeholder="reason" required></td>
            </tr>
            <td>date</td> 
             <td><input type="text" name="date" placeholder="DD/MM/YYYY" required></td>
            </tr>
            <td></td> 
             <td><input type=submit name=submit value=submit></td>
             <td><a href="first page.html">Back</a></td>
            </tr>
        </table>
    </form>
</body> 
</html>
<?php 
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $reason=$_POST['reason'];
    $date=$_POST['date'];
    if($name!=""&&$phone!=""&&$email!=""&&$reason!=""&&$date!="")
    {
        $sql = "INSERT INTO users (name, phone, email, reason, date)VALUES ('$name', '$phone', '$email', '$reason', '$date')";
        if($con->query($sql))
    {
        echo "data stored";
     }
     else
     {
         echo "insert data faild";
     }

}
else{
   echo  "all fields required";
}
} 
?>