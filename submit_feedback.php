<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Prepare data to save in the file
    $data = "Rating: " . $rating . " Stars\nComment: " . $comment . "\n--------------------------\n";

    // Append the data to the feedback.txt file
    file_put_contents('feedback.txt', $data, FILE_APPEND);

    // Redirect to the Thank You page
    header("Location: thankyou.php");
    exit();
}
?>
