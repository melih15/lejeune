<?php

require("../inc/functions.php");
require("../inc/db.php");

if (isset($_POST['save']))
{
  if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['messages'])) 

  {

    insert_form();

  }
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php headTag(); ?>
</head>

<body class="body_contact">

<?php 
  topnav(); 
?>

<h2>Contact Opnemen</h2>
<div class="container">
  <div style="text-align:center">
    <div class="row">
      <div class="column">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d621.1993777375234!2d5.660382329231798!3d51.48023099872691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c723e63b42b63f%3A0xf73b81202ba41600!2sZuiderstraat%2071%2C%205701%20LA%20Helmond!5e0!3m2!1snl!2snl!4v1648763686714!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="column">
        <form method="post" action="contact.php">
          <label for="vname">Voornaam</label>
          <input type="text" id="vname" name="firstName" placeholder="Jouw voornaam.." required>
          <label for="aname">Achternaam</label>
          <input type="text" id="aname" name="lastName" placeholder="Jouw achternaam.." required>
          <label for="email">E-mailadres</label>
          <input type="email" id="lname" name="email" placeholder="Jouw e-mailadres.." required>
          <label for="Onderwerp">Onderwerp</label>
          <textarea id="onderwerp" name="messages" placeholder="Schrijf iets.." style="height:170px"></textarea>
          <input type="submit" name="save" value="Verzenden">
        </form>
      </div>
    </div>
  </div>
</div>
<?php
  footertag();
?>
</body>

</html>