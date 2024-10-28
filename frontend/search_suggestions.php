<?php
// Include the database connection
include "db_conn.php";

$query = $_GET['query'];

// Fetch stories that contain the query

 $stmt = $conn->prepare("SELECT `Story` FROM `stories` WHERE `Story` LIKE CONCAT('%', ?, '%') AND  `reviewed` = 1 LIMIT 10");
// $stmt = $conn->prepare("SELECT `Story` FROM `stories` WHERE `Story` LIKE CONCAT('%', ?, '%') AND `Exhibition` = 'Disc' AND `Disc_Type` NOT LIKE 'What would you like to see in our Migration Museum' LIMIT 10");
$stmt->bind_param("s", $query);
$stmt->execute();
$result = $stmt->get_result();
$count = 0;
$allWords = [];

while ($row = $result->fetch_assoc()) {
    // Split the story into individual words
    $words = preg_split('/\s+/', $row['Story']);
    foreach ($words as $word) {
        // Clean up the word and check if it contains the query substring
        // Now using a condition to exclude words with special characters
        if (!preg_match('/[^a-zA-Z0-9-]/', $word)) {
            // Word does not contain special characters
            if (stripos($word, $query) !== false) {
                $allWords[] = strtolower($word); // Convert to lowercase to ensure uniqueness
                $count++;
            }
        }
    }
}


// Remove duplicates
$uniqueWords = array_unique($allWords);

// Sort words alphabetically or by another criteria if needed
sort($uniqueWords);

// Return suggestions as a simple list

if ($count==0) {
    echo '&nbsp;No results';
} else {
    echo '&nbsp;CONFIRM YOUR SELECTION:';
    echo '<ul>';
}
foreach ($uniqueWords as $word) {
    echo '<li><a href="?search=' . htmlspecialchars($word) . '">' . htmlspecialchars($word) . '</a></li>';
}

if ($count==0) {
} else {
    echo '</ul>';
}

// Close connections
$stmt->close();
$conn->close();
?>

