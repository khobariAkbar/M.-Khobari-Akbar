<?php 
$negara = [
            "Indonesia" => "D.K.I. Jakarta",
            "Singapura" => "Singapura",
            "Malaysia" => "Kuala Lumpur",
            "Brunai" => "bandar Seri Begawan",
            "Thailand" => "Bangkok",
            "Laos" => "Vientiane",
            "Filipina" => "Manila",
            "Myanmar" => "Naypyidaw"];
?>          
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Associative</title>
</head>
<body>
    <?php 
        foreach ($negara as $kota => $ibukota) : ?>
            <li><?php echo "$kota : $ibukota" ?></li>
        <?php endforeach ?>
</body>
</html>