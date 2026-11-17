
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "<h2 align='center'>EMPLOYEE DETAILS</h2>";
}

$sql = "SELECT * FROM emptable";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {

    echo "<table border='2' align='center'>";
    echo "<tr>";
    echo "<th>Employee ID</th>";
    echo "<th>Employee Name</th>";
    echo "<th>Department</th>";
    echo "<th>Salary</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($res)) {

        echo "<tr>";
        echo "<td>" . $row['empid'] . "</td>";
        echo "<td>" . $row['empname'] . "</td>";
        echo "<td>" . $row['dept'] . "</td>";
        echo "<td>" . $row['empsalary'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
else {
    echo "No records found";
}

mysqli_close($conn);
?>
