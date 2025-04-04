<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Site Solutionds</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="libraries/aos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=WindSong:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/s.png" type="image/x-icon">
</head>

<body>
<?php 
  include 'connect.php'
  
  
  ?>
    <?php
    include 'functies/pagina/header.php';
    ?>

    <main class="bg">
        <div class="cont-form glass-blur">
            <h2 data aos="fade-left">Contacteer ons</h2>
            <p>Heb je een vraag of wil je meer informatie over onze diensten?<br> Neem dan contact met ons op via onderstaand formulier.</p>
            <br>
            <form action="send_mail.php" method="POST">
                <label for="name">Naam:</label><br>
                <input type="text" id="name" name="name" required><br><br>

                <label for="email">E-mailadres:</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <label for="message">Bericht:</label><br>
                <textarea id="message" name="message" rows="5" required></textarea><br><br>

                <button type="submit">Verstuur</button>
            </form>
        </div>
    </main>
    <div class= "extra-info glass-blur">
    <div class="openingstijden">
 <img src= "images/loc.png" alt="Locatie">
 <br>
 <br>
 <br>
        <iframe width="100%" height="300" frameborder="0" scrolling="no"
            marginheight="0" marginwidth="0"
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Gustave%20van%20de%20woestijnestraat%2052+(Site%20Solutions)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            <a href="https://www.gps.ie/">gps systems</a></iframe>
    </div>


    <div class="openingstijden">
       <img src= "images/cont.png" alt="Contact">
       <br>
        
        <a href="mailto:sitesolutions.contact@gmail.com">E-mail naar Site Solutions</a>
        <br>
        <a href="tel:+32471041591">+32 471 04 15 91</a>
        <br>

        <a href="mailto:yassine.b2007@hotmail.com">E-mail naar Medewerker</a>
        <br>
        <a href="tel:+32499912181">+32 499 91 21 81</a>
        <br>
        <a href="mailto:dante.gallardoledon@gmail.com">E-mail naar Medewerker</a>
        <br>
        <a href="tel:+32478102541">+32 478 10 25 41</a>
    </div>


 

    <div class="openingstijden">

    <img src= "images/tijd.png" alt="Openingstijden">
    <p>Maandag: 00:00 - 24:00</p>
    <p>Dinsdag: 00:00 - 24:00</p>
    <p>Woensdag: 00:00 - 24:00</p>
    <p>Donderdag: 00:00 - 24:00</p>
    <p>Vrijdag: 00:00 - 24:00</p>
    <p>Zaterdag: 00:00 - 24:00</p>
    <p>Zondag: 00:00 - 24:00</p>

    </div>
    
</div>
  
    







    <?php
    include 'functies/pagina/footer.php';
    ?>
    <script>
  AOS.init();
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      const hamburger = document.getElementById('hamburger');
      const navLinks = document.getElementById('nav-links');

      hamburger.addEventListener('click', function() {
        navLinks.classList.toggle('show');
      });
    });
  </script>

</body>

</html>