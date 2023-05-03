<html>
<head>
    <title>Conexion MongoDB y PHP</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<h1>Añadir registros a la base de datos MongoDB</h1> 
<?php
require 'insertar.php';
?>

<p>
    <?php
    require_once("conexion.php");

    if ($alumnos->count()>0)
    {
        $datos = $alumnos->find();
        ?>
        <table border=2>
        <tr>
            <th><label>ㅤㅤㅤㅤㅤㅤIDㅤㅤㅤㅤㅤ</label></th>
            <th><label>ㅤNombreㅤ</label></th>
            <th><label>ㅤApellidoㅤ</label></th>
        </tr> 
        </table>
        <p> </p>
        <table border=1>
        <?php
        foreach ($datos as $dato) {
?>      
        <tr>
                        <td><p><label></label><?php echo $dato["_id"]; ?></p></td>
                        <td><p><label></label><?php echo $dato["Nombre"]; ?></p></td>
                        <td><p><label></label><?php echo $dato["Apellido"]; ?></p></td>
        </tr>
        
        <tr>
        </tr>
                 <?php
         }//foreach
                 ?>
                 </table>
                 <p> </p>
                 <a class="extbt" href="borrar.php?id=<?php echo $dato["_id"];?>">Limpiar los registros</a>
                 <?php
    }else{
                ?>
                        <h4></i>Sin registros en la Base de Datos</h4>
                <?php 
    } ?>

</p>
</body>

</html>
