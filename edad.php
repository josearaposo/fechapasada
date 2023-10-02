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

?>
<form action="" method="get">
    <label for="dia">Fecha de nacimiento:</label>
    <select name="dia" id="dia">
        <?php for ($i = 1; $i<=31;$i++): ?> 
            <option value="<?= $i ?>"><?= $i ?></option>
        <?php endfor ?>
    </select>
    <select name="mes" id="mes">
        <?php foreach (MES as $m => $nombre_mes): ?>
            <option value="<?=$m ?>"><?= $nombre_mes ?></option>
        <?php endforeach ?>
    </select>
</form>
</body>
</html>