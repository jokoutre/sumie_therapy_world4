<?php
// Start the session
session_start();

// Database connection settings
$host = "localhost";
$dbname = "sumie_shop"; // Replace with your database name
$username = "root"; // Default username for XAMPP
$password = ""; // Leave empty for XAMPP

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values and sanitize
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Validation
    $errors = [];
    if (empty($email) || empty($password)) {
        $errors[] = "Email and password are required.";
    }

    // Check credentials in the database
    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(["email" => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user["password"])) {
            // Authentication successful
            $_SESSION["user_id"] = $user["id"]; // Store user ID in session
            $_SESSION["user_name"] = $user["name"]; // Store user name in session
            $_SESSION["user_email"] = $user["email"]; // Optional: store email in session

            // Redirect to homepage or dashboard
            header("Location: ../index.php");
            exit;
        } else {
            $errors[] = "Invalid email or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    // Display errors if any
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
    ?>
    <!-- Login form -->
    <form method="POST" action="login.php">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
