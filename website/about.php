<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Solutions - Over Ons</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=WindSong:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <?php include 'functies/pagina/header.php'; ?>

    <!-- Main Content -->
    <main class="bg">
        <div class="about glass-blur">
            <h1>Over <strong>Site Solutions</strong></h1>
            <div class="about-content glass-blur">
                <div class="about-text glass-blur">
                    <p><strong>Site Solutions</strong> is een toonaangevend bedrijf dat zich richt op het leveren van op maat gemaakte websites voor bedrijven van verschillende groottes. Wij creëren niet alleen functionele websites, maar zorgen er ook voor dat ze perfect aansluiten bij de unieke behoeften van jouw bedrijf. Ons team combineert technologie met creativiteit om een online aanwezigheid te bouwen die zowel visueel aantrekkelijk als functioneel is.</p>
                    <p>Bij <strong>Site Solutions</strong> zorgen we ervoor dat onze klanten niet alleen tevreden zijn met de uiteindelijke product, maar dat hun bedrijf groeit door effectieve online strategieën. Wij leveren diensten zoals webontwikkeling en langdurige ondersteuning en onderhoud om ervoor te zorgen dat jouw website altijd optimaal presteert.</p>
                </div>
            </div>

            <div class="about-services">
               
                <div class="service">
                    <img src="images/about.png" alt="Webontwikkeling">
                    <h3>Webontwikkeling</h3>
                    <p>Onze webontwikkelaars bouwen op maat gemaakte websites die naadloos integreren met de bedrijfsdoelen en klantbehoeften van jouw bedrijf. We zorgen ervoor dat de gebruikerservaring optimaal is op zowel desktop als mobiel.</p>
                </div>
                
                <div class="service">
                    <img src="images/about2.png" alt="Ondersteuning en onderhoud">
                    <h3>Ondersteuning en Onderhoud</h3>
                    <p>Onze werk stopt niet bij de lancering van je website. We bieden voortdurende ondersteuning en onderhoud om ervoor te zorgen dat je website altijd up-to-date, snel en veilig blijft.</p>
                </div>
            </div>

            <br>
            <h1>Live Website Preview</h1>

    <!-- Container voor de iframes -->
    <div class="container-web">
        <div class="iframe-container">
            <iframe src="https://www.needforcardetailing.be" title="Live Preview 1"></iframe>
        </div>
        <div class="iframe-container">
            <iframe src="https://www.salmarina.be" title="Live Preview 2"></iframe>
        </div>
        <div class="iframe-container">
            <iframe src="https://myshoes.zoobagogo.com/" title="Live Preview 3"></iframe>
        </div>
    </div>

            <!-- Nieuwe sectie: Onze Missie -->
            <div class="about-mission">
                <h2>Onze Missie</h2>
                <p>Bij <strong>Site Solutions</strong> streven we ernaar om bedrijven te voorzien van de meest innovatieve en gebruiksvriendelijke digitale oplossingen. Wij geloven dat elke onderneming recht heeft op een sterke online aanwezigheid die hen helpt om te groeien en succesvol te zijn in een steeds meer digitale wereld.</p>
                <p>Onze missie is om websites te bouwen die niet alleen technisch geavanceerd zijn, maar ook een positieve ervaring bieden voor de gebruikers. Wij focussen ons op de lange termijn door klanten te ondersteunen met strategisch advies, technische expertise en constante optimalisatie.</p>
                <div class="mission-image">
                    <img src="images/mission.png" alt="Onze Missie">
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'functies/pagina/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hamburger = document.getElementById('hamburger');
            const navLinks = document.getElementById('nav-links');

            hamburger.addEventListener('click', function () {
                navLinks.classList.toggle('show');
            });
        });
    </script>
</body>

</html>
