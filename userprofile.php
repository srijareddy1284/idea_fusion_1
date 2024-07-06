<?php
$json_data=file_get_contents("user.json");
$data=json_decode($json_data,true);
foreach($data as $key=> $value)
{
    //echo $value["name"]."<br/>".$value["username"]."<br/>".$value["email"]."<br/>".$value["phone"]."<br/>".$value["bio"]."<br/>".$value["skills"]."<br/>".$value["intrest"]."<br/>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Idea Fusion Logo">
            <nav>
            <a href="index.html">Home</a>
                <a href="aboutus.html">About Us</a>
                <a href="joinus.html">Join us</a>
                
            <a class="userprofile" href="userprofile.php">U</a>
            </nav>
        </div>
    </header>
<main>
  <div class="content" >
   
        
        <div class="profile-container">
            
            <div class="profile-info">
              <div>
                <h2>User Profile</h2>
                <p><strong>Name:</strong> <?php echo $value["name"]?></p>
                <p><strong>Username:</strong> <?php echo $value["username"]?></p>
                <p><strong>Email:</strong> <?php echo $value["email"]?></p>
                <p><strong>Phone:</strong> <?php echo $value["phone"]?></p>
                <!-- Add more basic information as needed -->
              </div>
              <div>
                <h2>About Me</h2>
                <p><strong>Bio:</strong> <?php echo $value["bio"]?></p>
                <!-- Add more personal details as needed -->
              </div>
            </div>
            <div class="profile-info">
              <div>
                <h2>Interests</h2>
                <p><strong>Skills:</strong> <?php echo $value["skills"]?></p>
                <p><strong>Interests:</strong> <?php echo $value["intrest"]?></p>
                <!-- Add more preferences and interests as needed -->
              </div>
             
                
            </div>
          </div>
    

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

<style>
    /* General styles */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Header styles */
    .logo {
        text-align: left;
        padding: 0px;
        background-color: black;
        display: flex;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    header {
        background-color: black;
        color: black;
        text-align: left;
        padding: 10px 10px 20px;
    }

    nav {
        justify-content: left;
        margin: 50px 0px 0px 680px;
    }

    nav a {
        color: white;
        text-decoration: none;
        padding: 10px;
        margin: 0 10px;
        transition: background-color 0.3s, text-decoration 0.3s;
    }

    nav a:hover {
        background-color: transparent;
        text-decoration: underline;
    }

    /* Content styles */
    main {
        display: flex;
        justify-content: center;
        align-items: center;
        /*height: 100vh;*/
        background-color: gray;
    }

    .pro {
        width: 80%;
        background-color: grey;
        padding: 20px;
        border: 1px solid black;
        border-radius: 10px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-top: 10px;
    }

    input,
    textarea {
        margin-bottom: 10px;
    }

    button {
        padding: 10px;
        background-color: black;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #333;
    }

    /* Footer styles */
    footer {
        background-color: black;
        color: white;
        padding: 20px;
        margin-block-start: auto;
    }

    .contact-info,
    .legal-links,
    .social-media {
        margin-bottom: 15px;
    }

    .social-media a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
    }

    .quicklink {
        margin-top: 10px;
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 600px) {
        nav {
            flex-direction: column;
            align-items: center;
        }

        nav a {
            margin: 5px 0;
        }

        .pro {
            width: 100%;
        }
    }
</style>

</html>
