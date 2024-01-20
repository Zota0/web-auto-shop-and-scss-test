
<?php

$dbServerName = "localhost";
$dbUsername = 'php';
$dbPassword = '';
$dbName = 'store';
$dbPort = 4306;

// Function to establish a database connection
function connectToDatabase($dbsn, $dbun, $dbpa, $dbnm, $dbpr) {
    // Replace with your MySQL database name

    // Create connection
    $conn = new mysqli($dbsn, $dbun, $dbpa, $dbnm, $dbpr);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Function to insert user data into the table
function insertUserData($conn, $userData) {
    foreach ($userData as $key => $value) {
        $userData[$key] = $conn->real_escape_string($value);
    }

    $sql = "INSERT INTO profile (FirstName, LastName, Pass, enc_key, language, DateOfBirth, DateOfCreation, OtherData) 
            VALUES (
                '{$userData['FirstName']}', 
                '{$userData['LastName']}', 
                '{$userData['Pass']}', 
                '{$userData['enc_key']}', 
                '{$userData['language']}', 
                '{$userData['DateOfBirth']}', 
                '{$userData['DateOfCreation']}', 
                '{$userData['OtherData']}'
            )";

    if ($conn->query($sql) == TRUE) {
        return "<script>console.log('New record created successfully');</script>";
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to close the database connection
function closeConnection($conn) {
    $conn->close();
}


?>