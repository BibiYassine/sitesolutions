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
    <?php
    include 'functies/pagina/header.php';
    ?>

    <main class="bg">
        <div class="cont-form glass-blur">
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

    <div class="openingstijden">
        <h2>Contact</h2>

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



    <!-- <div class="google-maps-contact">
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
    <br> -->
    







    <?php
    include 'functies/pagina/footer.php';
    ?>
</body>

</html>