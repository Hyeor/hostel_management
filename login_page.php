<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { display: flex; height: 100vh; justify-content: center; align-items: center; background-color: #f8f8f8; }
        .container { display: flex; width: 900px; background: #fff; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden; animation: fadeIn 1s ease-in-out; }
        .left { width: 50%; background: url('https://source.unsplash.com/600x600/?home,interior') no-repeat center center/cover; }
        .right { width: 50%; padding: 40px; }
        .right h2 { font-size: 28px; font-weight: 600; margin-bottom: 10px; }
        .right p { font-size: 14px; color: gray; margin-bottom: 20px; }
        .input-box { width: 100%; margin-bottom: 15px; position: relative; }
        .input-box input { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px; outline: none; transition: border-color 0.3s; }
        .input-box input.valid { border-color: green; }
        .input-box input.invalid { border-color: red; }
        .message { font-size: 12px; margin-top: 5px; display: none; }
        .error { color: red !important; font-weight: bold; }
        .success { color: green; }
        .checkbox { display: flex; align-items: center; font-size: 14px; margin-bottom: 15px; }
        .checkbox input { margin-right: 8px; }
        .forgot { color: #6c5ce7; text-decoration: none; margin-left: auto; }
        .btn { width: 100%; background: #6c5ce7; color: #fff; padding: 12px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s; }
        .btn:hover { background-color: #5b4dbf; }
        .social-icons { display: flex; gap: 10px; margin-top: 20px; }
        .social-icons img { width: 40px; cursor: pointer; transition: transform 0.3s; }
        .social-icons img:hover { transform: scale(1.1); }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left"></div>
        <div class="right">
            <h2>Login</h2>
            <p>Login your account in seconds</p>
            <form id="loginForm">
                <div class="input-box">
                    <input type="email" id="email" name="email" placeholder="Email">
                    <p class="message" id="emailMessage"></p>
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <p class="message" id="passwordMessage"></p>
                </div>
                <div class="checkbox">
                    <input type="checkbox" id="keep-logged-in">
                    <label for="keep-logged-in">Keep me logged in</label>
                    <a href="#" class="forgot">Forget password?</a>
                </div>
                <button type="submit" class="btn">Log in</button>
                <div class="social-icons">
                    <img src="logo/gg_icon.png" alt="Google">
                    <img src="logo/facebook_icon.png" alt="Facebook">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
                    <img src="logo/X_icon.jpg" alt="Twitter">
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            let isValid = true;
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const emailMessage = document.getElementById('emailMessage');
            const passwordMessage = document.getElementById('passwordMessage');
            
            emailMessage.style.display = 'none';
            passwordMessage.style.display = 'none';
            
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            
            if (!emailPattern.test(email.value)) {
                emailMessage.textContent = 'Invalid email format.';
                emailMessage.className = 'message error';
                emailMessage.style.display = 'block';
                email.classList.add('invalid');
                email.classList.remove('valid');
                isValid = false;
            } else {
                emailMessage.textContent = 'Valid email!';
                emailMessage.className = 'message success';
                emailMessage.style.display = 'block';
                email.classList.add('valid');
                email.classList.remove('invalid');
            }
            
            if (!passwordPattern.test(password.value)) {
                passwordMessage.textContent = 'Password must be at least 8 characters, include an uppercase letter, a number, and a special character.';
                passwordMessage.className = 'message error';
                passwordMessage.style.display = 'block';
                password.classList.add('invalid');
                password.classList.remove('valid');
                isValid = false;
            } else {
                passwordMessage.textContent = 'Valid password!';
                passwordMessage.className = 'message success';
                passwordMessage.style.display = 'block';
                password.classList.add('valid');
                password.classList.remove('invalid');
            }
            
            if (!isValid) {
                event.preventDefault();
                alert('Please fix the errors before submitting.');
            } else {
                alert('Login successful!');
                localStorage.setItem('email', email.value);
            }
        });

        window.onload = function() {
            const savedEmail = localStorage.getItem('email');
            if (savedEmail) {
                document.getElementById('email').value = savedEmail;
            }
        };
    </script>
</body>
</html>