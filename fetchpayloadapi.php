<?php
include 'config.php'; // Include the database configuration file

// Prepare the SQL query to fetch all data
$sql = "SELECT `id`, `data`, `timestamp` FROM `data_table` WHERE 1";

// Execute the query
$result = $conn->query($sql);

// Check if data is available
if ($result->num_rows > 0) {
    $payload = ""; // Initialize the payload string

    while ($row = $result->fetch_assoc()) {
        // Concatenate each row as plain text, separated by commas
        $payload .= "ID: " . $row['id'] . ", Data: " . $row['data'] . ", Timestamp: " . $row['timestamp'] . "\n";
    }

    // Send the payload as plain text
    echo $payload;
} else {
    echo "No data found";
}

// Close the database connection
$conn->close();
?>
