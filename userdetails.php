
<?php
require("user.class.php")
?>
<?php

if(isset($_POST['submit']))
{

    $user=new User($_POST['name'],
                           $_POST['username'],
                           $_POST['email'],
                           $_POST['phone'],
                           $_POST['bio'],
                           $_POST['skills'],
                           $_POST['intrest']);

}

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bio = $_POST['bio'];
    $skills = $_POST['skills'];
    $intrest = $_POST['intrest'];
    

    // Perform your backend processing (e.g., save to database, validation, etc.)

    // If processing is successful, redirect to the desired page
    header("Location: joinus.html");
    exit(); // Ensure script termination after redirection
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>user details</title>
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
                    <h1>User Profile </h1>

                </div>
                
                <div id="c">
                    <form method="post" action="" enctype="multipart/form-data" autocomplete="off">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>

                        
                
                         <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="phone">Phone</label>
                        <input type="phone" id="phone" name="phone" required>

                        <label for="bio">Bio</label>
                        <input type="bio" id="bio" name="bio" required>

                        <label for="skils">skills</label>
                        <input type="skills" id="skills" name="skills" required>

                        <label for="intrest">Intrests</label>
                        <input type="intrest" id="intrest" name="intrest" required>

                        <label for="project">Projects</label>
                        <input type="file" id="project" name="project" >


                        
                        <a href="joinus.html">
                        <input type="submit" value="saveprofile" name="submit">
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


