
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request to join Team</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/teampart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

    <div class="container">
        <h1 href="index.php">Donation<span> Food Com</span>pass</h1>
        <h3>Join Our Team</h3>
        <p>Be a part of our Waste Management Team by registering your request!</p>

        <form action="teamregister.php" method="post">
            <div class="row">
            <div class="col-md-6 mt-4">
                <label for="name"><i class="fas fa-user"></i> Name:</label>
                <input type="text" id="name" name="name" placeholder="Full name" required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                <input type="email" id="email" name="email" placeholder="Email address" required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="phone"><i class="fas fa-phone"></i> Phone:</label>
                <input type="text" id="phone" name="phone" placeholder="Contact detail" required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="address"><i class="fa-solid fa-address-book"></i>&nbsp;&nbsp; Address:</label>
                <input type="text" id="address" name="address" placeholder="Enter full address" required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="occupation"><i class="fa-solid fa-user-tie"></i>&nbsp;&nbsp;Occupation:</label>
                <input type="text" id="occupation" name="occupation" placeholder="Current job here" required/>
            </div>
            <div class="col-md-6 mt-4">
                <label for="gender"><i class="fa-solid fa-person-half-dress"></i>&nbsp;&nbsp;Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="col-md-12 mt-4">
                <label for="message"><i class="fa-solid fa-file"></i>&nbsp;&nbsp;Cover Note</label>
                <textarea id="message" name="message" rows="4" placeholder="Write your cover note.." required></textarea>
            </div> 
            </div><br>
            <input type="submit" name="register" class="btn btn-warning btn-block" value="Register">
        </form>
    </div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>


<?php

$db = require __DIR__ . "/connection.php";


if(isset($_POST['register']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$occupation = $_POST['occupation'];
$gender = $_POST['gender'];
$message = $_POST['message'];

$sql = "INSERT INTO register (name, email, phone, address, occupation, gender, message)
        VALUES ('$name', '$email', '$phone', '$address', '$occupation', '$gender', '$message')";


if ($db->query($sql) === TRUE) {
echo '<div class="alert alert-success text-center">Thank you for your interest. Our team will contact you within 1:00 hour. </div>';
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
}


?>
