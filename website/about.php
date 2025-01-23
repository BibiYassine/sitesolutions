<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=WindSong:wght@400;500&display=swap" rel="stylesheet">

</head>

<body class="about">
    <!-- Header -->
<?php include 'functies/pagina/header.php';?>
    <div class="tekst-about">

        <h1 data aos="fade-up">Site Solutions</h1>

        <div class="tekst-contact">
            <p>Ben jij als bedrijf of particulier op zoek naar een betrouwbare partner voor jouw project of website?<br>Op zoek naar een team dat voor jou een webshop of website maakt en / of onderhoud, <br> dan ben je bij <strong>Site Solutions</strong> bij het juiste adres. <br><br> Contacteer ons bij je nodige vragen, voor een offerte of om een afspraak<br> te maken voor een vergadering.</p>
        </div>
    </div>





    <!-- Footer -->
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