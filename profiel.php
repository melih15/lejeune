<?php
require("../inc/functions.php");
require("../inc/functions.inc.php");
?>

<head>
    <link rel="stylesheet" href="../css/profiel.css">
    <?php HeadTag(); ?>
</head>

<body class="body_index">
<?php
// topNav("php/");
topNav();
// insert_user();
$likes = get_liked_items();
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">Upload</button>
</form>
<div class="formulier" style="display:flex; flex-direction:row; gap: 40px">
    <form name="reg" action="profiel.php" onsubmit="return validateForm()" method="post" id="reg">
        <table cellpadding="2" cellspacing="0">
            <tr>
                <td class="t-1">
                    <div id="tb-name">Voornaam</div>
                </td>
                <td width="171">
                    <input type="text" name="fname" id="tb-box" value="<?php echo $_SESSION['user']['usersFirstName'] ?>" disabled/>
                </td>
            </tr>
            <tr>
                <td class="t-1">
                    <div id="tb-name">Achternaam</div>
                </td>
                <td width="171">
                    <input type="text" name="fname" id="tb-box" value="<?php echo $_SESSION['user']['usersLastName'] ?>" disabled/>
                </td>
            </tr>
            <tr>
                <td class="t-1">
                    <div  id="tb-name">Username</div>
                </td>
                <td><input type="text" id="tb-box" name="username" value="<?php echo $_SESSION['user']['usersUsername']?>" disabled/></td>
            </tr>
            <tr>
                <td class="t-1">
                    <div id="tb-name">Straat</div>
                </td>
                <td><input id="tb-box" type="text" name="street" /></td>
            </tr>
            <tr>
                <td class="t-1">
                    <div id="tb-name">Nr</div>
                </td>
                <td><input id="tb-box" type="tel" name="nr" /></td>
            </tr>
            <tr>
                <td class="t-1">
                    <div id="tb-name">Toevoeging (optioneel)</div>
                </td>
                <td><input id="tb-box" type="texts" name="toevoeging" /></td>
            </tr>
            <tr>
                <td class="t-1">
                    <div id="tb-name">Postcode</div>
                </td>
                <td><input id="tb-box" type="texts" name="zip" /></td>
            </tr>
            <tr>
                <td class="t-1">
                    <div id="tb-name">Land</div>
                </td>
                <td><input id="tb-box" type="texts" name="country" /></td>
            </tr>
            <tr>
                <td class="t-1">
                    <div id="tb-name">Email</div>
                </td>
                <td><input type="email" id="tb-box" name="email" value="<?php echo $_SESSION['user']['usersEmail']?>" disabled/></td>
            </tr>
            <tr>
                <td class="t-1">
                    <div id="tb-name">Mobiel</div>
                </td>
                <td><input id="tb-box" type="text" name="phone" /></td>
            </tr>
            <tr>
                <td class="t-1">
                    <div id="tb-box">Telefoon (optioneel)</div>
                </td>
                <td><input id="tb-box" type="text" name="adress"></td>
            </tr>
        </table>
        <div id="st"><input name="submit" type="submit" value="Save" id="st-btn" /></div>
    </form>
    <div style="height: 60vh; overflow-y: auto;">
        <?php foreach($likes as $like){?>
            <span><?php echo $like["name"]?></span>
            <img width=200 src="<?php echo $like["image"]?>" alt="">
            <?php } ?>
    </div>
</div>
<?php
    footertag();
?>
</body>
</html>