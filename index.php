<?php
/**
 * Dynamic Web Form Processor - PHP & HTML5
 * Author: Rami Izzeddin
 */

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username'] ?? ''));
    if (!empty($username)) {
        $message = "Welcome back, " . $username . "! Server processed your POST request successfully.";
    } else {
        $message = "Please enter a valid name.";
    }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Dev Portfolio - PHP & HTML5</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="card">
        <h1>PHP & HTML5 Form Handler</h1>
        <p>Demonstrating secure input sanitization and server-side request processing.</p>
        
        <?php if (!empty($message)): ?>
            <p style="color: #27ae60; font-weight: bold;"><?php echo $message; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <label for="username">Your Name:</label>
            <input type="text" id="username" name="username" placeholder="Enter your name..." required>
            <button type="submit">Submit Request</button>
        </form>

        <div class="badge">PHP Server Running (v<?php echo phpversion(); ?>)</div>
    </div>
</body>
</html>
