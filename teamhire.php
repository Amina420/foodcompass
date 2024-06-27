
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Hire Request</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/teampart.css">
</head>
<body>
    <div class="container">
        <h1 href="index.php">Donation<span> Food Com</span>pass</h1>
        <h3>Book Your Event</h3>
        <p>Please make a request to book waste management team in advance.</p>

        <form action="teamhire.php" method="post">
            <div class="row">
            <div class="col-md-6 mt-4">
                <label for="name"><i class="fas fa-user"></i>&nbsp;&nbsp; Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full name" required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="email"><i class="fas fa-envelope"></i>&nbsp;&nbsp; Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="phone"><i class="fas fa-phone"></i> &nbsp;&nbsp;Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Conact no" required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="address"><i class="fa-solid fa-address-book"></i>&nbsp;&nbsp;Address:</label>
                <input type="text" class="form-control" id="address" name="address" placeholder= "Enter your full address"required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="option"><i class="fa-solid fa-calendar"></i>&nbsp;&nbsp;Event Type</label>
                <select class="form-control" id="option" name="option">
                    <option value="Option 1">Select option..</option>
                    <option value="Option 1">Mariage Cermoney</option>
                    <option value="Option 2">Engagement Party</option>
                    <option value="Option 3">Festival</option>
                    <option value="Option 3">Birthday Part</option>
                    <option value="Option 3">Occasional Gathering</option>
                    <option value="Option 3">Others</option>
                </select>
            </div>
            <div class="col-md-6 mt-4">
                <label for="quantity"><i class="fa-solid fa-user-group"></i>&nbsp;&nbsp;Total Members</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1" placeholder="Enter total number of people" required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="date"><i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;Date:</label>
                <input type="date" class="form-control" id="date" name="date" placeholder="Enter event data" required>
            </div>
            <div class="col-md-6 mt-4">
                <label for="message"><i class="fa-solid fa-message"></i>&nbsp;&nbsp;Message:</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder= "Enter further detail if any..." required></textarea>
            </div>
            </div>
<br>
            <input type="submit" name="request" class="btn btn-warning btn-block" value="Submit Request"/> 
        </form>
    </div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>



<?php

$db = require __DIR__ . "/connection.php";

if(isset($_POST['request']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$option = $_POST['option'];
$quantity = $_POST['quantity'];
$date = $_POST['date'];
$message = $_POST['message'];


$sql = "INSERT INTO form_data (name, email, phone, address, option_selected, quantity, date, message)
        VALUES ('$name', '$email', '$phone', '$address', '$option', '$quantity', '$date', '$message')";

if ($db->query($sql) === TRUE) {
echo '<div class="alert alert-success text-center">Thank you for your request. Our team will contact you within 1:00 hour for further detail. </div>';
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();

}

?>