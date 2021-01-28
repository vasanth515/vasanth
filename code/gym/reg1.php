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
<link rel="stylesheet" href="reg1.css">
</head>
<form action="reg1.php" method="post">
    <body>
    <nav>
        <label>Challenger Gym</label>
        <ul>
            <li><a class="active" href="about.html">About</a></li>
            <li><a href="fetch.php">Customer details</a></li>
            <li><a href="#">Feedback</a></li>
            <li><a href="first page.html">home</a></li>
        </ul>
    </nav>
        <table>
            <tr>
             <td>name</td> 
             <td><input type="text" name="name" placeholder="enter the name"></td>
            </tr>
            <tr>
             <td>address</td> 
             <td><input type="text" name="address" placeholder="enter the address"></td>
            </tr>
            <tr>
             <td>gender</td> 
             <td><input type="radio" name="gender" value="male">male</td>
             <td><input type="radio" name="gender" value="female">female</td>
             <td><input type="radio" name="gender" value="other">other</td>
            </tr>
            <tr>
             <td>phone</td> 
             <td><input type="tel" name="phone" placeholder="enter the phone number"></td>
            </tr>
            <tr>
    <td>date</td>
    <td> <input type="date" id="date" name="date" 
        placeholder="dd-mm-yyyy" value=""
        min="1997-01-01" max="2030-12-31"></td>
</tr>
            <td></td> 
             <td><input type=submit name=submit value=submit></td>
            </tr>
        </table>
    </form>
</body> 
</html>
<?php 
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];
    if($name!=""&&$address!=""&&$gender!=""&&$phone!=""&&$date!="")
    {
        $sql = "INSERT INTO users (name, address, gender, phone, date)VALUES ('$name', '$address', '$gender', '$phone', '$date')";
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