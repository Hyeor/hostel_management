<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Rumah Sewa</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            width: 90%;
            max-width: 450px;
            text-align: center;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        .gender-group {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            margin: 15px 0;
        }

        .gender-group label {
            font-size: 16px;
            cursor: pointer;
        }

        .gender-group input[type="radio"] {
            accent-color: #007bff;
            transform: scale(1.2);
            cursor: pointer;
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        button:hover {
            background: linear-gradient(45deg, #0056b3, #003f80);
            transform: scale(1.03);
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="process_form.php" method="POST">
            <h2>Booking <span style="color:blue;">Now</span></h2>
            <input type="text" name="name" placeholder="Enter your full name" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <input type="text" name="nic" placeholder="No IC" required>

            <label>Jantina:</label>
            <div class="gender-group">
                <input type="radio" id="lelaki" name="gender" value="Lelaki" required>
                <label for="lelaki">Lelaki</label>

                <input type="radio" id="perempuan" name="gender" value="Perempuan" required>
                <label for="perempuan">Perempuan</label>
            </div>

            <button type="submit">Booking</button>
        </form>
    </div>
</body>
</html>
