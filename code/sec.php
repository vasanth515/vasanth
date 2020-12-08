<?php
$con=new mysqli('localhost','root','','vasanth');

if($con->connect_errno)
{
   echo $con->connect_error;
   die();
}
?>
<html>
    <head>
        <title>pupa clic</title>
        <link rel="stylesheet" href="leave.css">
        <body background="p.jpg"></body>
    </head>
<body>
    <center>
    <form action="dasboard.html" method="post">
        <table border="100px">
            <tr><td>Name</td><td><input typt="text"  name="Name"placeholder="Employee name" required></td></tr>
               <tr> <td>Age</td><td><input typt="text"  name="Name"placeholder="Age" required></td></tr>
               <tr> <td>Reason</td><td><input typt="text"  name="Name"placeholder="Reason" required></td></tr>
               <tr><td colspan='2' align="center">
                    <input type="submit"  name="submit" value="submit">
                </td></tr>
        </table>
        </center
<?php
if(isset($_POST['sumbit']))
     {
     $Name=$_POST['Name'];
     $Age=$_POST['Age'];
     $Reason=$_POST['Reason'];
     if($Name!=""&&$Age!=""&&$Reason!="")
     {
     $sql="insert into users(uname,uage,reason) values('$name',$age,'$reason')";
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
</body>
</html>