<?php
$servername = "localhost";
$username = "root";
$password = "576243819";

// create a connection
$conn = new mysqli($servername, $username, $password);

// check connection
if ($conn->connect_error) {
    die("Error connecting to database: " . $conn->error);
}

// create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS school";
$conn->query($sql);

// use the database

$query0 = "USE school";
$conn->query($query0);


// create a table if it doesn't exist
$query = "CREATE TABLE IF NOT EXISTS student (
        Fname VARCHAR(30) NOT NULL,
        ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Lname VARCHAR(30) NOT NULL,
        Department VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
$conn->query($query);

// insert a data item into the table
$query1 = "INSERT INTO student (Fname, Lname, Department)
        VALUES ('etaba', 'lukas', 'data analysis')";
$conn->query($query1);

// read the records from the database
$query2 = "SELECT ID, Fname, Lname, Department FROM student";
$result = $conn->query($query2);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"] . "- $name: " . $row["Fname"] . "- $name: " . $row["Lname"] . "- $email: " . $row["Department"] . "<br>";
    }
} else {
    echo "0 results";
}
?>