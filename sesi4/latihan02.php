<?php
    $usr = "";
    $ps = "";
    $eurs = "";
    $eps = "";

    if(isset($_GET["CAUSER"])){
        $usr = $_POST["txUSER"];
        $ps = $_POST["txPASKY"];

        if ($usr==""){
            $eusr = "<div style='color:red;font-size: 10px'>Field User Masih Kosong";
        }

        if ($ps==""){
            $eps = "<div style='color:red;font-size: 10px'> Field password Masih Kosong";
        }
    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Method POST</title>
</head>
<body>
    
 <form method="POST" action="latihan02.php">

    <div>
        Username
        <input type="text" name="txtUSER"require>
        <?=$eurs;?>
    </div>      

    <div>
        password
        <input type="password" name="txtPASKY"require>
        <?=$eps;?>
    </div>

    <div>
        Login
        <button>Login</button>
    </div>
</form>
    <div>
    isi dari form :<br>
        1. Username: <?=$usr?><br>
        2. password: <?=$ps?>
    </div>
</body>
</html>