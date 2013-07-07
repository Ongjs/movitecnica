<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Movitecnica - Panel de Control</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="../css/reset.css" rel="stylesheet" type="text/css" />
        <link href="../css/admin.css" rel="stylesheet" type="text/css" />
        <link href="../css/text.css" rel="stylesheet" type="text/css" />
        <link href="../lib/MOStyles/MOStyles.css" rel="stylesheet" type="text/css" />
        <script src="../js/jquery_1.10.2.js" type="text/javascript"></script>
        <script src="../js/admin.js" type="text/javascript"></script>
        <link href="../lib/shadowbox-3.0.3/shadowbox.css" rel="stylesheet" type="text/css" />
        <script src="../lib/shadowbox-3.0.3/shadowbox.js" type="text/javascript"></script>
        <link href="../lib/confirm/css/confirm.css" type="text/css" rel="stylesheet" />
        <script src="../lib/confirm/js/confirms.js" type="text/javascript"></script>
        <script src="../lib/confirm/js/jquery.simplemodal.js" type="text/javascript"></script>
        <!--[if lte IE 7]><link href="../css/admin_ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
    </head>
    <body>
        <div id="overlay"></div>
        <div id="container">
            <div id="header">
                <a href="./" class="logo"><img src="../images/logo_skin3.png" alt="Devirtual" /></a>
                <ul>
                    <li class="radius10"><a href="./" class="home">Inicio</a></li>
                    <li><a href="./?mod=10" class="access">Acceso</a></li>
                    <li><a href="#" class="logout">Cerrar</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <div id="body">
                <div id="nav"><?php include "nav.php"; ?></div>
                <div id="content"><?php include "directory.php"; ?></div>
            </div>
        </div>
        <div id="footer_admin">
            <div id="copyright">
                <div>
                    <img src="../images/logo_solo.png" width="30"><div style="margin-top: 6px; display: inline-block; vertical-align: top; margin-left: 5px;">Copyright © Movitécnica 2013. Todos los derechos reservados</div>
                </div>
            </div>
            <div id="confirm" style="display: none;">
                <a href="#" title="Cerrar" class="modalCloseX modalClose">Cerrar X</a>
                <div class="header"><span>Peligro...</span></div>
                <p class="message"></p>
                <div class="buttons">
                    <div class="no modalClose">No</div><div class="yes">si</div>
                </div>
            </div>
        </div>
    </body>
</html>