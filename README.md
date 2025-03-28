<?php
session_start();
include('db.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if ($role == 'admin') {
        $query = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    } else {
        $query = "SELECT * FROM students WHERE username='$username' AND password='$password'";
    }

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        header("Location: dashboard.php");
    } else {
        echo "Invalid Credentials!";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <select name="role">
            <option value="admin">Admin</option>
            <option value="student">Student</option>
        </select>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
