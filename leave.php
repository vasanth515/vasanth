<?php
$username=$_POST['employee name'];
$gender=$_POST['gender'];
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];

if(!empty($username)|| !empty($gender)|| !empty($month)|| !empty($day)|| !empty($year)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="pupa";

    //create a connection
    $conn=new mysqli($host, $dbusername, $dbpassword, $dbname);

    if(mysqli_connect_error()){
        die('connect error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else{
        $select="select email from register where email=? limit 1";
        $insert="insert into register("employee name, gender, month, day, year")values(?,?,?,?,?,?);

        //prepare statement
        $stmt=$conn->prepare($select);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($num==0){
            $stmt->close();

            $stmt=$conn->prepare($insert); 
            $stmt->bind_param("ssssii",$employee name, $gender, $month, $day, $year);
            $stmt->execute();
            echo "new record inserted successfully";  
        }else{
            echo "someone already register using this email";
        }
        $stmt->close();
        $conn->close();

    }
}else{
    echo "all feild are required";
    die();
}
?>