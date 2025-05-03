<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Popup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .booking-popup {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            visibility: hidden;
        }
        .popup-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            position: relative;
        }
        .popup-content h2 {
            margin-top: 0;
        }
        .popup-content label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .popup-content input, .popup-content textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .popup-content button {
            background-color: #5cb85c;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .popup-content button:hover {
            background-color: #4cae4c;
        }
        .close-popup {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
        }
        .open-popup-btn {
            margin: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .open-popup-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<button class="open-popup-btn">Book Now</button>

<div class="booking-popup" id="bookingPopup">
    <div class="popup-content">
        <span class="close-popup" id="closePopup">&times;</span>
        <h2>Booking Form</h2>
        <form action="" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="people">Number of People</label>
            <input type="number" id="people" name="people" min="1" required>

            <label for="names">Names of Other People</label>
            <textarea id="names" name="names" rows="3" placeholder="Enter names separated by commas"></textarea>

            <label for="price">Price ($)</label>
            <input type="number" id="price" name="price" min="0" required>

            <label for="fromDate">From Date</label>
            <input type="date" id="fromDate" name="fromDate" required>

            <label for="toDate">To Date</label>
            <input type="date" id="toDate" name="toDate" required>

            <button type="submit" name="submit">Submit Booking</button>
        </form>
    </div>
</div>

<script>
    const openPopupBtn = document.querySelector('.btn-primary btn');
    const bookingPopup = document.getElementById('bookingPopup');
    const closePopup = document.getElementById('closePopup');

    openPopupBtn.addEventListener('click', function() {
        bookingPopup.style.visibility = 'visible';
    });

    closePopup.addEventListener('click', function() {
        bookingPopup.style.visibility = 'hidden';
    });

    window.addEventListener('click', function(event) {
        if (event.target == bookingPopup) {
            bookingPopup.style.visibility = 'hidden';
        }
    });
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $people = intval($_POST['people']);
    $names = htmlspecialchars($_POST['names']);
    $price = floatval($_POST['price']);
    $fromDate = htmlspecialchars($_POST['fromDate']);
    $toDate = htmlspecialchars($_POST['toDate']);

    // echo "<h3>Booking Details:</h3>";
    // echo "Name: $name<br>";
    // echo "Email: $email<br>";
    // echo "Number of People: $people<br>";
    // echo "Names of Other People: $names<br>";
    // echo "Price: \$$price<br>";
    // echo "From: $fromDate<br>";
    // echo "To: $toDate<br>";
}
?>

</body>
</html>
