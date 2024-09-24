<?php

// Declaración de variables del formulario
$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];
$cel = $_POST['cel'];
$producto = $_POST['producto'];

// Datos del email
$email = 'soporte@teayudo.com';
$to = 'fepradolajo@gmail.com';
$titulo = 'S&S Recervar cita';
$header = 'From: ' . $email;
$msjCorreo ="Nombre: $nombre\nCiudad: $ciudad\nTélefono: $cel\nProducto o mercadería: $producto\n";
/*$msjCorreo = echo '<div style="background-color:#ff0">Nombre:'<?php $nombre?>'<br>Ciudad:'<?php $ciudad?>'<br>Télefono:' <?php $cel?> '<br>Producto o mercadería:' <?php $producto?> '<br></div>';*/

if ($_POST['enviar']) {
    if (@mail($to, $titulo, $msjCorreo, $header)) {
        //header("Location: https://andrescarrasco.com/teayudo/index.php?msg=check");
        header("Location: https://andrescarrasco.com/teayudo/index.html");
    } else {
        //header("Location: https://andrescarrasco.com/teayudo/index.php?msg=error");
        header("Location: https://andrescarrasco.com/teayudo/index.php?msg=error");
    }
} 

if ($_POST['enviar_contacto']) {
    if (@mail($to, $titulo, $msjCorreo, $header)) {
    header("Location: https://andrescarrasco.com/teayudo/contacto.html");
    console.log(msjCorreo);
    } else {
        header("Location: https://andrescarrasco.com/teayudo/contacto.html");
    }
}



if ($_POST['submit']) {
    if (@mail($to, $titulo, $msjCorreo, $header)) {
    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactar con nosotros.');
    </script>";
    header("Location: https://andrescarrasco.com/teayudo/lang/index.html");
    console.log(msjCorreo);
    } else {
        echo "<script>
        alert('Mensaje');
        </script>";
        header("Location: https://andrescarrasco.com/teayudo/lang/index.html");
    }

} 

if ($_POST['submit_contact']) {
    if (@mail($to, $titulo, $msjCorreo, $header)) {
    header("Location: https://andrescarrasco.com/teayudo/lang/contacto.html");
    console.log(msjCorreo);
    } else {
        header("Location: https://andrescarrasco.com/teayudo/lang/contacto.html");
    }
}

?>