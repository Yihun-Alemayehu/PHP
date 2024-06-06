<?php
$servername = "localhost";
$username = "root";
$password = "576243819";
$dbname = "php_tut";

// create connection
$conn = new mysqli($servername, $username, $password);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "CREATE DATABASE IF NOT EXISTS php_tutorial";
$conn->query($query);
$query2 = "USE php_tutorial";

$conn->query($query2);
$query3 = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
$conn->query($query3);
$query4 = "INSERT INTO users (firstname, lastname, email)
    VALUES ('Yihun', 'Alemayehu', 'yihun@alemayehu')";
$conn->query($query4);

$sql = "INSERT INTO users (firstname, lastname, email)
VALUES ('zeri', 'kassahun', 'zeri@zerish.com')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "Connected successfully";

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email) VALUES(?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "apo";
$lastname = "esas";
$email = "apoesas@gmail.com";
$stmt->execute();

echo "new records successfully created!";

$selectquery = "SELECT id, firstname, lastname, email FROM users";
$result = $conn->query($selectquery);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . "- $name: " . $row["firstname"] . "- $name: " . $row["lastname"] . "- $email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

?>