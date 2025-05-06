<?php
include 'config.php'; // Include the database configuration file

// Check if 'data' is received from the GET method
if (isset($_GET['data'])) {
    $data = $_GET['data']; // Get the 'data' value from the GET request

    // Prepare the SQL query to insert data into the database
    $sql = "INSERT INTO `data_table` (`data`) VALUES ('$data')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully"; // Success response
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Error response
    }
} else {
    echo "No data received!"; // Response if no data is sent
}

// Close the database connection
$conn->close();
?>
