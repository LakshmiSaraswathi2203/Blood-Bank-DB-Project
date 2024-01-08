<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "projectoss";
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="SELECT username,password from login WHERE username='$username' and password='$password'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)===1)
        {
            		while($row=mysqli_fetch_assoc($result))
        	{
        		if($row['username']===$username && $row['password']===$password)
        		{
            				header('Location:front.html');
        		}
                
            }
        }
    }  
?>
