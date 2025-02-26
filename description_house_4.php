<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description room</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: auto;
        }
        .property-header {
            display: flex;
            gap: 10px;
            margin: 20px 0;
        }
        .property-header img {
            width: 33%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .property-header img:hover {
            transform: scale(1.05);
        }
        .property-details {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            max-width: 90%;
            max-height: 90%;
        }
        .close {
            position: absolute;
            top: 15px;
            right: 30px;
            font-size: 40px;
            color: white;
            cursor: pointer;
        }
        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            padding: 10px 0;
        }
        .details-grid div {
            display: flex;
            justify-content: space-between;
        }
        .features {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .features ul {
            list-style: none;
            padding: 0;
        }
        .features ul li {
            padding: 5px 0;
        }
        .booking-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 15px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .booking-button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="property-header">
            <img src="image_house/livingroom_1.jpg" alt="Living Room" onclick="openModal(this)">
            <img src="image_house/Makeuproom_1.jpg" alt="Bedroom" onclick="openModal(this)">
            <img src="image_house/bathroom_1.jpg" alt="Lounge" onclick="openModal(this)">
        </div>
        
        <div id="imageModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modalImg">
        </div>
    </div>

    <script>
        function openModal(imgElement) {
            var modal = document.getElementById("imageModal");
            var modalImg = document.getElementById("modalImg");
            modal.style.display = "flex";
            modalImg.src = imgElement.src;
        }
        function closeModal() {
            document.getElementById("imageModal").style.display = "none";
        }
    </script>
        <div class="property-details">
            <h2>RUMAH SEWA 2 (PEREMPUAN)</h2>
            <p><strong>Lokasi:</strong> No 6 Impian Nuri 1</p>
            <p><strong>Harga:</strong> RM 330/Sebulan</p>
            <div class="details-grid">
                <div><span>Tel No:</span> <span>017-4897946</span></div>
                <div><span>Floor Location:</span> <span>1 tingkat</span></div>
                <div><span>Published Date:</span> <span>2 December 2020</span></div>
                <div><span>Available for Loan:</span> <span>Appropriate</span></div>
                <div><span>Advertise Status:</span> <span>Sale</span></div>
                <div><span>Furnished:</span> <span>Not</span></div>
                <div><span>Housing Shape:</span> <span>Apartment</span></div>
                <div><span>Dues:</span> <span>$1,200</span></div>
                <div><span>Room + Living Number:</span> <span>4+1</span></div>
                <div><span>Front:</span> <span>Northwest</span></div>
                <div><span>Gross / Net M²:</span> <span>150 M² / 135 M²</span></div>
                <div><span>Rental Income:</span> <span>$2,000</span></div>
                <div><span>Warming Type:</span> <span>Natural Gas</span></div>
                <div><span>Building Age:</span> <span>5</span></div>
            </div>
        </div>
        <div class="features">
            <div>
                <h3>Interior Features</h3>
                <ul>
                    <li>ADSL</li>
                    <li>Alarm</li>
                    <li>Balcony</li>
                    <li>Barbecue</li>
                    <li>Laundry Room</li>
                    <li>Dressing Room</li>
                    <li>Video Intercom</li>
                    <li>Shower</li>
                    <li>Laminate</li>
                    <li>Blinds</li>
                </ul>
            </div>
            <div>
                <h3>External Features</h3>
                <ul>
                    <li>Elevator</li>
                    <li>Gardened</li>
                    <li>Fitness</li>
                    <li>Security</li>
                    <li>Thermal Insulation</li>
                    <li>Generator</li>
                    <li>Tennis Court</li>
                    <li>Car Park</li>
                    <li>Basketball Field</li>
                    <li>Market</li>
                </ul>
            </div>
        </div>
    </div>
    <button class="booking-button" onclick="bookNow()">Booking</button>
    <script>
    function bookNow() {
        alert("Redirecting to booking page...");
        window.location.href = "booking.php"; // Change this to your actual booking page URL
    }
</script>
</body>

</html>
