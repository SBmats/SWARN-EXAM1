<?php
session_start();
if ($_SESSION['role'] != 'admin') { header("Location: index.php"); exit; }
?>
<h1>Welcome Admin!</h1>
<a href="add_exam.php">Add Exam</a>
<a href="logout.php">Logout</a>