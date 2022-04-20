<?php

// Save our Form Data
$firstName = $_POST["FirstName"];
$lastName = $_POST["LastName"];
$username = $_POST["Username"];
$password = $_POST["Password"];

// Make sure posted Form Data is valid before inserting into the database
if($firstName == NULL || trim($firstName) == "")
{
    exit("First Name is a required field");
}
if($lastName == NULL || trim($lastName) == "")
{
    exit("Last Name is a required field");
}
if($username == NULL || trim($username) == "")
{
    exit("User Name is a required field");
}
if($password == NULL || trim($password) == "")
{
    exit("Password is a required field");
}

// Credentials for accessing the database
$servernameDb = "localhost";
$usernameDb = "root";
$passwordDb = "root";
$dbname = "coolairplease";

// Create connection
$conn = new mysqli($servernameDb, $usernameDb, $passwordDb, $dbname);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

// Insert HTML Form into usser table
$sql = "INSERT INTO users (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD)
        VALUES ('" . $firstName . "', '" . $lastName . "', '" . $username. "', '" . $password . "')";
if ($conn->query($sql) === TRUE)
{
    echo "You are now registered.";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>

