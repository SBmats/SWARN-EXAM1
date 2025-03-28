<?php
session_start();
include('db.php');
if ($_SESSION['role'] != 'student') { header("Location: index.php"); exit; }
?>
<h1>Take Exam</h1>
<form method="POST">
    <label>Select Exam:</label>
    <select name="exam_id">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM exams");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['id'] . "'>" . $row['exam_name'] . "</option>";
        }
        ?>
    </select>
    <button type="submit" name="start_exam">Start</button>
</form>