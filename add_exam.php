<?php
session_start();
include('db.php');
if ($_SESSION['role'] != 'admin') { header("Location: index.php"); exit; }
if (isset($_POST['add_exam'])) {
    $exam_name = $_POST['exam_name'];
    $query = "INSERT INTO exams (exam_name) VALUES ('$exam_name')";
    mysqli_query($conn, $query);
    echo "Exam Added Successfully!";
}
?>
<form method="POST">
    <input type="text" name="exam_name" placeholder="Exam Name" required>
    <button type="submit" name="add_exam">Add Exam</button>
</form>