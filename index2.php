<?php

$servername = "localhost";
$username = "root";
$password = "sys@ag";
$database = "inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the smile table
$insertSql = "
INSERT INTO smile (fname, lname, email) VALUES
('udara', 'madushan', 'raigam'),
('john', 'doe', 'example@example.com');
";

if ($conn->query($insertSql) === TRUE) {
    echo "Data inserted successfully.<br>";
} else {
    echo "Error inserting data: " . $conn->error . "<br>";
}

// Select data from the smile table with IF condition
$selectSql = "
SELECT
    *,
    CASE
        WHEN fname = 'udara' THEN 'Udara Smile'
        WHEN fname = 'john' THEN 'John Smile'
        ELSE 'Unknown'
    END AS smile_type
FROM
    smile;
";

$result = $conn->query($selectSql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Smile Type</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["smile_type"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}