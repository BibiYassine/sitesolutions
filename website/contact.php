<?php
include 'functies/sideMenu.php';

?>


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
    <link rel="shortcut icon" href="images/s.png" type="image/x-icon">
</head>
<body>

<main class="main-contact">

<div class="contact-container">

    <h1 data aos="fade-up">Site Solutions</h1>

    <div class="tekst-contact">
        <p>Ben jij als bedrijf of particulier op zoek naar een betrouwbare partner voor jouw project of website?<br>Op zoek naar een team dat voor jou een webshop of website maakt en / of onderhoud, <br> dan ben je bij <strong>Site Solutions</strong> bij het juiste adres. <br><br> Contacteer ons bij je nodige vragen, voor een offerte of om een afspraak<br> te maken voor een vergadering.</p>
    </div>   
    </div>
    <br>
    <br>


<div class="cont-form">
<form action="send_mail.php" method="POST">
        <label for="name">Naam:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">E-mailadres:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Bericht:</label><br>
        <textarea id="message" name="message" rows="5"  required></textarea><br><br>

        <button type="submit">Verstuur</button>
    </form>
</div>
<br>
<br>
<br>
<br>
<div class="google-maps-contact">
<iframe width="100%" height="300" frameborder="0" scrolling="no" 
marginheight="0" marginwidth="0" 
src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Gustave%20van%20de%20woestijnestraat%2052+(Site%20Solutions)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
<a href="https://www.gps.ie/">gps systems</a></iframe>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="openingstijden">
    <h2>Contact</h2>
    <p>Maandag - Zondag: 00u00 - 24u00 </p><br>


<a href="mailto:sitesolutions.contact@gmail.com"><strong>E-mail naar Site Solutions</strong></a>
<br>
<a href="tel:+32471041591">+32 471 04 15 91</a>
<br>

<a href="mailto:yassine.b2007@hotmail.com"><strong>E-mail naar Medewerker</strong></a>
<br>
<a href="tel:+32499912181">+32 499 91 21 81</a>
<br>
<a href="mailto:dante.gallardoledon@gmail.com"><strong>E-mail naar Medewerker</strong></a>
<br>
<a href="tel:+32478102541">+32 478 10 25 41</a>
</div>









</main>
<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h3>Openingstijden</h3>
      <ul>
        <li>Maandag - Zondag: <br>00:00 - 24:00</li>
          
      </ul>
    </div>

    <div class="footer-section">
      <h3>Volg ons</h3>
      <ul>
       
        <li><a href="https://instagram.com/sitesolutionsbe" target="_blank"><img src="images/insta.png" width="50px" height="50px"></a></li>
        
      </ul>
    </div>

    <div class="footer-section">
      <h3>Nieuwsbrief</h3>
      <form action="#">
        <input type="email" placeholder="Voer je e-mail in" required>
        <button type="submit">Inschrijven</button>
      </form>
    </div>

    <div class="footer-section">
      <h3>Locatie</h3>
      <div style="width: 100%"><iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Gustave%20van%20de%20Woestijnestraat%2052+(Site%20Solutions)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe></div>
    </div>

    <div class="footer-section">
      <h3>Contact</h3>
      <ul>
        <li><a href="mailto:sitesolutions.contact@gmail.com">sitesolutions.contact@gmail.com</a></li>
        <li><a href="tel:+32499912181">+32 499 91 21 81</a></li>
        <li><a href="tel:+32478102541">+32 478 10 25 41</a></li>
        <li><a href="tel:+32471041591">+32 471 04 15 91</a></li>
      </ul>
    </div>
  </div>
</footer>


    <script src="script.js"></script>
    <script src="libraries/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>