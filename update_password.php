<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $current_password = $_POST['current_password'];
    $security_answer = $_POST['security_answer'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

    // Check if the user exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Verify current password OR security answer
        if (password_verify($current_password, $user['password']) || strtolower($security_answer) == strtolower($user['security_answer'])) {
            // Update password
            $stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
            $stmt->bind_param("ss", $new_password, $username);
            if ($stmt->execute()) {
                echo "Password updated successfully! <a href='login.php'>Login</a>";
            } else {
                echo "Error updating password.";
            }
        } else {
            echo "Incorrect password or security answer!";
        }
    } else {
        echo "User not found!";
    }
}
?>
