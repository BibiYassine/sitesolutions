<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Site Solutions</title>
    <link rel="shortcut icon" href="images/s.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="libraries/aos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=WindSong:wght@400;500&display=swap" rel="stylesheet">

</head>
</head>

<body>
    <?php include 'functies/pagina/header.php'; ?>

    <div class="center-container login-page">
        <div class="cont">
            <div class="form sign-in">
                <h2>Welcome</h2>
                <label>
                    <span>E-mail</span>
                    <input type="email" />
                </label>
                <label>
                    <span>Wachtwoord</span>
                    <input type="password" />
                </label>
                <p class="forgot-pass"><a href="reset_password">Wachtwoord vergeten?</a></p>
                <button type="button" class="submit">Sign In</button>

            </div>
            <div class="sub-cont">
                <div class="img">
                    <div class="img__text m--up">
                        <h1>Welkom terug!</h1>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h3>Heb jij nog geen account? Maak hier één aan!<h3>
                    </div>
                    <div class="img__text m--in">
                        <h1>Welkom!</h1>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h3>Heb jij al een account, log hier in.<h3>
                    </div>
                    <div class="img__btn">
                        <span class="m--up">Sign Up</span>
                        <span class="m--in">Sign In</span>
                    </div>
                </div>
                <div class="form sign-up">
                    <h2>Maak je account aan</h2>
                    <label>
                        <span>Naam</span>
                        <input type="text" />
                    </label>
                    <label>
                        <span>E-mail</span>
                        <input type="email" />
                    </label>
                    <label>
                        <span>Wachtwoord</span>
                        <input type="password" />
                    </label>
                    <button type="button" class="submit">Sign Up</button>

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