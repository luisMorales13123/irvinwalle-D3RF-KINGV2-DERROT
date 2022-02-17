<?php
include("con_db.php");
if (isset($_POST['register'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['correo']) >=1 && strlen($_POST['contra'])>= 1) {
        $usuario=trim($_POST['usuario']);
        $correo=trim($_POST['correo']);
        $contraseña=trim($_POST['contra']);
        $consulta= "INSERT INTO crear ( nombre, correo, contraseña) VALUES ('$usuario','$correo','$contraseña')";
        $resultado= mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
<h3 class="ok">¡Te has inscrito correctamente!</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            <?php
        }

    }else{
        ?>
        <h3 class="bad">¡Por favor completa los datos!</h3>
        <?php
    }
}
?>