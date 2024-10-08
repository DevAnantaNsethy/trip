<?php
session_start();
include 'db.php';  // Include your database connection

// If user is already logged in, redirect to profile or home page
if (isset($_SESSION['user_email']) || isset($_COOKIE['user_email'])) {
    header('Location: profile.php');  // Redirect to a profile page or home page
    exit();
}

// Handle signup form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirm-password']);

    if ($password !== $confirmPassword) {
        $signupError = "Passwords do not match!";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO customer (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION['user_email'] = $email;
            setcookie('user_email', $email, time() + (86400 * 30), "/"); // 30-day cookie
            header('Location: profile.php');  // Redirect to profile or home page
            exit();
        } else {
            $signupError = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM customer WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_email'] = $row['email'];
            setcookie('user_email', $row['email'], time() + (86400 * 30), "/"); // 30-day cookie
            header('Location: profile.php');  // Redirect to profile or home page
            exit();
        } else {
            $loginError = "Invalid password!";
        }
    } else {
        $loginError = "No user found with this email!";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <!-- Login Form -->
            <form id="loginForm" class="form login-form">
                <h2>Login</h2>
                <div class="input-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="form-btn">Login</button>
                <p class="switch-form">Don't have an account? <span onclick="showSignupForm()">Sign up here</span></p>
            </form>

            <!-- Signup Form -->
            <form id="signupForm" class="form signup-form">
                <h2>Sign Up</h2>
                <div class="input-group">
                    <label for="signup-email">Email</label>
                    <input type="email" id="signup-email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="signup-password">Password</label>
                    <input type="password" id="signup-password" placeholder="Enter your password" required>
                </div>
                <div class="input-group">
                    <label for="signup-confirm-password">Confirm Password</label>
                    <input type="password" id="signup-confirm-password" placeholder="Confirm your password" required>
                </div>
                <button type="submit" class="form-btn">Sign Up</button>
                <p class="switch-form">Already have an account? <span onclick="showLoginForm()">Login here</span></p>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
