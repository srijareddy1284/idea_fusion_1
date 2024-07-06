<?php
require("implementor.class.php")
?>
<?php

if(isset($_POST['agreement']))
{

    $user=new RegisterUser(
        $_POST['fullName'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['skills'],
        $_POST['experience'],
        $_POST['availability'],
       
        $_POST['onlineProfiles'],
        $_POST['projectPreferences'],
        $_POST['communicationChannels'],
        $_POST['expectations'],
        $_POST['compensation']
    );

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start implementing</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Idea Fusion Logo">
            <nav>
                <!-- <a href="index.html">Home</a>
                <a href="aboutus.html">About Us</a> -->
                <a href="joinus.html">Join us</a>
                <a href="matchmaking_results.html">Results</a>
                <a href="collab.html">collaboration tools</a>
                <a class="userprofile" href="userprofile.html">U</a>
            </nav>
        </div>
    </header>

    <main>
    <div class="content">
        
            <div class="pro">
            <form method="post" action="" enctype="multipart/form-data" autocomplete="off">
                    <h1>Project Implementor Information</h1>

                    <label for="fullName">Full Name:</label>
                    <input type="text" id="fullName" name="fullName" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone">

                    <label for="skills">Skills and Expertise:</label>
                    <input type="text" id="skills" name="skills" required>

                    <label for="experience">Previous Experience/Projects:</label>
                    <textarea id="experience" name="experience" rows="4" required></textarea>

                    <label for="availability">Availability:</label>
                    <input type="text" id="availability" name="availability" required>

                    <label for="portfolio">Portfolio:</label>
                    <input type="file" id="portfolio" name="portfolio">

                    <label for="onlineProfiles">Online Profiles:</label>
                    <input type="text" id="onlineProfiles" name="onlineProfiles">

                    <label for="projectPreferences">Project Preferences:</label>
                    <textarea id="projectPreferences" name="projectPreferences" rows="4" required></textarea>

                    <label for="communicationChannels">Preferred Communication Channels:</label>
                    <input type="text" id="communicationChannels" name="communicationChannels" required>


                    <label for="expectations">Expectations:</label>
                    <textarea id="expectations" name="expectations" rows="4" required></textarea>

                    <label for="compensation">Preferred Compensation:</label>
                    <input type="text" id="compensation" name="compensation" required>

                    <label for="agreement">Agree to Terms of Service and Privacy Policy:</label>
                    <input type="checkbox" id="agreement" name="agreement" required>

                    <button type="submit" name="submit">Submit</button>
                    <p class="error"><?php echo @$user->error?></p>
                    <p class="success"><?php echo @$user->success?></p>
                </form>
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
