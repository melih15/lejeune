<?php
include "db.php";

//sign up
function invalidUsername($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }

    else {
        $result = false;
    }
    
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }

    else {
        $result = false;
    }
    
    return $result;
}

function passwordMatch($password, $passwordRepeat) {
    $result;
    if ($password !== $passwordRepeat) {
        $result = true;
    }

    else {
        $result = false;
    }
    
    return $result;
}

function usernameExists($conn, $username, $email) {
    $sql = "SELECT * FROM users Where usersUsername = ? OR usersEmail = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $email);

    $stmt->execute();

    $result = $stmt->get_result(); // get the mysqli result
    $result = $result->fetch_assoc();
    
    //die(var_dump($result));
    return !!$result;
}

function createUser() {
    if (isset($_POST["fname_signup"]) && isset($_POST["lname_signup"]) && isset($_POST["email"]) && isset($_POST["username_signup"]) && isset($_POST["password_signup"])) {  
        $conn = db();
        $fname = $_POST["fname_signup"];
        $lname = $_POST["lname_signup"];
        $email = $_POST["email"];
        $username = $_POST["username_signup"];
        $password = $_POST["password_signup"];
    
        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO `users`(`usersFirstName`, `usersLastName`, `usersEmail`, `usersUsername`, `usersPassword`) 
        VALUES ('$fname','$lname','$email','$username','$password');";
        $conn->query($sql) or die();
    }
}

function updateUser(){
    // $firstName = $_POST['firstName'];
    // $lastName = $_POST['lastName'];
    // $email = $_POST['email'];
    // $message = $_POST['messages'];
    extract($_POST);

    $conn = db();

   $sql = "INSERT INTO `users`(`usersStreet`, `usersNr`, `usersNrAdd`, `usersZip`, `usersCountry`, `usersNumber`) VALUES ('$street','$nr'v '$toevoeging','$zip','$country','$phone')";

   $sql = "UPDATE users SET usersStreet = $streets , column2 = value2, ... WHERE usersId = $userId";

    $ret = $conn->query($sql) or die($conn->error);

}

//Login
function emptyInputLogin($username, $password) {
    $result;
    if (empty($username) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function userExist($conn, $username)
{
    $sql = "SELECT * FROM users Where usersUsername = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    $stmt->execute();

    $result = $stmt->get_result(); // get the mysqli result
    $result = $result->fetch_assoc();

    return true;
}

function login()
{
    $conn = db();
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $passwordUser = $_POST["password"];
        $password = $_POST["password"];
        $sql2 = "SELECT * FROM `users` WHERE usersUsername = '$username'";
        $result2 = $conn->query($sql2);
        while($row = $result2->fetch_assoc()){
            if ($username == $row["usersUsername"]) {
                $passwordUser = $row["usersPassword"];
            }
        }
        $checkPassword = password_verify($password, $passwordUser);
        $sql = "SELECT * FROM `users` WHERE usersUsername = '$username' AND usersPassword = '$passwordUser'";
        if ($checkPassword) {
            $result = $conn->query($sql);
            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                $_SESSION["user"] = $user;
                header("location: ../index.php");
            } else {
                echo "wrong username";
            }
        } else {
            echo "wrong username or password";
        }
    }
}

function getCategorys()
{
    $conn = db();
    $query = "SELECT * FROM categorieen";

    $result = $conn->query($query);
    $cat = [];

    while($row = $result->fetch_assoc())
    {
        $cat[] = $row;
    }

    return $cat;
}

function getProducten()
{
    $conn = db();
    $id = $_GET["category"];
    $producten = [];
    $query = "SELECT * FROM producten WHERE categorieId = '$id'";

    $result = $conn->query($query);

    while($row = $result->fetch_assoc())
    {
        $producten[] = $row;
    }
    return $producten;
}

function insert_product()

{
    // $firstName = $_POST['firstName'];
    // $lastName = $_POST['lastName'];
    // $email = $_POST['email'];
    // $message = $_POST['messages'];

    extract($_POST);

    $conn = db();

    $files = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    $destination = "../img/".$files;
    $fileserror = $_FILES["image"]["error"];

    $filesext = explode(".",$files);
    $filesextention = strtolower(end($filesext));
    $allowed = array("jpg","png","jpeg","gif","JPG","PNG","JPEG","GIF");
    if (in_array($filesextention, $allowed)) {
        if ($fileserror === 0) {

            move_uploaded_file($tmp, $destination);
        }
    }

    $sql= "INSERT INTO `producten`(`name`, `description`, `image`, `categorieId`) 
    VALUES ('$productName','$productDescription','$destination','$productCategory')";

    $ret = $conn->query($sql) or die($conn->error);

}

function delete_product()
{
    $conn = db();
    $id = $_GET["productId"];
    $query = "DELETE FROM producten WHERE id = '$id'";
    $conn->query($query);
}

function get_liked_items()
{
    $conn = db();
    $id = $_SESSION['user']['usersId'];
    $query = "SELECT * FROM likes INNER JOIN producten ON likes.productId = producten.id INNER JOIN users ON likes.usersId = users.usersId WHERE users.usersId = $id";
    $likes = [];
    $result = $conn->query($query);
    while($row = $result->fetch_assoc())
    {
        $likes[] = $row;
    }
    return $likes;
}

function liked_item()
{
    $conn = db();
    $product = $_POST["like"];
    $id = $_SESSION['user']['usersId'];
    $count = 0;
    $sql = "INSERT INTO `likes`(`productId`, `usersId`) VALUES ('$product','$id')";
    $sql2 = "SELECT * FROM likes WHERE productId = '$product' AND usersId = '$id'";
    $result = $conn->query($sql2);
    while($row = $result->fetch_assoc())
    {
        $count++;
    }
    if($count == 0)
    {
        $conn->query($sql);
    }
}