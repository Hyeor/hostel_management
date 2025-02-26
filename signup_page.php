<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="image-section"></div>
        <div class="form-section">
            <h2>Sign up</h2>
            <p>Create your account in a seconds</p>
            <form>
                <input type="text" placeholder="Full Name" required>
                <input type="text" placeholder="Number Phone" required>
                <input type="password" placeholder="Create Password" required>
                <div class="gender-options">
                    <label><input type="radio" name="gender" value="Woman" required> Woman</label>
                    <label><input type="radio" name="gender" value="Man" required> Man</label>
                </div>
                <button type="submit">Create an account</button>
            </form>
            <p class="login-link">Already a member? <a href="#">Login</a></p>
            <div class="divider">Or continue with</div>
            <div class="social-icons">
                <img src="logo/gg_icon.png" alt="Google">
                <img src="logo/facebook_icon.png" alt="Facebook">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
                <img src="logo/X_icon.jpg" alt="Twitter">
            </div>
        </div>
    </div>
</body>
</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        height: 100vh;
    }

    .image-section {
        flex: 1;
        background: url('cozy-room.jpg') center/cover no-repeat;
    }

    .form-section {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 2rem;
    }

    h2 {
        font-size: 2rem;
        font-weight: bold;
    }

    p {
        color: gray;
        margin-bottom: 1rem;
    }

    form {
        width: 100%;
        max-width: 350px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .gender-options {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 25px;
        margin: 15px 0;
    }

    .gender-options label {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 15px 0;
        cursor: pointer;
        font-size: 16px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #7c4dff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
    }

    .login-link {
        margin-top: 10px;
    }

    .login-link a {
        color: #7c4dff;
        text-decoration: none;
        font-weight: bold;
    }

    .divider {
        margin: 20px 0;
        text-align: center;
        color: gray;
    }

    .social-icons {
        display: flex;
        gap: 10px;
    }

    .social-icons img {
        width: 40px;
        cursor: pointer;
    }
</style>