<?php
session_start(); // Start the session or continue the existing one

// Check if keywords are sent to the script
if (isset($_POST['keywords'])) {
    // Assume keywords are separated by ";", split them into an array
    $keywordsArray = explode(';', $_POST['keywords']);
    
    // Store the keywords array in a session variable
    $_SESSION['storyKeywords'] = $keywordsArray;
    
    echo json_encode($keywordsArray); // Send back the stored keywords as a response
} else {
    echo "No keywords received";
}
?>
