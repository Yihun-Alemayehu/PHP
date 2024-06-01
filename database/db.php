<?php
$username = "root";
$databasename = "127.0.0.1";
$password = "576243819";

// create a connection
$conn = new mysqli($dabasename, $username, $password);

if ($conn->connect_error) {
    die("Error connecting to database: " . $conn->error);
}

echo "Connected to database\n";

// create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS tutorials";
// $conn->query($sql);

if ($conn->query($sql) == True) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error;
}

$query0 = "USE tutorials";

$conn->query($query0);

// create a table if it doesn't exist
$query1 = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($query1) === TRUE) {
    echo "Table created successfully\n";
} else {
    echo "Error creating table: " . $conn->error;
}

// insert a data item into the table
$query2 = "INSERT INTO users (firstname, lastname, email)
    VALUES ('zerihun', 'kassahun', 'zeri@zerish')";

if ($conn->query($query2) === TRUE) {
    echo "New record created successfully\n";
} else {
    echo "Error: " . $query2 . "<br>" . $conn->error;
}

// read the records from the database
$query3 = "SELECT id, firstname, lastname, email FROM users";
$result = $conn->query($query3);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . "- $name: " . $row["firstname"] . "- $name: " . $row["lastname"] . "- $email: " . $row["email"] . "<br>";
    }
}

// update record with new record data
$query4 = "UPDATE users SET firstname = 'Kalkidan', lastname = 'Ejigu' WHERE id = 3";

if ($conn->query($query4) === TRUE) {
    echo "Record updated successfully\n";
} else {
    echo "Error: " . $query4 . "<br>" . $conn->error;
}

// delete a record from the database

$query5 = "DELETE FROM users WHERE id = 2";

if ($conn->query($query5) === TRUE) {
    echo "Record deleted successfully\n";
} else {
    echo "Error: " . $query5 . "<br>" . $conn->error;
}

?>