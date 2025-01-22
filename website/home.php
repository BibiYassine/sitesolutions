<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Site Solutions</title>
  <!-- <link rel="shortcut icon" href="images/s.ico" type="image/x-icon"> -->
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=WindSong:wght@400;500&display=swap" rel="stylesheet">

</head>

<body>
  <?php include 'functies/pagina/header.php';?>

  <main>
    <section class="home">
      <div class="home-content">
        <h1>Welkom bij Site Solutions</h1>
        <p>Wij zijn een bedrijf dat gespecialiseerd is in het maken van websites en webapplicaties. <br>Wij maken websites voor zowel particulieren als bedrijven.<br> Wij maken websites op maat en zorgen ervoor dat de website voldoet aan de wensen van de klant. Wij maken gebruik van de nieuwste technieken en zorgen ervoor dat de website er goed uitziet op alle apparaten.</p>
        <a href="contact.php" class="btn">Contact</a>
      </div>
    </section>
    <div  class="bg"></div>
    
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