<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $db = require __DIR__ . "/connection.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $db->real_escape_string($_POST["email"]));
    
    $result = $db->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css"> 
    <link rel="stylesheet" href="css/teampart.css">

</head>
<body>
    <div class="container">
        <h1 href="index.php">Donation<span> Food Com</span>pass</h1>
        <h3>User Login</h3>

        


        <form method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                 value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <button type="submit" class="btn btn-secondary mb-2">Login</button>
            <p> Don't have an account? <a href="signup.php" class="menu-btn">Register Here</a> </p>
        </form>
        <?php if ($is_invalid): ?>
        <h6><em>Invalid email or password please try again.</em></h6>
        <?php endif; ?>
    </div>

    <!-- Bootstrap & jQuery JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html>
