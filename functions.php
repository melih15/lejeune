<!-- ================================================================================== -->

<!-- HEADTAG  -->

<!-- ================================================================================== -->


<?php
function homeHeadTag()
{
    session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE FILES -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/new/default.css">
    <link rel="stylesheet" href="css/new/variables.css">
    <link rel="stylesheet" href="css/new/nav-bar.css">
    <link rel="stylesheet" href="css/new/style.css">

    <!-- GOOGLE ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Smooth Klusbedrijf</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">


<?php
}
?>


<?php
function headTag()
{
    session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLE FILES -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/new/default.css">
    <link rel="stylesheet" href="../css/new/variables.css">
    <link rel="stylesheet" href="../css/new/nav-bar.css">
    <link rel="stylesheet" href="../css/new/style.css">

    <!-- GOOGLE ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Smooth Klusbedrijf</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">

<?php
}
?>
<!-- ================================================================================== -->

<!-- NAVIGATION BAR  -->

<!-- ================================================================================== -->

<?php
function topNav()
{
?>
    <div class="nav-bar">
        <a href="../index.php"><img src="../img/Logo.jpg" alt="site logo" class="logo" /></a>
        
        <nav>
            <ul>
                <li class="nav-links">
                    <a href="../index.php" class="nav_index">Home</a>
                </li>
                <li class="nav-links">
                    <a href="about.php" class="nav_about">About us</a>
                </li>
                <li class="nav-links">
                    <a href="producten.php?category=1" class="nav_producten">Producten</a>
                </li>
                <li class="nav-links">
                    <a href="contact.php" class="nav_contact">Contact</a>
                </li>
                <li class="nav-links">
                    <a href="winkelwagen.php" class="nav_winkelwagen"><span class="material-symbols-outlined"> shopping_cart </span></a>
                </li>
                <?php
                if(!isset($_SESSION["user"])){
                    
                ?>
                <li class="nav-links">
                    <a href="login.php" class="nav_login"><span class="material-symbols-outlined"> person </span></a>
                </li>
                <?php
                }
                if(isset($_SESSION["user"])){
                    
                    ?>
                    <li class="nav-links">
                        <a href="profiel.php" class="nav_login"><span class="material-symbols-outlined"> person </span></a>
                    </li>
                    <li class="nav-links">
                        <a href="logout.php" class="nav_login">Log out</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </nav>
    </div>
<?php
}
?>


<?php
function navBarHome()
{
?>
    <div class="nav-bar">
        <a href="index.php"><img src="img/Logo.jpg" alt="site logo" class="logo" /></a>
        

        <nav>
            <ul>
                <li class="nav-links">
                    <a href="index.php">Home</a>
                </li>
                <li class="nav-links">
                    <a href="php/about.php">About us</a>
                </li>
                <li class="nav-links">
                    <a href="php/producten.php?category=1">Producten</a>
                </li>
                <li class="nav-links">
                    <a href="php/contact.php">Contact</a>
                </li>
                <li class="nav-links">
                    <a href="php/winkelwagen.php"><span class="material-symbols-outlined"> Shopping_cart </span></a>
                </li>
                <?php
                if(!isset($_SESSION["user"])){
                    
                ?>
                <li class="nav-links">
                    <a href="php/login.php" class="nav_login"><span class="material-symbols-outlined"> Person </span></a>
                </li>
                <?php
                }
                if(isset($_SESSION["user"])){
                    
                    ?>
                    <li class="nav-links">
                        <a href="php/profiel.php" class="nav_login"><span class="material-symbols-outlined"> Person </span></a>
                    </li>
                    <li class="nav-links">
                        <a href="php/logout.php" class="nav_login">Log out</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </nav>
    </div>
<?php
}
?>

<?php
function footertagHome()
{
?>
    <div class="footer-basic">
        <footer>
            <div class="social">
            <div class="icons">
        <a href="https://www.instagram.com/smooth_klusbedrijf/" class="icon icon--instagram">
            <img src="img/instagram.png" class="ri-instagram-lin" style="width: 2rem" alt="">
        </a>
        <a href="#" class="icon icon--twitter">
            <img src="img/twitter.png" class="ri-twitter-lin" style="width: 2rem" alt="">
        </a>
        <a href="https://m.facebook.com/Smooth-Klusbedrijf-106305441718417/?ref=page_internal" class="icon ion-social-facebook">
            <img src="img/facebook.png" class="ri-linkedin-lin" style="width: 2rem" alt="">
        </a>
        <a href="#" class="icon icon--github">
            <img src="img/github.png" class="ri-github-lin" style="width: 2rem" alt="">
        </a>
    </div>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="php/contact.php">Services</a></li>
                <li class="list-inline-item"><a href="php/about.php">About</a></li>
                <li class="list-inline-item"><a href="https://www.termsfeed.com/live/284d0581-f54c-4da7-a88f-5acccf633ce9">Terms</a></li>
                <li class="list-inline-item"><a href="https://www.termsfeed.com/live/5034674d-0841-4690-8776-a151e8914637">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Smooth Klusbedrijf © 2021</p>
        </footer>
    </div>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../index.css">

<?php
}
?>

<?php
function footertag()
{
?>
    <div class="footer-basic">
        <footer>
            <div class="social">
            <div class="icons">
        <a href="https://www.instagram.com/smooth_klusbedrijf/" class="icon icon--instagram">
            <img src="../img/instagram.png" class="ri-instagram-lin" style="width: 2rem" alt="">
        </a>
        <a href="#" class="icon icon--twitter">
            <img src="../img/twitter.png" class="ri-twitter-lin" style="width: 2rem" alt="">
        </a>
        <a href="https://m.facebook.com/Smooth-Klusbedrijf-106305441718417/?ref=page_internal" class="icon icon--facebook">
            <img src="../img/facebook.png" class="ri-linkedin-lin" style="width: 2rem" alt="">
        </a>
        <a href="#" class="icon icon--github">
            <img src="../img/github.png" class="ri-github-lin" style="width: 2rem" alt="">
        </a>
    </div>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="../">Home</a></li>
                <li class="list-inline-item"><a href="contact.php">Services</a></li>
                <li class="list-inline-item"><a href="about.php">About</a></li>
                <li class="list-inline-item"><a href="https://www.termsfeed.com/live/284d0581-f54c-4da7-a88f-5acccf633ce9">Terms</a></li>
                <li class="list-inline-item"><a href="https://www.termsfeed.com/live/5034674d-0841-4690-8776-a151e8914637">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Smooth Klusbedrijf © 2021</p>
        </footer>
    </div>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../index.css">

<?php
}
?>
