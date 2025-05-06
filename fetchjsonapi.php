<?php
include 'config.php'; // Include the database configuration file

// Prepare the SQL query to fetch all data
$sql = "SELECT `id`, `data`, `timestamp` FROM `data_table` WHERE 1";

// Execute the query
$result = $conn->query($sql);

// Check if data is available
if ($result->num_rows > 0) {
    $response = array(); // Initialize the response array

    while ($row = $result->fetch_assoc()) {
        // Add each row as an associative array
        $response[] = $row;
    }

    // Send the response as JSON
    header('Content-Type: application/json'); // Set the header for JSON response
    echo json_encode($response);
} else {
    echo json_encode(array("message" => "No data found"));
}

// Close the database connection
$conn->close();
?>
