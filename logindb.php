<?php
$servername = "localhost";
$username = "root";
$password = "cciitk";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
//create database
$sql = "CREATE DATABASE nmt";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error."<br>";
}



$db="nmt";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";





//create table
$sql = "CREATE TABLE users (
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error."<br>";
}
//insert values
$sql="insert into users 
	values
		('yc','pass'),
		('yash','1234');";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully<br>";
} else {
    echo "Error inserting data: " . $conn->error."<br>";
}
/*$sql="SELECT username from users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["username"]. " - Name: " . $row["password"]. " " . "<br>";
    }
} else {
    echo "0 results";
}*/
$conn->close();

?> 
