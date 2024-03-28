<?php
// Define database connection parameters
include_once 'dbhQuiz.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question_text = $_POST["QuestionText"];
    $ans1 = $_POST["Ans1"];
    $ans2 = $_POST["Ans2"];
    $ans3 = $_POST["Ans3"];
    $ans4 = $_POST["Ans4"];
    $correct_ans = $_POST["CorrectAns"];

    // Insert data into database
    $stmt = $conn3->prepare("INSERT INTO Quiz (QuestionText, Ans1, Ans2, Ans3, Ans4, CorrectAns) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $question_text, $ans1, $ans2, $ans3, $ans4, $correct_ans);
    $stmt->execute();
}

// Close database connection
$stmt->close();
$conn3->close();

header('Location:adminPage.html');
?>
