<? php
    $destino="taxisocial2016@gmail.com"
    $nombre=$_post["nombre"];
    $correo=$_post["correo"];
    $telefono=$_post["telefono"];
    $mensaje=$_post["mensaje"];
    $contenido="nombre:". $nombre. "\n correo:" . $correo. "\n telefono:".$telefono."\n mensaje:"$mensaje;
    mail($destino,"contacto",$contenido);
header("location:gracias.html");
?>
