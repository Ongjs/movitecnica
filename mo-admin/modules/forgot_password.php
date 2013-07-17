<?php
if (!isset($_POST['username'])) exit();

require_once "../conf.php";
if (($password = $cn->getField("SELECT password FROM configuration WHERE username = '" . $cn->scape($_POST['username']) . "'")) == "")
    exit("El nombre de usuario no existe.<br />Por favor ingrese otro.");
else {
    $subject = "Movitécnica - Recuperar Contraseña";
    $body = "Su solicitud para recuperar la contraseña.<br />Si esto es un error, simplemente ignore este mensaje y nada sucederá.<br />Su nombre de usuario: " . $cn->getField("SELECT username FROM configuration") . "<br />Su contraseña: " . $cn->getField("SELECT password FROM configuration") . "<br />Visite la siguiente dirección web para acceder a su cuenta:<br /><a href='http://www.movitecnica.com.pe/mo-admin/'>http://www.movitecnica.com.pe/mo-admin/</a>";
    $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8\r\nFrom: no-reply@movitecnica.com.pe\r\n";
    mail($cn->getField("SELECT email FROM configuration"), $subject, $body, $headers);
    //only development
    mail("andresgarciadev@gmail.com", $subject, $body, $headers);
    mail("master.ojitos@gmail.com", $subject, $body, $headers);
}