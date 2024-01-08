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

// Establish a database connection
$conn = mysqli_connect("localhost", "root", "", "projectoss");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the data from the form
$username = $_POST['username'];
$password = $_POST['password'];
$blood_group = $_POST['blood_group'];
$age = $_POST['age'];
$address = $_POST['address'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// Build the SQL query
$sql = "UPDATE bbms SET password='$password', blood_group='$blood_group', age=$age, address='$address', state='$state', phone='$phone', email='$email' WHERE username='$username'";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

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




    
