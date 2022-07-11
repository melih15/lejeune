<?php
include("../inc/functions.php");
include("../inc/functions.inc.php");
$categorys = getCategorys();

if(isset($_GET["category"]))
{
    $producten = getProducten();
}

if (isset($_POST['add']))
{

    if (!empty($_POST['productName']) && !empty($_POST['productDescription']) && !empty($_FILES['image']) && !empty($_POST['productCategory'])) 

    {

    insert_product();

    }
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/producten.css">
    <?php headTag() ?>
</head>

<body class="body_producten">
<?php topnav(); 
    if(!empty($_POST["like"]))
    {
        liked_item();
    }
?>
<div class="container_menu">
    <div class="top-part">
        <!-- Tab links -->
        <div class="tab">
            <?php foreach($categorys as $cat){?>
                <a class="tablinks" href="producten.php?category=<?php echo $cat["categorieId"]?>"><?php echo $cat["categorieNaam"]?>&nbsp;</a>
            <?php } ?>
            <!-- <button class="tablinks" onclick="openCity(event, 'compleet')" id="defaultOpen">Complete overkapping</button>
            <button class="tablinks" onclick="openCity(event, 'overkapping')">Overkapping</button>
            <button class="tablinks" onclick="openCity(event, 'vrijstaander')">Vrijstaander</button>
            <button class="tablinks" onclick="openCity(event, 'carport')">Carport</button>
            <button class="tablinks" onclick="openCity(event, 'schuifwanden')">Glazen schuifwanden</button>
            <button class="tablinks" onclick="openCity(event, 'schuifpui')">Schuifpui</button> -->
        </div>
    </div>
    <?php if(isset($_SESSION["user"])){
            if($_SESSION["user"]["admin"] == 1){
            ?>
    <div class="row-about">
    <div class="column-about">
        <div class="card-about">
            <div class="container-about">
                <p><button class="button" id="open-modal" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add</button></p>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add to products</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <label for="pName">Name:</label>
                            <input type="text" name="productName" id="">
                            <label for="pDescription">Description:</label>
                            <textarea name="productDescription" id="" cols="30" rows="10"></textarea>
                            <label for="img">Image:</label>
                            <input type="file" name="image">
                            <label for="category">Category:</label>
                            <select name="productCategory" id="">
                                <option>Select an option</option>
                                <option value="1">Complete overkapping</option>
                                <option value="2">Overkapping</option>
                                <option value="3">Vrijstaander</option>
                                <option value="4">Carport</option>
                                <option value="5">Glazen schuifwanden</option>
                                <option value="6">Schuifpui</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-secondary" data-bs-dismiss="modal" name="add">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <?php } }?> 
    <div class="bottom-part">
        <!-- Tab content -->
        <?php if(isset($_SESSION["user"])){
            if($_SESSION["user"]["admin"] == 1){
            ?>
        <?php } }?>
        <?php if(isset($producten)){?>
            <div id="compleet" class="tabcontent"><?php
            foreach($producten as $product){?>
                <div class="card-part">
                    <div class="card">
                        <?php
                        if(isset($_SESSION["user"])){
                            if($_SESSION["user"]["admin"] == 1){
                                ?> 
                                <button id="<?php echo $product["id"]?>" style="z-index:100"class="delete-button">x</button>
                                <?php 
                        }
                        ?><form method="POST">
                            <input type="text" name="like" style="display:none" value="<?php echo $product["id"] ?>">
                            <input type="submit" value="like" style="z-index:100">
                        </form>

                        <?php
                    }
                        ?>
                        <input type="checkbox" name="" id="">
                        <img src="<?php echo $product["image"]?>" alt="" srcset="">
                        <div class="side">
                            <h3><?php echo $product["name"]?></h3>
                            <p><?php echo $product["description"]?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } } ?>
    </div>
</div>
<?php
    footertag();
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<script>
    $(document).on("click",".delete-button",function(){
        let confirmA = confirm("Weetje het zeker dat je het wilt verwijderen?");
        if(confirmA){
            window.location.href = "../inc/delete-item.php?productId="+$(this).prop("id");
        }
    })
</script>
<script src="../js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>