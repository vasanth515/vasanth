<?php
include_once 'data.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
 <head>
 <title>reservation details</title>
 <link rel="stylesheet" href="fetch.css">
 </head>
<body>
<header> 
<nav>
        <label>Challenger Gym</label>
        <ul>
            <li><a class="active" href="about.html">About</a></li>
            <li><a href="#">Feedback</a></li>
            <li><a href="first page.html">Home</a></li>
        </ul>
    </nav>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Name</td>
    <td>Address</td>
    <td>gender</td>
    <td>Phone</td>
    <td>Date</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>