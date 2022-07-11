<?php
require("../inc/functions.php");
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/about.css">
    <?php headTag() ?>
</head>

<body class="body_about">
    <?php 
    topnav(); 
    ?>
    <h1>Onze team</h1>
<div class="row-about">
    <div class="column-about">
        <div class="card-about">
            <div class="container-about">
                <h2>Kerim Bayram</h2>
                <p class="title">Oprichter</p>
                <p><button class="button" id="open-modal" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kerimModal">Contact</button></p>
            </div>
        </div>
    </div>
    <div class="column-about">
        <div class="card-about">
            <div class="container-about">
                <h2>Melih Ceylan</h2>
                <p class="title">ICT</p>
                <p><button id="open-modal1" class="button" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#melihModal">Contact</button></p>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="kerimModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kerim Bayram</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        E-mail: Smoothklusbedrijf@hotmail.com<br>
        Tel: 0646117343
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="melihModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Melih Ceylan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      E-mail: melih1517@live.nl<br>
      Tel: 0628853350
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php
    footertag();
    ?>
<script src="../js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>