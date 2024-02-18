<?php
session_start();
include_once "../../KOdile/db/connexion.php";

if ($_POST["email"] && $_POST["password"]) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $user = mysqli_query($link, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    if(mysqli_num_rows($user) > 0){
        while($row = mysqli_fetch_assoc($user)) {
         $res['success'] = 'connexion reussi';
         $res['data'] = $row;
            $_SESSION["action"] = 'login';
            $_SESSION["data"] = $row;
         header("Location: /KOdile/");
        }
    } else {
        $res['error'] = 'Identifiant incorrect';
        header("Location: /KOdile/");
    }
}

$_SESSION["res"]=$res;


