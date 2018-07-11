<?php
if (!isset($_GET['capital'])) {
    echo "No se enviaron datos";
    header("Location: index.php");
    exit;
}

require 'conexion.php';
$capital_pais = $_GET['capital'];

$top_ciudades = $conexion->query("select city.Name from country, city " .
    "where Capital = {$capital_pais} and country.Code = city.CountryCode " .
    " ORDER BY city.Name asc LIMIT 3");

$top_idiomas = $conexion->query("select countrylanguage.Language from country, countrylanguage " .
    "where Capital = {$capital_pais} and country.Code = countrylanguage.CountryCode " .
    "order by Percentage desc LIMIT 2");
?>

<html>
<head>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title>Informacion extra de paises</title>
</head>
<body>
<h1 class="titulo info">Principales Ciudades</h1>
<ol>
    <?php foreach ($top_ciudades as $ciudad):?>
    <li class="enumeracion"><?php echo $ciudad['Name']?></li>
    <? endforeach;?>
</ol>
<h1 class="titulo info">Principales Lenguas</h1>
<ol>
    <?php foreach ($top_idiomas as $idioma):?>
        <li class="enumeracion"><?php echo $idioma['Language']?></li>
    <? endforeach;?>
</ol>
</body>
</html>