<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/teampart.css">
</head>
<body>
    <div class="container mt-5">
        <h1 href="index.php">Donation<span> Food Com</span>pass</h1>
        <h3>Register Request for Food</h3>
        <p>Please register your organization/Individual to get food.</p>

        <form action="foodrequest.php" method="post">
            <div class="form-group">
                <label for="name"><i class="fas fa-user"></i>&nbsp;&nbsp;Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="phone"><i class="fas fa-phone"></i>&nbsp;&nbsp;Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Contact No" required>
            </div>
            <div class="form-group">
                <label for="option"><i class="fa-solid fa-sitemap"></i>&nbsp;&nbsp;Organization</label>
                <select class="form-control" id="option" name="option" required>
                    <option value="Option 1">Select option..</option>
                    <option value="Option 1">NGO</option>
                    <option value="Option 2">Charity</option>
                    <option value="Option 3">Individual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message"><i class="fa-solid fa-message"></i>&nbsp;&nbsp;Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Enter message" required></textarea>
            </div>
            <input type="submit" name="contact" class="btn btn-warning btn-block" value="Submit Request"/>
        </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>



<?php

$db = require __DIR__ . "/connection.php";

if(isset($_POST['contact']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$option = $_POST['option'];
$message = $_POST['message'];


$sql = "INSERT INTO contact (name, email, phone, option_selected, message)
        VALUES ('$name', '$email', '$phone', '$option', '$message')";

if ($db->query($sql) === TRUE) {
echo '<div class="alert alert-success text-center">Thank you requesting food. Our team will contact you when food will be available. </div>';
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();

}

?>
