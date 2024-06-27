



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Food</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/teampart.css">
</head>


<body>
    <div class="container">
        <h1 href="index.php">Donation<span> Food Com</span>pass</h1>
        <h3>Food Donation Request</h3>
        
        <form action="donatefood.php" method="post">
            <div class="row">
            <div class="col-md-6 mt-4">
                <label for="name"><i class="fas fa-user"></i> Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full name" required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="phone"><i class="fas fa-phone"></i> Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Conact no" required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="address"><i class="fa-solid fa-address-book"></i>&nbsp;&nbsp;Pickup Address:</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter full address" required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="option"><i class="fas fa-utensils"></i>&nbsp;&nbsp;Select Food Type:</label>
                <select class="form-control" id="option" name="option" required>
                    <option value="Option 3">Select option...</option>
                    <option value="Option 1">Fruits and Vegtables</option>
                    <option value="Option 2">Dairy Items</option>
                    <option value="Option 3">Meat Items</option>
                     <option value="Option 3">Drinks</option>
                      <option value="Option 3">Others</option>
                </select>
            </div>
            <div class="col-md-6 mt-4">
                <label for="quantity"><i class="fas fa-boxes"></i> Quantity:</label>
                <input type="text" class="form-control" id="quantity" name="quantity" min="1" placeholder="Enter total food weight" required/>
            </div>
            <div class="col-md-12 mt-4">
                <label for="message"><i class="fa-solid fa-message"></i>&nbsp;&nbsp;Message:</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter additional detail if any..." required></textarea>
            </div>
        </div>
        
        <br>
        <input type="submit" name="donate" class="btn btn-warning btn-block" value="Donate">
        
        </form>
    </div>

 <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>






<?php

$db = require __DIR__ . "/connection.php";

if(isset($_POST['donate']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$option = $_POST['option'];
$quantity = $_POST['quantity'];
$message = $_POST['message'];


$sql = "INSERT INTO donations (name, email, phone, address, option_selected, quantity, message)
        VALUES ('$name', '$email', '$phone', '$address', '$option', '$quantity', '$message')";

if ($db->query($sql) === TRUE) {
    echo '<div class="alert alert-success text-center">Thank you for your donation. Our team will contact you within 1:00 hour for collection. </div>';
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();

}
?>