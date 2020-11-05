<?php
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
if (!empty($firstName)){
if (!empty($lastName)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "insert_db";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO insert (firstName, lastName)
values ('$firstName','$lastName')";
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
echo "lastName should not be empty";
die();
}
}
else{
echo "firstName should not be empty";
die();
}
?>