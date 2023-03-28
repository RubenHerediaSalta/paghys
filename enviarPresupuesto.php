<?php 

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$razonsocial = $_POST['razonsocial'];
$cotizar = $_POST['cotizar'];
$rubros = $_POST['rubros'];
$empleados = $_POST['empleados'];
$metros = $_POST['metros'];
$tiempo = $_POST['tiempo'];
$comentario = $_POST['comentario'];


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
                Nombre:  '.$nombre . ' - Apellido: ' . $apellido .' - Telefono: ' . $telefono .'  <br>
                Email:  '.$email . ' - Razon Social: ' . $razonsocial .' - Servicio a Cotizar: ' . $cotizar .'  <br>
                Rubro de la empresa:  '.$rubros . ' - Cantidad de empleados: ' . $empleados .' - Superficie en m2: ' . $metros .' - Período de obra: ' . $tiempo .'  <br>
                Mensaje: '.$comentario.' 
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
