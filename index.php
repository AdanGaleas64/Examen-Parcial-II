<?php
require 'conexion.php';
$pais = $conexion->query("select Name, Continent, Population, LifeExpectancy, HeadOfState from country");
?>
<html>
<head>


</head>
<body>
<h1 class="titulo">Paises</h1>
<style rel="stylesheet">
    .titulo{
        text-align: center;
        background-color: red;
    }

</style>

<table border="1" class="tabla_mundial">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Continente</th>
        <th>Poblacion</th>
        <th>Expectativa De Vida</th>
        <th>Cabeza De Estado</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($pais as $paises): ?>
        <tr>
            <td><a href="detalles.php?nombre=<?php echo $country['Name']; ?>"><strong><?php echo $paises['Name']; ?></strong></a></td>
            <td><?php echo $paises['Continent']; ?></td>
            <td><?php echo $paises['Population']; ?></td>
            <td><?php echo $paises['LifeExpectancy']; ?></td>
            <td><?php echo $paises['HeadOfState']; ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>

</body>
</html>
