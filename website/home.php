<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Site Solutions</title>
  <!-- <link rel="shortcut icon" href="images/s.ico" type="image/x-icon"> -->
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/s.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=WindSong:wght@400;500&display=swap" rel="stylesheet">

</head>

<body>
  <?php 
  include 'connect.php';
  session_start();
  //initaliseerd de klant variabele zodat er verder geen errors komen voor bezoekers die niet zijn ingelogd.
  if(!isset($_SESSION['email'])){
      $_SESSION['email'] = "gast";
  }
  
  ?>
  <?php include 'functies/pagina/header.php';?>

  <main class="bg">
    <section class="home" class="bg">
      <div class="home-content glass-blur">
        <h1>Welkom bij Site Solutions</h1>
        <p>Zoek jij een bedrijf dat gespecialiseerd is in het maken van websites, webapplicaties en webshops. <br>Wij maken websites voor zowel particulieren als bedrijven.<br> Wij maken websites op maat en zorgen ervoor dat de website voldoet aan de wensen van de klant.</p>
        <a href="about" class="btn">Meer over S-S</a>
      </div>
    </section>

  <br>
  <br>
  <br>
  <h1>Waarom kiezen voor Site Solutions?</h1>
      <br>
      
      <div class="info">
  <div class="info-tekst glass-blur">
    <img src="images/persoonlijk.png" alt="Service">
    <h2>Persoonlijke Service</h2>
    <p>Bij Site Solutions sta jij centraal.<br> U kunt ons 24/7 bereiken omdat we met een team werken dat altijd voor de klant klaar staat.<br> We denken met je mee en bieden ondersteuning van begin tot eind,<br> zodat je altijd tevreden bent met het eindresultaat.</p>
  </div>

  <div class="info-tekst ">
    <img src="images/professioneel.png" alt="Professioneel">
    <h2>Professioneel en gebruiksvriendelijk</h2>
    <p>Onze websites en webshops zijn niet alleen visueel aantrekkelijk,<br> maar ook eenvoudig te beheren.<br> Zo kun jij je focussen op wat echt belangrijk is: jouw onderneming.</p>
  </div>

  <div class="info-tekst glass-blur">
    <img src="images/oplossing.png" alt="Oplossing">
    <h2>Op maat gemaakte oplossingen</h2>
    <p>Bij Site Solutions krijg je websites en webshops die volledig aansluiten bij jouw wensen en doelen. Of je nu een particulier bent of een bedrijf, <br>wij creëren digitale oplossingen die werken.</p>
  </div>
</div>


<h1>Wat is nu perfect voor uw bedrijf?</h1>
<div class="diensten">

    <div class="diensten-tekst">
      <h2>Website</h2>
      <p>Het is belangrijk om een blijvende indruk te maken op je klanten.
    <br>Wij creëren websites die perfect aansluiten bij jouw visie.
    <br>Zo zorgen we ervoor dat je doelgroep zich aangesproken voelt.
    Met een gebruiksvriendelijke en visueel aantrekkelijke website bereik je jouw doelen sneller.</p>
    <br>
      <ul>
        <li>Responsive design</li>
        <li>Icl. Onderhoud</li>
        <li>Gebruiksvriendelijk</li>
        <li>Binnen de week online</li>
      </ul>
      <br>
      <a href="services#website" class="btn">Meer over websites</a>
    </div>


    <div class="diensten-tekst">
      <h2>Webapplicatie</h2>
      <p>Een webapplicatie is een softwaretoepassing die via een webbrowser werkt. <br>
      Het biedt interactieve functies voor het beheren van gegevens of het uitvoeren van taken.<br>
       Webapplicaties zijn platformonafhankelijk en toegankelijk voor iedereen met internetverbinding.</p>
      <br>
      <ul>
        <li>Eigen beheerdashboard</li>
        <li>Gebruiksvriendelijk</li>
        <li>Makkelijk te beheren</li>
        <li>Interactiviteit</li>
      </ul>
      <br>
      <a href="services#webapplicatie" class="btn">Meer over webapplicaties</a>
    </div>

    <div class="diensten-tekst">
      <h2>Webshop</h2>
      <p>Een webshop biedt de kans om wereldwijd te verkopen, 24/7 bereikbaar voor klanten. <br>
      Het stelt je in staat om eenvoudig bestellingen te verwerken en betalingen te ontvangen. <br>
      Begin vandaag nog en vergroot je bereik zonder de beperkingen van een fysieke winkel!</p>
      <br>
      <ul>
        <li>Overal bereikbaar</li>
        <li>Betaalfuncties</li>
        <li>Gebruiksvriendelijk</li>
        <li>24/7 support</li>
      </ul>
      <br>
      <a href="services#webshop" class="btn">Meer over webshops</a>
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