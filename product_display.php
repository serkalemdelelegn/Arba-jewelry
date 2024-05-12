<?php
session_start();
// Check if user is logged in and is an admin
if (!isset($_SESSION['email']) || $_SESSION['type'] != 1) {
    header('Location: ./login.php');
    exit();
}

include_once('./database.php');

// Fetch all customers from the database with their descriptions
$sql = "SELECT * FROM submissions";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <link rel="stylesheet" href="./styles.css"> 
    <style>
        /* Your custom styles here */
    </style>
</head>
<body>

<section class="customer-list">
    <h2>Customer List</h2>
    <a href="./admin.php" class="back-button">Back to Admin</a> <!-- Back to Admin button -->
    <table class="fl-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Description</th>
                <!-- Include other fields as necessary -->
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['description']); ?></td>
                    <!-- Add more cells as needed -->
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

</body>
</html>

<?php
// Close the database connection
mysqli_close($con);
?>
