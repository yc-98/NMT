<!DOCTYPE html>
<html lang="en">
<head>
  <title>Select Packet Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Login Result</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "cciitk";
$db="nmt";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}









$uname=$_POST["name"];
$pass=$_POST["password"];
$c="select * from users where username='$uname' AND password='$pass'";
$result = $conn->query($c);
$cnt=$result->num_rows;
if($cnt == 1)
{
//echo "<script type='text/javascript'>alert('login successfully');</script>";
//	system("/var/www/html/nmt/script.sh");
      system("/var/www/html/script.sh");
        header('Location: http://localhost/select.html');
}
else
{

echo "<h1 align='center'><a href='login.html'>TRY AGAIN</a></h1>";
}

?>
</body>
</html>
