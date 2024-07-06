
<?php
require("register.class.php")
?>
<?php

if(isset($_POST['submit']))
{

    $user=new RegisterUser($_POST['username'],$_POST['password'],$_POST['email']);

}

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Perform your backend processing (e.g., save to database, validation, etc.)

    // If processing is successful, redirect to the desired page
    header("Location: userdetails.php");
    exit(); // Ensure script termination after redirection
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Idea Fusion Logo">
           
        </div>
    </header>
<main>
    <div class="content" >
       
            <div id="a">
                <div id="b">
                    <h1>Sign Up </h1>

                </div>
                
                <div id="c">
                    <form method="post" action="" enctype="multipart/form-data" autocomplete="off">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>

                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                
                         <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        
                        <a href="userdetails.php">
                        <input type="submit" value="submit" name="submit">
                        </a>
                        <p class="error"><?php echo @$user->error?></p>
                        <p class="success"><?php echo @$user->success?></p>
                        
                    </form>

                </div>
            </div>
            <br>
        </div>
        </main>

    <footer>
        <div class="contact-info">
            <p>Email: <a href="mailto:info@example.com">srijareddypatlolla128@gmail.com</a></p>
        </div>
        <div>
            <p>Contact Us: +919704802196</p>
        </div>
        <div class="social-media">
            <a href="#" target="_blank">Facebook</a>
            <a href="#" target="_blank">Twitter</a>
            <a href="#" target="_blank">Instagram</a>
        </div>
        <div class="legal-links">
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
        <div class="quicklink">
            <p>Quicklinks</p>
            <a href="home.html">Home</a>
            <a href="aboutus.html">About Us</a>
            <a href="joinus.html">Join us</a>
            <a href="signup.html">Signup</a>
        </div>
    </footer>
</body>
<!-- //     $ussername=$_POST['ussername'];
//     $email=$_POST['email'];
//     $password=$_POST['password'];
//     $fullname=$_POST['fullname'];

// include("./configg.php");
// $logindata=$conn->prepare("
// INSERT INTO logindata (ussername,email,password,fullname)
// VALUES ('$ussername','$email','$password','$fullname')
// ");

// $result=$logindata->execute();

// if($result){
//     echo "Data inserted";
// }
// else{
//     echo "operation failed";
// } -->

</html>


