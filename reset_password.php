<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    // Check if the user exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Reset Password</title>
        </head>
        <body>
            <h2>Reset Password</h2>
            <form action="update_password.php" method="POST">
                <input type="hidden" name="username" value="<?= $username ?>">
                
                <p>Enter your current password:</p>
                <input type="password" name="current_password">

                <p>Or, answer the security question:</p>
                <label><?= $user['security_question'] ?></label>
                <input type="text" name="security_answer">

                <p>New Password:</p>
                <input type="password" name="new_password" required>

                <button type="submit">Update Password</button>
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "User not found!";
    }
}
?>
