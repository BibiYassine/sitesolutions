
<?php
include 'functies/sideMenu.php';

?>
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
    <?php include 'functies/sidemenu.php'; ?>

    <div class="center-container">
    <div class="cont">
        <div class="form sign-in">
            <h2>Welcome</h2>
            <label>
                <span>Email</span>
                <input type="email" />
            </label>
            <label>
                <span>Password</span>
                <input type="password" />
            </label>
            <p class="forgot-pass"><a href="reset_password">Forgot password?</a></p>
            <button type="button" class="submit">Sign In</button>
         
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h1>Welcome back!</h1>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
                    <h1>Welcome!</h1>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Create your Account</h2>
                <label>
                    <span>Name</span>
                    <input type="text" />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" />
                </label>
                <label>
                    <span>Password</span>
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