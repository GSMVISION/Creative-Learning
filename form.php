<?php
// Establish database connection

  include("conn.php");

// Function to prevent SQL injection
function sanitize($data) {
    global $conn;
    return mysqli_real_escape_string($conn, $data);
}

// Function to confirm data deletion
function confirmDelete($id) {
    echo "<script>
            var confirmation = confirm('Are you sure you want to delete this record?');
            if (confirmation) {
                window.location.href = 'delete.php?id={$id}';
            }
          </script>";
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);

    // Check for duplicate keys
    $check_query = "SELECT id FROM `forum` WHERE name='$name' OR email='$email'";
    $result = $conn->query($check_query);
    if ($result->num_rows > 0) {
        echo "<script>alert('Duplicate key found!');</script>";
    } else {
        // Insert data into database
        $insert_query = "INSERT INTO `forum` (name, email) VALUES ('$name', '$email')";
        if ($conn->query($insert_query) === TRUE) {
            echo "<script>alert('Data inserted successfully!');</script>";
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Home Page</h2>
    <a href="index.php" class="btn btn-primary">Home</a>
    <br><br>

    <h3>Data Insertion</h3>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <br><br>

    <h3>Data List</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch and display data
            $fetch_query = "SELECT * FROM `forum`";
            $result = $conn->query($fetch_query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>
                            <a href='#' class='btn btn-danger' onclick='confirmDelete(" . $row["id"] . ")'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    function confirmDelete(id) {
        var confirmation = confirm('Are you sure you want to delete this record?');
        if (confirmation) {
            window.location.href = 'delete.php?id=' + id;
        }
    }
</script>

</body>
</html>

<?php
// Close database connection
$conn->close();
?>
