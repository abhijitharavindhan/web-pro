
<html>

<head>
    <title>Employee Details</title>
</head>
<body>

<form method="POST" action="">
    Enter ID <input type="text" name="eid"><br>
    Enter Name <input type="text" name="ename"><br>
    Enter Dept <input type="text" name="dept"><br>
    Enter Salary <input type="text" name="salary"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{

echo "<h2 align='center'>Connected Successfully</h2>";
}


    $id = $_POST['eid'];
    $name = $_POST['ename'];
    $dept = $_POST['dept'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO emptable(empid, empname, dept, empsalary)VALUES ('".$id."','".$name."','".$dept."','".$salary."')";

   $res=mysqli_query($conn,$query);
   if($res){
    echo"submited sucessfully";

   }
   else{
    echo"error";
   }


mysqli_close($conn);

?>

</body>
</html>
