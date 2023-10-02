<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular la edad</title>
</head>
<body>
    
<?php 
const MES = [1=> 'Enero', 'Febrero','Marzo','Abril','Mayo',
    'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

$anyo = (int)date('Y');


?>
<form action="" method="get">
    <label for="dia">Fecha de nacimiento:</label>
    <select name="dia" id="dia">
        <?php for ($i = 1; $i<=31;$i++): ?> 
            <option value="<?= $i ?>"><?= $i ?></option>
        <?php 
        $diafecha = $i;
        endfor ?>
    </select>

    <select name="mes" id="mes">
        <?php foreach (MES as $m => $nombre_mes): ?>
            <option value="<?=$m ?>"><?= $nombre_mes ?></option>
        <?php endforeach ?>
    </select>

    <select name="anyo" id="anyo">
        <?php for ($a = $anyo; $a >= ($anyo - 50); $a--): ?>
            <option value="<?= $a ?>"><?= $a ?></option>
        <?php endfor ?>
        
    </select>
    <button type="submit">Calcular</button>


    <?php 
    $diafecha =$_GET["dia"];
    $mesfecha = $_GET["mes"];
    $anyofecha = $_GET["anyo"];

 

        if (checkdate($mesfecha,$diafecha,$anyofecha)){
            if ($mesfecha > date('m')){
                echo(($anyo - $anyofecha) - 1);
            } elseif ($mesfecha < date('m')){
                echo ($anyo - $anyofecha);
            }else {
                if($diafecha > date('d')){
                    echo ($anyo - $anyofecha);
                }elseif ($diafecha < date('d')) {
                    echo(($anyo - $anyofecha ) - 1);
                }else{
                    echo($anyo - $anyofecha);
                    echo ("Feliz Cumpleaños");
                }
            }
        } else {
            echo("ERROR DE FECHA");
        }
    ?>
</form>
</body>
</html>