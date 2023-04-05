<?php
    $usr = "";
    $ps = "";
    $eurs = "";
    $eps = "";

    if(isset($_GET["CAUSER"])){
        $usr = $_GET["txtUSER"];
        $ps = $_GET["txtPASKY"];
    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <form method="GET" action="latihan01.php">

    <div>
        Username
        <input type="text" name="txUSER" >
    </div>      

    <div>
        password
        <input type="password" name="txPASKY" >
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