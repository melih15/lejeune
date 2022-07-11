<?php
require("../inc/functions.php");
?>

<head>
    <?php HeadTag(); ?>
</head>

<body class="body_index">
<?php
// topNav("php/");
topNav();
?>
<div class="contact-stripe"></div>

<h2>winkelwagen</h2>
<div class="container">
    <div style="text-align:center">
        <form method="post" action="..">
            
            complete overkapping:
            <select id="complete" name="complete-overkapping">
            <option value="-">-</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>

            overkapping:
            <select id="kapping" name="overkapping">
            <option class="nee" value="-">-</option>
            <option class="nee" value="ja">ja</option>
            <option class="nee" value="nee">nee</option>
            <option value="glas" class="ja">Glas</option>
            <option value="poly" class="ja">Polycarbonaat helder</option>
            <option value="poly" class="ja">Polycarbonaat opalen</option>
            </select>

            carport:
            <select id="port" name="carport">
            <option class="port-ja" value="-">-</option>
            <option class="port-ja" value="ja">ja</option>
            <option class="port-nee" value="nee">nee</option>
            </select>

            vrijstaand overkapping:
            <select id="vrijstaand" name="vrijstaand-overkapping">
            <option class="vrijstaand-ja" value="-">-</option>
            <option class="vrijstaand-ja" value="vrijstaand-ja">ja</option>
            <option class="vrijstaand-nee" value="vrijstaand-nee">nee</option>
            </select>

            glazen-schuifwand:
            <select id="schuifwand" name="glazen-schuifwand">
            <option class="schuifwand-ja" value="-">-</option>
            <option class="schuifwand-ja" value="ja">ja</option>
            <option class="schuifwand-nee" value="nee">nee</option>
            </select>

            glazen-schuifdeur:
            <select id="schuifdeur" name="glazen-schuifdeur">
            <option class="schuifdeur-ja" value="-">-</option>
            <option class="schuifdeur-ja" value="ja">ja</option>
            <option class="schuifdeur-nee" value="nee">nee</option>
            </select>
            
            Hoogte:
            <input type="text" name="" placeholder="Hoogte in cm" id="" required>
            
            Breedte:
            <input type="text" name="" placeholder="Breedte in cm" id="" required>
            
            Diepte:
            <input type="text" name="" placeholder="Diepte in cm" id="" required>

            <input type="submit" value="Send">
        </form>

    </div>
</div>
<?php
    footertag();
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
$(document).ready(function()
{

    $(".ja").hide();
    $(".nee").hide();
    $(".kapping-ja").hide();
    $(".kapping-nee").hide();
    $(".port-ja").hide();
    $(".port-nee").hide();
    $(".vrijstaand-ja").hide();
    $(".vrijstaand-nee").hide();
    $(".schuifwand-ja").hide();
    $(".schuifwand-nee").hide();
    $(".schuifdeur-ja").hide();
    $(".schuifdeur-nee").hide();

    $("#complete").change(function()
    {
    if($(this).val() == "ja")
    {
        $(".ja").show();
        $(".nee").hide();
    }
    else
    {
        $(".nee").show(); 
        $(".ja").hide(); 
    }
    });
    $("#kapping").change(function()
    {
    if($(this).val() == "glas")
    {
        $(".port-ja").show();
        $(".port-nee").hide();
    }
    else if($(this).val() == "poly")
    {
        $(".port-ja").hide();
        $(".port-nee").show(); 
    }
    });
});
</script>
</body>
</html>