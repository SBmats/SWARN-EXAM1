<?php
session_start();
if ($_SESSION['role'] != 'student') { header("Location: index.php"); exit; }
?>
<h1>Welcome Student!</h1>
<a href="take_exam.php">Take Exam</a>
<a href="logout.php">Logout</a>