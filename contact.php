<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Jorge Torres Reyes</title>
    <link rel="stylesheet" href="css/finalproject.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&family=Merriweather:wght@300&family=Roboto&family=Unna&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="navbar">
            Jorge Alberto Torres Reyes
            <div class="pagebuttons">
                <button onclick="window.location.href = './index.html'">Home</button> 
                <button onclick="window.location.href = './aboutMe.html'">About Me</button> 
                <button onclick="window.location.href = './skills.html';">Skills</button>
                <button onclick="window.location.href = './projects.html';">Projects</button>
                <button onclick="window.location.href = './contact.php';">Contact</button>
            </div>
        </div> 
    </header>

    <div class="ContactSection" id="contactmelink">
        <h1>Contact Me</h1>
        <div class="informationInput">
            <p>Name:</p>
            <input type="text" name="Name"/>
            <p>Email:</p>
            <input type="text" name="email"/>
            <p>Phone Number:</p>
            <input type="text" name="phone number"/>
            <p>Messsage:</p>
            <input type="text" name="Message"/>
        </div>
    </div>

    <footer>
        <button id="twitterbutton" onclick="window.open('https://twitter.com/georgeatr','_blank')"></button>
        <button id="facebookbutton" onclick="window.open('https://www.facebook.com/jorge.torres.50999','_blank')"></button>
        <button id="instagrambutton" onclick="window.open('https://www.instagram.com/_george_19/','_blank')"></button>
        <button id="linkedinbutton" onclick="window.open('https://www.linkedin.com/in/jorge-torres-reyes-7598b6181','_blank')"></button>
        <button id="githubbutton" onclick="window.open('https://github.com/georgeatr','_blank')"></button>
        <button id="itchiobutton" onclick="window.open('https://jorgeatr.itch.io/','_blank')"></button>
    </footer>
    
</body>

</html>