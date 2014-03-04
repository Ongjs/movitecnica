<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="../css/reset.css" rel="stylesheet" type="text/css" />
        <link href="../css/admin.css" rel="stylesheet" type="text/css" />
        <link href="../css/text.css" rel="stylesheet" type="text/css" />
        <link href="../lib/MOStyles/MOStyles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="overlay"></div>
        <div id="login">
            <h1>Movitécnica</h1><a href="../"><img src="../images/logo_skin3.png" alt="Movitécnica" /></a>
            <div class="message">Ingresar Usuario<br />Recibira su contraseña via e-mail</div>
            <form id="form_login" class="MOForm">
                <p><label for="username">Usuario: </label><input type="text" name="username" id="username" /></p>
                <p><label for="password">Contraseña: </label><input type="password" name="password" id="password" /></p>
                <p><a href="#" class="forgot_password">Olvido su contraseña?</a><input type="submit" value="Iniciar Sesion" /></p>
            </form>
            <form id="form_forgot_password" class="MOForm">
                <p><label for="username2">Usuario: </label><input type="text" name="username" id="username2" /></p>
                <p><a href="#" class="login">Iniciar Sesión ?</a><input type="submit" value="Enviar Contraseña" /></p>
            </form>
        </div>
        <div id="footer">
            <div id="copyright">
                <div>
                    <img src="../images/logo_solo.png" width="30"><div style="margin-top: 6px; display: inline-block; vertical-align: top; margin-left: 5px;">Copyright © Movitécnica 2013. Todos los derechos reservados</div>
                </div>
            </div>
        </div>
        <script src="../js/jquery_1.10.2.js" type="text/javascript"></script>
        <script src="../js/admin.js" type="text/javascript"></script>
    </body>
</html>