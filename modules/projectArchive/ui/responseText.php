<!--Load Course Title by CourseNo-->
<?php
$ID = $_GET["ID"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "based";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT tbl_course.Title FROM tbl_course WHERE tbl_course.ID='".$ID."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $res=$result->fetch_array();
    echo $res['Title'];
} else {
    echo "No Course Selected";
}
$conn->close();
?>
