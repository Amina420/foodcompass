
<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $db = require __DIR__ . "/connection.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $db->query($sql);
    
    $user = $result->fetch_assoc();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Donation Platform</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="index.php">Donation<span> Food Com</span>pass</a></div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <ul class="menu">
                <li><a href="#about-us" class="menu-btn">About Us</a></li>
                <li><a href="#team" class="menu-btn">Our Team</a></li>
                <li><a href="#contactForm" class="menu-btn">Contact Us</a></li>
                <li><a href="teamhire.php" class="menu-btn">Hire Team</a></li>
                <li><a href="donatefood.php" class="menu-btn">Donate Food</a></li>      
            </ul>
            <div class="menu-btn"> <i class="fa-solid fa-bars"></i></div>
        </div>

        <?php if (isset($user)): ?>
        
        <h6 class="text-center" style="margin:auto; color: #ffc800;">Hello <?= htmlspecialchars($user["name"])?> !</h6>
        <p class="text-center" style="margin: auto;"><a class="btn btn-danger btn-sm" href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p class="text-center" style="margin:auto;"><a class="btn btn-warning btn-sm" href="login.php">Log In</a>
        <a class="btn btn-warning btn-sm" style="margin:auto;" href="signup.php">Sign Up</a></p>
        
    <?php endif; ?>
    </nav>

     <!-- Banner Section -->

    <section class="banner-container">
        <div class="banner">
            <h1>Passion to Support Community.</h1>
            <p>"Give us a hand to help people striving in poverty. This is the first Food Donation platform. <br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            providing free waste and leftover food management team."</p>
                <a class="btn btn-warning" href="foodrequest.php">Request for Food</a>
 
        </div>
    </section>

<!-- About Us Section -->

<section id="about-us" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-content"> <br>
                    <h2>Welcome to Our Food Compass</h2>
                    <p>The online donation food compass is newly build food donation platform which provides different services as compare to others.
                    We are offering online services to make requests for food donation, handling events and join us as a team.</p>
                    <p>We are offering waste management team free of cost and it happens first time in Donation Food Compass. We are motivated 
                    and ready to ancourage people to donate food to overcome hunger and save food instead of wasting it.</p>
                    <a href="teamregister.php" class="btn btn-warning">Join Our Mission</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-image">
                    <img src="images/food2.jpg" alt="About Us Image" width="650" height="400">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="mission-vision">
                    <h3>Our Mission</h3>
                    <p>At Donation Food Compass, our Aim is to overcome the hunger and save food from getting it waste.
                    Our mission is to manage leftover food from different occasions and provide it to people who really need it.
                It will help not only the community but also overcome the envrionmental problems causing due to the waste.</p>
                    <h3>Our Vision</h3>
                    <p>The Donation Food Compass, wanted the world with no hunger and waste. Our motive will be encourage people
                    not to waste food and hire our team to manage the events and handling the food servings.
                Our vision is to make this process automated and facilitate people to the extent that they instead of wasting food
            they book us to pick up the food.</p>
                </div>
            </div>
        </div>
        
        </div>
    </div>
</section>

<!-- Team Section -->

<section id="team" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-content"><br>
                    <h2>Our Event Management Team</h2>
                    <p>We are not just another company. We are a community of passionate individuals dedicated to making a difference. Our journey began with a simple idea – to create something meaningful that impacts lives.</p>
                    <p>Here at Food Donation Platform, We are providing free of cost Waste Management Team which willl handle events and provide free
                    services. Only need to book out team in advance and help people who really need it. The team will manage the leftover food
                    and donate it to people who really need it. The can be booked online using the link below.</p>
                    <a href="teamhire.php" class="btn btn-warning">Hire Our Team</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-image">
                    <img src="images/team.jpg" alt="About Us Image" width="700" height="450">
                </div>
            </div>
        </div>
    </div>
</section>

 
<!-- Footer -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>Log Your Query</h5>
                <form id="contactForm">
                    <div class="form-group">
                     <label for="name">
                      Name:
                     </label>
                     <input class="form-control" id="name" placeholder="Enter your name" required="" type="text"/>
                    </div>
                    <div class="form-group">
                     <label for="email">
                      Email:
                     </label>
                     <input class="form-control" id="email" placeholder="Enter your email" required="" type="email"/>
                    </div>
                    <div class="form-group">
                     <label for="message">
                      Message:
                     </label>
                     <textarea class="form-control" id="message" placeholder="Enter your message" required=""></textarea>
                    </div>
                        <button class="btn btn-warning" type="submit">Submit</button>
                   </form>

            </div>
            <div class="col-md-3">
                <h5>Quick Links</h5>
                <div class="footer-links">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="teamhire.php">Hire Team</a></li>
                        <li><a href="donatefood.php">Donate Food</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="teamregister.php">Register for Team</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <h5>Contact Us</h5>
                <div class= "footer-contact">
                    <ul>
                        <li><a href=""><i class="fas fa-phone"></i>&nbsp;&nbsp;+44 7478 709565</a></li>
                        <li><a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+44 7478 709565</a></li>
                        <li><a href=""><i class="fas fa-envelope"></i>&nbsp;&nbsp;mina.begum@study.beds.ac.uk</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <h5>Follow us on</h5>
                <div class="social-icons">
                    <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram-square"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <!-- Add more social media icons -->
                </div>
            </div>
        </div>
    </div>
</footer>
 
<script>
    $(document).ready(function() {
    $('#contactForm').submit(function(e) {
        e.preventDefault();
        alert('Thank you for your Query! We will work on it soon.');
        $('#contactForm')[0].reset();
    });
});
</script>


    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if(this.scrollY > 20){
                    $('.navbar').addClass("Sticky");
                }
                else{
                    $('.navbar').removeClass("Sticky");
                }
            });
        });
    </script>
    

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>


   
