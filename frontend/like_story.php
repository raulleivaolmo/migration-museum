<?php
include 'db_conn.php'; // Make sure you have a connection to your database

if (isset($_POST['storyId'])) {
    $storyId = $_POST['storyId'];
    
    // Prepare your query to increment the like count
    $stmt = $conn->prepare("UPDATE stories SET votes = votes + 1 WHERE id = ?");
    $stmt->bind_param("i", $storyId);
    $stmt->execute();
    
    if ($stmt->affected_rows > 0) {
        echo 'Success';
    } else {
        echo 'Error or no changes made';
    }
    
    $stmt->close();
    $conn->close();
} else {
    echo 'Story ID not provided';
}
?>
