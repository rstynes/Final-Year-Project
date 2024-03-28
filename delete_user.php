<?php
// Include database connection
include 'dbh.inc.php';
include 'dbhKey.inc.php';

// Check if user ID is provided in the URL
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Delete user from the database
    $stmt = $conn->prepare("DELETE FROM User WHERE User_ID = ?");
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        echo "User deleted successfully";
        echo '<a href="adminEditor.php" class="back-button">Back</a>'; // Corrected to echo the HTML
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}
?>

