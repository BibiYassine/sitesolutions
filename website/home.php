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

  <main class="bg">
    <h2>Welkom bij Site Solutions</h2>
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