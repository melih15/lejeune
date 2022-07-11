<?php
include ("../inc/functions.php");
include ("../inc/functions.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php headTag()?>
</head>
<body class="body_login">

<?php
    if (isset($_SESSION["username"])) {
        header("location: ../index.php");
    }
    topnav();
?>

<div class="newContainer">
    <section class="login">
        <h3>Login</h3>
        <?php
            login();
        ?>
        <div class="login-form">
            <form action="" method="post">
                <input type="text" name="username" autocomplete="on" placeholder="Your username..." required>
                <input type="password" name="password" placeholder="Your password..." required>
                <button type="submit" name="submit">Login</button>
                <button type="reset" name="reset">Reset</button>
            </form>
        </div>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields</p>";
        }
        elseif ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login information!</p>";
        }
    }
    ?>
    </section>
    <section class="login">
        <h3>Sign Up</h3>
        <?php
            createUser();
        ?>
        <section class="signup">
    <div class="signup-form">
        <form action="" method="post" id="form">
            <input type="text" name="fname_signup" required placeholder="Enter first name...">
            <input type="text" name="lname_signup" required placeholder="Enter last name...">
            <input type="email" name="email" class="input-box" id="email" autocomplete="off" required placeholder="Enter email adres..." onkeydown="validation()">
            <span id="text"></span>
            <input type="text" name="username_signup" required placeholder="Enter username...">
            <input type="password" name="password_signup" class="password" id="password" required placeholder="Enter password..." onkeyup='check()'>
            <input type="password" name="passwordRepeat" class="password" id="checkPassword" required placeholder="Repeat password..." onkeyup='check()'>
            <p id="alertPassword"></p>
            <button type="submit" name="submit">Signup</button>
            <button type="reset" name="reset">Reset</button>
        </form>
    </div>
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields</p>";
            }
            elseif ($_GET["error"] == "invalidUsername") {
                echo "<p>Choose a proper username</p>";
            }
            elseif ($_GET["error"] == "invalidEmail") {
                echo "<p>Choose a proper email</p>";
            }
            elseif ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords dont match</p>";
            }
            elseif ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again!</p>";
            }
            elseif ($_GET["error"] == "userOrEmailInvalid") {
                echo "<p>Username or email already taken!</p>";
            }
            elseif ($_GET["error"] == "none") {
                echo "<p>You have signed up!</p>";
            }
        }
    ?>
    </section>
</div>
<?php
    footertag();
?>
<script src="../js/main.js"></script>
</body>
</html>