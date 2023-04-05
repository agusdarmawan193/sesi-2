<?php
    if(isset($_GET["CAUSER"])){
        $usr = $_REQUEST["txUSER"];
        $ps = $_REQUEST["txPASKY"];
    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Method Request Handle</title>
</head>
<body>
    
 <form method="POST" action="latihan03.php">

    <div>
        Username
        <input type="text" name="txtUSER">
    </div>      

    <div>
        password
        <input type="password" name="txtPASS">
    </div>

    <div>
        Login
        <button>Login</button>
    </div>
</form>


    <div>
         isi dari form :<br>
             1. Username: <?=$usr?><br>
            2. password: <?=$pas?>
    </div>
</body>
</html>