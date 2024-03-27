<?php
include('conn.php');

// Function to prevent SQL injection
function sanitize($data) {
    global $conn;
    return mysqli_real_escape_string($conn, $data);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
        $id = sanitize($_GET['id']);

        // Delete data from database
        $delete_query = "DELETE FROM `forum` WHERE id=$id";
        if ($conn->query($delete_query) === TRUE) {
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

// Close database connection
$conn->close();
?>
