<?php 

$nombre = $_POST['name'];
$empresa = $_POST['empresa'];
$correo = $_POST['email'];
$telefono = $_POST['subject'];
$mensaje = $_POST['message'];


//echo $correo . " " . $nombre . " " . $mensaje;


$destinatario = "info@saltacoders.com";
$asunto = "Consulta desde Web"; 
$cuerpo = '
    <html> 
        <head> 
            <title>Prueba de envio de correo</title> 
        </head>
        <body> 
            <p> 
                Contacto:  '.$nombre . ' - Email: ' . $correo .'  <br>
                Empresa:  '.$empresa . ' - Telefono: ' . $telefono .'  <br>
                Mensaje: '.$mensaje.' 
            </p> 
        </body>
    </html>
';
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF8\r\n"; 

//dirección del remitente

$headers .= "FROM: $nombre <$correo>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);

echo'<script>alert("Gracias por enviar el formulario");</script>';
//header('Location:index.html');
echo "<script>setTimeout(\"location.href='index.html'\"), 1000</script>";
?> 
