
<?php session_start();
include("./assets/php/config.php");
if(!empty($_SESSION["address"])) {
    header("location:index.php");
}
echo $_SESSION["address"];
$email = $address = "";
$email_err = $address_err = $info_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["address"]))){
        $password_err = "Please enter your address.";
    } else{
        $address = $_POST["address"];
    }
    
    // Validate credentials
    if(empty($email_err) && empty($address_err)){
        // Prepare a select statement
        $query = "UPDATE `users` SET `email`='".$email."', `address`='".$address."' WHERE `id` = '".$_SESSION["id"]."'";
        mysqli_query($link, $query);
        header("location: index.php");
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill in your information for payment processing and shipping location.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $address_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>

</html>