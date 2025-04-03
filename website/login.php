<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Site Solutions</title>
    <link rel="shortcut icon" href="images/s.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="libraries/aos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=WindSong:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'functies/pagina/header.php'; include 'connect.php'; include 'functies/functies.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'register') {
        
        $naam = $_POST['naam'];
        $email = $_POST['email'];
        $wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);

        $klant_id = register($mysqli, $naam, $email, $wachtwoord);
        echo "klant_id: ";
        echo $klant_id;
        $type = getUserType($klant_id, $mysqli);
        $_SESSION['klant_id'] = $klant_id;

        if ($type === 'admin') {
            header('Location: admin.php');
        } else {
            header('Location: profile.php');
        }

    } elseif ((isset($_POST['action']) && $_POST['action'] === 'login')) {

        $emailoruser = $_POST['email'];
        $wachtwoord = $_POST['wachtwoord'];
        $klant_id = login($mysqli, $emailoruser, $wachtwoord);

        if (!($klant_id == 0)) {
            $type = getUserType($klant_id, $mysqli);
            $_SESSION['klant_id'] = $klant_id;
            if ($type === 'admin') {
                header('Location: admin.php');
            } else {
                header('Location: profile.php');
            }
        } else {
            echo "<script>alert('Gebruikersnaam of wachtwoord is onjuist.');</script>";
        }

    }
}
    
    ?>

    <div class="center-container login-page">
        <div class="cont">
            <div class="form sign-in">
                <h2>Welcome</h2>
                <form method="POST">
                    <input type="hidden" name="action" value="login">
                    <label>
                        <span>E-mail of Gebruikersnaam</span>
                        <input type="email" name="email" required />
                    </label>
                    <label>
                        <span>Wachtwoord</span>
                        <input type="password" name="wachtwoord" required />
                    </label>
                    <p class="forgot-pass"><a href="reset_password.php">Wachtwoord vergeten?</a></p>
                    <button type="submit" class="submit">Sign In</button>
                </form>
            </div>
            <div class="sub-cont">
                <div class="img">
                    <div class="img__text m--up">
                        <h1>Welkom terug!</h1>
                        <h3>Heb jij nog geen account? Maak hier één aan!</h3>
                    </div>
                    <div class="img__text m--in">
                        <h1>Welkom!</h1>
                        <h3>Heb jij al een account, log hier in.</h3>
                    </div>
                    <div class="img__btn">
                        <span class="m--up">Sign Up</span>
                        <span class="m--in">Sign In</span>
                    </div>
                </div>
                <div class="form sign-up">
                    <h2>Maak je account aan</h2>
                    <form method="POST">
                        <input type="hidden" name="action" value="register">
                        <label>
                            <span>Naam</span>
                            <input type="text" name="naam" required />
                        </label>
                        <label>
                            <span>E-mail</span>
                            <input type="email" name="email" required />
                        </label>
                        <label>
                            <span>Wachtwoord</span>
                            <input type="password" name="wachtwoord" required />
                        </label>
                        <button type="submit" class="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
</body>

</html>
