<?php
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
if (!empty($fname)){
if (!empty($lname)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "demo";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO form (fname, lname)
values ('$fname','$lname')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "lname should not be empty";
die();
}
}
else{
echo "fname should not be empty";
die();
}
?>