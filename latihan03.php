<?php
    $nvar ="p1";
    if($_GET["pg"]){}
    $nvar = $_GET["pg"]

    $witch($nvar){
        case "p1";
        $judulpage = "halaman 1";
        $konten = "<h3>Halaman 1</h3>";

            break;
        case "p2";
        $judulpage = "halaman 2";
        $konten = "<h3>Halaman 2</h3>";
            break;
        case "p3";
        $judulpage = "halaman 3";
        $konten = "<h3>Halaman 3</h3>";
            break;
        case "p4";
        $judulpage = "halaman 4";
        $konten = "<h3>Halaman 4</h3>";
            break;
        default;
        $judulpage = "halaman 1";
        $konten = "<h3>Halaman 1</h3>";
        break;
    }    
    ?>

</body>
</body>

    }
    
?>
<DOCTYPE html>
    <html lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale.e">
        <title><?=$judulpage; ?></title>
</head>
<body>
    <a href="latihan03.php?<pg=p1"> page1</a>
    <a href="latihan03.php?<pg=p1">page2 </a>
    <a href="latihan03.php?<pg=p1">page3 </a> 
    <a href="latihan03.php?<pg=p1">page4 </a>
    <?php
        echo $konten
    ?>

</body>
</body>