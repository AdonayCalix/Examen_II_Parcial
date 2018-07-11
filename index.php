<?php
require 'conexion.php';
$countries = $conexion->query("select Name, Continent, Population, LifeExpectancy, HeadOfState, Capital from country");
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title>Paises</title>
</head>
<body>
<h1 class="titulo">Paises</h1>
<table border="1" id="tabla_paises">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Continente</th>
        <th>Población</th>
        <th>Expectativa de vida</th>
        <th>Cabecera de estado</th>
        <th>Mas informacion</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($countries as $country): ?>
        <tr>
            <td><?php echo $country['Name']; ?></td>
            <td><?php echo $country['Continent']; ?></td>
            <td><?php echo $country['Population']; ?></td>
            <td><?php echo $country['LifeExpectancy'] . " %"; ?></td>
            <td><?php echo $country['HeadOfState']; ?></td>
            <td><a href="info.php?capital=<?php echo $country['Capital'];?>"><strong>Ver mas</strong></a></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
</body>
</html>