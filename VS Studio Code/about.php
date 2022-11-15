<!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaden Marshall's About</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="what.css">
</head>
<body>
<div>
        <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large"
            onclick="w3_close()">Close &times;</button>
            <a href="dashboard.php" class="w3-bar-item w3-button">Home</a>
            <a href="about.php" class="w3-bar-item w3-button">About</a>
            <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
            <a href="meetingprediction.php" class="w3-bar-item w3-button">Minigame</a>
            </div>
        <div id="main">
            <div class="w3-purple">
            <button class="w3-button w3-purple w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</button>
            <div class="w3-container">
</div>
    </div>
    <h1>GAMES COMING SOON</h1>
    <p>Hello my name is Kaden Marshall this is where I am testing games!</p>
    <img src="images/ConnectMe_LightModeV2.png" alt="Where is the Logo Kaden" width="600" height="600">

  <div id="about" class="w3-content"></div>
    <h1>About Me</h1>
    <p>Hello! My name is Kaden Marshall. I am currently a student from the University of Missouri looking to break into the tech industry.</p>
    <p>Currently I have an Associates Degree in General Studies. I am currently a Senior and will be graduating with a Bachelors Degree in Information Technology.</p>
    <p> This is for my Capstone project. We have built an applicaiton called ConnectMe</p>
    <img src="ConnectMe_DarkModeV2.png" alt="Where is my Supersuit?" style="Width:100%">
    
    <div>
   
    </div>

    <script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</body>
</html>