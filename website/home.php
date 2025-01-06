<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Site Solutions</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <!-- side nav + hamburger menu -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="home">Home</a>
        <a href="contact">Contact</a>
        <a href="offerte">Offerte</a>
        <a href="login">Login</a>
       
    </div>

  <div class="hamburger-container" >
    <span class="hamburger" onclick="openNav()" data-aos="fade-right" >&#9776;</span>
</div>

<div class="welkom" data-aos="fade-up">
    <h1>Site Solutions</h1>
    <p> Ben je als bedrijf of particulier op zoek naar een professionele website? Dan ben je bij ons aan het juiste adres! <br> Wij maken websites op maat, volledig naar jouw wensen. </p>
    
</div>
  




    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
         AOS.init();
    </script>
</body>
</html>