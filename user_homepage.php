<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="styles.css?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .hero-container {
            width: 100%;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            font-size: 24px;
            position: relative;
            margin-top: 80px;
            margin-bottom: 60px;
            background-size: cover;
            background-position: center;
            transition: opacity 1s ease-in-out;
        }
        /* Dark overlay for better text visibility */
        .hero-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .hero-text {
            position: absolute;
            font-size: 28px;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        .property-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            width: 90%;
            max-width: 1200px;
            margin-bottom: 60px;
        }

        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
            text-align: center;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            background: #f5f5f5;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 2px solid #ddd;
        }

        .card h2 {
            font-size: 18px;
            font-weight: bold;
            margin: 15px 0;
            color: #333;
        }

        .card-content {
            padding: 15px;
            text-align: left;
            font-size: 14px;
            color: #555;
        }
        h2 {
            text-align: left;
            font-size: 22px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<!--<div class="hero-container" id="hero-container">
    <div class="hero-overlay"></div>
    <div class="hero-text">Welcome to SISPEN!</div>
</div>

<script>
        const images = [
        "image_house/background_image.jpg",
        "image_house/backgroud_3.JPG",
        "image_house/backgroud_2.png",
        "image_house/backgroud_4.JPG",
        "image_house/backgroud_5.JPG",
        "image_house/background_6.JPG",
        "image_house/backgroud_7.JPG",
        "image_house/backgroud_8.JPG",
    ];

    let index = 0;
    const heroContainer = document.getElementById("hero-container");

    function changeBackground() {
        heroContainer.style.opacity = "0";
        setTimeout(() => {
            heroContainer.style.backgroundImage = `url(${images[index]})`;
            heroContainer.style.opacity = "1";
            index = (index + 1) % images.length;
        }, 500);
    }

    changeBackground();
    setInterval(changeBackground, 3000);
</script>-->

<h2>Rumah Sewa tahun 2025</h2>
    
<div class="property-grid">
    <?php
    $properties = [
        ["description_house_1.php", "image_house/images_rumah_1.jpeg", "RUMAH SEWA 1 (PEREMPUAN)", "index_rumah_1.php"],
        ["description_house_2.php", "image_house/images_rumah_2.jpg", "RUMAH SEWA 2 (PEREMPUAN)", "index_rumah_2.php"],
        ["description_house_3.php", "image_house/images_rumah_3.jpeg", "RUMAH SEWA 3 (PEREMPUAN)", "index_rumah_3.php"],
        ["description_house_4.php", "image_house/images_rumah_4.jpeg", "RUMAH SEWA 4 (PEREMPUAN)", "index_rumah_4.php"],
        ["description_house_5.php", "image_house/images_rumah_5.jpeg", "RUMAH SEWA 5 (PEREMPUAN)", "index_rumah_5.php"],
        ["description_house_6.php", "image_house/images_rumah_6.jpg", "RUMAH SEWA 6 (PEREMPUAN)", "index_rumah_6.php"],
        ["description_house_7.php", "image_house/images_rumah_7.jpeg", "RUMAH SEWA 7 (PEREMPUAN)", "index_rumah_7.php"],
        ["description_house_8.php", "image_house/images_rumah_8.jpeg", "RUMAH SEWA 8 (PEREMPUAN)", "index_rumah_8.php"]
    ];

    foreach ($properties as $property) {
        echo "<div class='card' onclick=\"window.location.href='{$property[0]}'\">";
        echo "<img src='{$property[1]}' alt='Apartment'>";
        echo "<h2>{$property[2]}</h2>";
        echo "<div class='card-content'>";
        include $property[3];
        echo "</div>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
