<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'register') {
        // Registratie
        $naam = $_POST['naam'];
        $email = $_POST['email'];
        $wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT); // Versleuteld wachtwoord
        $type = $_POST['type']; // Type gebruiker: admin of klant

        $sql = "INSERT INTO tblklant (naam, email, wachtwoord, type) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssss", $naam, $email, $wachtwoord, $type);

        if ($stmt->execute()) {
            echo "<script>alert('Registratie succesvol! Je kunt nu inloggen.');</script>";
        } else {
            echo "<script>alert('Er is iets fout gegaan bij de registratie. Probeer opnieuw.');</script>";
        }
        $stmt->close();
    } elseif (isset($_POST['action']) && $_POST['action'] === 'login') {
        // Inloggen
        $email = $_POST['email'];
        $wachtwoord = $_POST['wachtwoord'];

        $sql = "SELECT * FROM tblklant WHERE email = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($wachtwoord, $row['wachtwoord'])) {
                $_SESSION['email'] = $email;
                $_SESSION['type'] = $row['type']; // Type gebruiker opslaan

                if ($row['type'] === 'admin') {
                    header("Location: admin");
                } else {
                    header("Location: index");
                }
                exit;
            } else {
                echo "<script>alert('Ongeldig wachtwoord.');</script>";
            }
        } else {
            echo "<script>alert('Geen account gevonden met dit e-mailadres.');</script>";
        }
        $stmt->close();
    }
}
?>

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
    <?php include 'functies/pagina/header.php'; ?>

    <div class="center-container login-page">
        <div class="cont">
            <div class="form sign-in">
                <h2>Welcome</h2>
                <form method="POST">
                    <input type="hidden" name="action" value="login">
                    <label>
                        <span>E-mail</span>
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
                        <label>
                            <span>Type gebruiker</span>
                            <select name="type" required>
                                <option value="klant">Klant</option>
                                <option value="admin">Admin</option>
                            </select>
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
