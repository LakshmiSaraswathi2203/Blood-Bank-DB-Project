<!DOCTYPE html>
<html>
<head><title>Submit</title>
    <style>
#header
{
    width:100%;
    height:50px;
    background-color: red;
    color:white;
}
.button {
  background-color: #f44336;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
    #f1
    {
    width:100%;
    height:100px;
    background-color: red;
    color:white;
    }
    </style>
</head>
<body><center>
    <div id="header"><h2>Blood Bank Management System </h2></div>

<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "projectoss";
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$blood_group = mysqli_real_escape_string($conn, $_POST['blood_group']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

$sql = "INSERT INTO bbms(username, password, blood_group, age, address, state, phone, email)
VALUES ('$username', '$password', '$blood_group', '$age', '$address', '$state', '$phone', '$email')";
if (mysqli_query($conn, $sql)) {
    echo "";
    echo "";
    echo "User data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><a href="front.html" class="button" align="right">Click to Go Back</a></center>
<center><div id="f1"><h4>Contact Information:<br>
<table border="3">
    <tr>
        <th>Whatsaap:</th>
        <th>Facebook:</th>
        <th>Instagram:</th>
        <th>Twitter:</th>
        <th>Phone:</th>
    </tr>
    <tr>
        <td>+91 9876543215</td>
        <td>bbms.com</td>
        <td>bb_ms987</td>
        <td>BBMS_official</td>
        <td>9876543215</td>
    </tr>
</table>
    <br> </h4></div></center>
</center>
</body>
</html>
