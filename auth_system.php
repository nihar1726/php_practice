<?php
session_start();
$servername = "localhost";
$username = "root"; // your MySQL username
$password = "";     // your MySQL password
$dbname = "auth_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle Registration
if (isset($_POST['register'])) {
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if username exists
    $checkUser = "SELECT id FROM users WHERE username='$user'";
    $res = mysqli_query($conn, $checkUser);

    if (mysqli_num_rows($res) > 0) {
        $error = "Username already exists. Try another!";
    } else {
        $insert = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
        if (mysqli_query($conn, $insert)) {
            $success = "Registration successful! You can now login.";
        } else {
            $error = "Registration failed: " . mysqli_error($conn);
        }
    }
}

// Handle Login
if (isset($_POST['login'])) {
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$user'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) === 1) { 
        $row = mysqli_fetch_assoc($res);
        if (password_verify($pass, $row['password'])) { //COMPARES THE PASSWORD USER ENTERED $pass with THE HASHED PASSWORD IN THE DATABASE $row['password]
            $_SESSION['username'] = $row['username']; // Store username in session
            header('Location: auth_system.php'); // Redirect to the same page to avoid resubmission
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "No such user!";
    }
}

// Handle Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: auth_system.php'); 
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Authentication System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        form { margin-bottom: 20px; }
        input { margin: 5px 0; padding: 8px; width: 200px; }
        button { padding: 8px 16px; }
        .message { color: green; }
        .error { color: red; }
        .link { margin-top: 10px; display: block; }
    </style>
</head>
<body>

<?php if (isset($_SESSION['username'])): ?> 
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p><a href="?logout=true">Logout</a></p>

<?php else: ?>

    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'login';

    if (isset($error)) {
        echo "<p class='error'>$error</p>";
    }
    if (isset($success)) {
        echo "<p class='message'>$success</p>";
    }
    ?>

    <?php if ($page == 'register'): ?>
        <h2>Register</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Choose Username" required><br>
            <input type="password" name="password" placeholder="Choose Password" required><br>
            <button type="submit" name="register">Register</button>
        </form>
        <a class="link" href="auth_system.php">Already have an account? Login here</a>

    <?php else: ?>
        <h2>Login</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Enter Username" required><br>
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <button type="submit" name="login">Login</button>
        </form>
        <a class="link" href="auth_system.php?page=register">New user? Register here</a>
    <?php endif; ?>

<?php endif; ?>

</body>
</html>
