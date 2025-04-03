<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Site Solutions</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/s.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=WindSong:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
<?php 
  include 'connect.php'
  
  
  ?>
<?php include 'functies/pagina/header.php';?>
    
<main class="bg">
    <h1>Onze Services</h1>
    <div class="service-tekst">

        <!-- Service 1: Website -->
        <div class="service-dienst1" id="website">
            <img src="images/website.png" alt="Website">
            <div class="dienst1-tekst glass-blur">
                <h2>Website</h2>
                <p>
                    Het is belangrijk om een blijvende indruk te maken op je klanten. Wij creëren websites die perfect aansluiten bij jouw visie. 
                    Of het nu gaat om een eenvoudige informatieve website of een uitgebreide, interactieve site, wij zorgen ervoor dat je doelgroep zich aangesproken voelt.
                    Met een gebruiksvriendelijke en visueel aantrekkelijke website bereik je jouw doelen sneller en laat je een professionele indruk achter.
                </p>
                <br>
                <ul>
        <li>Responsive design</li>
        <li>Onderhoud</li>
        <li>Gebruiksvriendelijk</li>
        <li>24/7 zichtbaar zijn voor je klanten, overal ter wereld.</li>
        <li>Online groei</li>
        <li>Digitale kracht</li>
        <li>Meer zichtbaarheid</li>
        <li>Binnen de week online</li>
      </ul>
      <br>
      
                <a href="offertes" class="btn">Vraag offerte aan</a>
            </div>
        </div>
        <br>
        <!-- Service 2: Webapplicatie -->
        <div class="service-dienst1" id="webapplicatie">
        <img src="images/webapp.png" alt="Webapplicatie">
            <div class="dienst1-tekst glass-blur">
                <h2>Webapplicatie</h2>
                <p>
                    Een webapplicatie kan de bedrijfsprocessen van jouw organisatie optimaliseren. Wij ontwikkelen op maat gemaakte webapplicaties die aansluiten bij jouw specifieke behoeften.
                    Of het nu gaat om een intern platform voor je medewerkers of een applicatie die klanten beter bedient, wij bieden de perfecte oplossing.
                    Door gebruik te maken van de nieuwste technologieën, zorgen we ervoor dat je applicatie niet alleen functioneel is, maar ook snel en veilig.
                </p>
                <br>
                <ul>
                <li>Eigen beheerdashboard</li>
                <li>Gebruiksvriendelijk</li>
                <li>Makkelijk te beheren</li>
                <li>Interactiviteit</li>
                <li>Veilig</li>
                <li>Optimale prestaties</li>
                <li>24/7 support</li>
                </ul>
            <br>
                <a href="offertes" class="btn">Vraag offerte aan</a>
                <br>
            </div>
        </div>

        <br>
        <!-- Service 3: Webshop -->
        <div class="service-dienst1" id="webshop">
            <img src="images/webshop.png" alt="Webshop">
            <div class="dienst1-tekst glass-blur">
                <h2>Webshop</h2>
                <p>
                    Met het stijgende aantal mobiele toestellen is het belangrijk dat jouw webshop ook op deze apparaten correct wordt getoond. Een webshop die mobielvriendelijk is, zorgt ervoor dat klanten ook op hun smartphone of tablet probleemloos kunnen shoppen.
                    Onze webshops zijn ontworpen om jouw producten en diensten zo aantrekkelijk mogelijk te presenteren. We combineren gebruiksvriendelijkheid met een sterke visuele uitstraling.
                    Bovendien zorgen we ervoor dat jouw webshop geoptimaliseerd is voor zoekmachines, zodat je meer klanten kunt bereiken en je omzet kunt verhogen.
                </p>
                <br>
                <ul>
                    <li>Overal bereikbaar</li>
                    <li>Betaalfuncties</li>
                    <li>Gebruiksvriendelijk</li>
                    <li>Veilig betalen</li>
                    <li>Optimale prestaties</li>
                    <li>24/7 support</li>
                    <li>Responsive</li>
                </ul>
                <br>
                <a href="offertes" class="btn">Vraag offerte aan</a>
            </div>
        </div>

    </div>
</main>
<?php include 'functies/pagina/footer.php';?>
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
