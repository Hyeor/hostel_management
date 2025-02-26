<?php
// filepath: forgot-password-app/src/controllers/ForgotPasswordController.php
require_once '../config/database.php';
require_once '../models/UserModel.php';
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ForgotPasswordController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new UserModel($pdo);
    }

    public function sendResetLink($email) {
        $user = $this->userModel->findUserByEmail($email);
        if ($user) {
            $token = bin2hex(random_bytes(50));
            $this->userModel->updateUserToken($email, $token);
            $resetLink = "http://localhost/forgot-password-app/src/views/reset_password.php?token=$token";

            // Send email logic here
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.example.com'; // Set the SMTP server to send through
                $mail->SMTPAuth = true;
                $mail->Username = 'your_email@example.com'; // SMTP username
                $mail->Password = 'your_password'; // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                //Recipients
                $mail->setFrom('your_email@example.com', 'Mailer');
                $mail->addAddress($email);

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'Password Reset';
                $mail->Body    = "Click <a href='$resetLink'>here</a> to reset your password.";

                $mail->send();
                echo 'Reset link has been sent to your email.';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "No user found with this email.";
        }
    }

    public function resetPassword($token, $password) {
        $this->userModel->resetPassword($token, $password);
        echo "Password has been reset successfully.";
    }
}
?>