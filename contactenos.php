<?php
if(isset($_POST["tema"])){
    if (isset($_POST['check'])) {
        $check = '<tr>
                    <td colspan="2" style="border-top: solid 1px rgba(225,225,225,1)"><br />Se solicita que el mensaje sea respondido.</td>
                  </tr>';
        $acheck = '\t Se solicita que el mensaje sea respondido. ';
    }else{
        $check = "";
        $acheck = "";
    }
    require 'lib/PHPMailer/class.phpmailer.php';
    $mail = new PHPMailer();
    $mail->IsSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup server
    $mail->Port = 465;
    $mail->SMTPAuth = true;                               // Enable SMTP authenticationa
    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'andresgarciadev@gmail.com';                            // SMTP username
    $mail->Password = 'foreverlove12';                           // SMTP password
    $mail->From = 'no-reply@movitecnica.com.pe';
    $mail->FromName = 'Movitécnica';
    $mail->AddAddress('andresgarciadev@gmail.com', 'Andres Garcia');  // Add a recipient
    $mail->AddAddress('master.ojitos@gmail.com', 'Ricardo Garcia Rodriguez');  // Add a recipient
    $mail->AddReplyTo($_POST["email"], $_POST["nombre"]." ".$_POST["apellido"]);
    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    $mail->IsHTML(true);                                  // Set email format to HTML
    $mail->CharSet = 'utf-8';
    $mail->Subject = 'Movitécnica - Contactenos';
    $mail->Body = '<table border="0" style="text-align: left; background: rgba(248,248,248,8); border-radius: 3px; line-height: 22px;">
        <tr style="border-top: solid 1px rgba(225,225,225,1)">
            <td><h2>Contactenos</h2></td>
            <td style="width: 400px; text-align: right"><img src="www.movitecnica.com/images/logo_skin3.png" width="270" height="56"></td>
        </tr>
        <tr >
            <td style="border-top: solid 1px rgba(225,225,225,1)"><strong>Tema:</strong></td>
            <td style="border-top: solid 1px rgba(225,225,225,1)">' . $_POST["tema"] . '</td>
        </tr>
        <tr>
            <td style="border-top: solid 1px rgba(225,225,225,1)"><strong>Mensaje:</strong></td>
            <td style="border-top: solid 1px rgba(225,225,225,1)">' . nl2br($_POST["mensaje"]) . '</td>
        </tr>
        <tr>
            <td style="border-top: solid 1px rgba(225,225,225,1)"><strong>Compañia:</strong></td>
            <td style="border-top: solid 1px rgba(225,225,225,1)">' . $_POST["compania"] . '</td>
        </tr>
        <tr>
            <td style="border-top: solid 1px rgba(225,225,225,1)"><strong>Nombre Completo:</strong></td>
            <td style="border-top: solid 1px rgba(225,225,225,1)">' . $_POST["nombre"] . ' ' . $_POST["apellido"] . '</td>
        </tr>
        <tr>
            <td style="border-top: solid 1px rgba(225,225,225,1)"><strong>Email:</strong></td>
            <td style="border-top: solid 1px rgba(225,225,225,1)">' . $_POST["email"] . '</td>
        </tr>
        <tr>
            <td style="border-top: solid 1px rgba(225,225,225,1)"><strong>Teléfono:</strong></td>
            <td style="border-top: solid 1px rgba(225,225,225,1)">' . $_POST["telefono"] . '</td>
        </tr>
        '.$check.'
    </table>';
    $mail->AltBody = '\t Contactenos \n \n
    \t Tema: \t '.$_POST["tema"].' \n
    \t Mensaje: \n  \t'.$_POST["mensaje"].' \n
    \t Compañia: \t '.$_POST["compania"].' \n
    \t Nombre Completo: \t '.$_POST["nombre"]." ".$_POST["apellido"].' \n
    \t Email: \t '.$_POST["email"].' \n
    \t Teléfono: \t '.$_POST["telefono"].' \n
    '.$acheck;

    $email_send = $mail->Send();
}
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Movitécnica</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <link rel="shortcut icon" href="images/favicon_movi.ico">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css' />
        <link rel='stylesheet'  href='css/mystyles.css' type='text/css' media='all' />
        <link rel='stylesheet' id='reset-css'  href='css/reset9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='responsive'  href='css/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' id='font-awesome.min-css'  href='css/font-awesome.min9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='flexslider-css'  href='css/flexslider9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='superfish-css'  href='css/superfish9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='mediaelement-css'  href='js/mediaelement/build/mediaelementplayer.min9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='style-css'  href='style9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='fancybox-css'  href='js/fancybox/jQuery.fancybox-1.3.49d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='skin'  href='css/skin1.css' type='text/css' media='all' />
        <script type='text/javascript' src='js/jquery.js'></script>
        <script type='text/javascript' src='js/custom.js'></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
    <style>
        #post_p
        {
            width: 320px;
        }
        .uni_response
        {
            margin-left: 20px;
        }
        @media only screen and (max-width: 1048px )
        {
            #post_grids
            {
                margin-left: 25px;
            }
            #post_p
            {
                width: 70%;
            } 
            .uni_response
            {
                margin-left: 0px;
            }
        }
    </style>
    <body> <?php include 'class/Connection.class.php';
include 'class/Fuctions.php'; ?>
        <div class="top_wrapper">
            <div id="header">
                <div class="container">
                    <div class="row">
                        <div style="text-align: right; margin-right: 3%; color: #FFF; font-weight: bold; font-size: 10px;">
                            <span style="margin-left: 15px; margin-right: 15px;"><a href="Contactenos.php">Contáctenos</a></span> <span>|</span> <span style="margin-left: 15px; margin-right: 12px;">Siguenos</span> <img class="movirs" src="images/facebook.png">
                            <img class="movirs" src="images/flickr.png">
                        </div>
                        <div class="twelve columns">
                            <div class="header_left">
                                <h1 id="logo"><a href="index.php" title=""><img src="images/logo_skin3.png" alt="" id="header_logo" style="width: 270px"/></a></h1>


                            </div>

                            <div class="header_right">
                                <div id="top_menu" class="menu-navigation-container"><ul id="mainmenu" class="sf-menu">
                                        <!--<li id="menu-item-861"  class="current-menu-item"><a href="../index.php">Homepage</a></li>-->
                                        <li id="menu-item-1126"  ><a href="conocenos/conocenos.php"><?php echo mo_get_data(1, 2); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="conocenos/mensaje_del_gerente.php"><?php echo mo_get_data(1, 3); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="conocenos/mision_y_vision.php"><?php echo mo_get_data(1, 4); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="Conocenos/Valores.php"><?php echo mo_get_data(1, 5); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="conocenos/equipo_de_trabajo.php"><?php echo mo_get_data(1, 6); ?></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1126"  ><a href="que_hacemos/que_hacemos.php"><?php echo mo_get_data(1, 7); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 205px"><a href="que_hacemos/unidad_gruas_y_proyectos.php"><?php echo mo_get_data(1, 8); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 205px"><a href="que_hacemos/unidad_fajas_transportadoras.php"><?php echo mo_get_data(1, 9); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 205px"><a href="que_hacemos/unidad_servicio_tecnico.php"><?php echo mo_get_data(1, 11); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 205px"><a href="que_hacemos/unidad_comercial.php"><?php echo mo_get_data(1, 12); ?></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1126"  ><a href="productos/productos.php"><?php echo mo_get_data(1, 25); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="productos/productos.php"><?php echo mo_get_data(1, 26); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="productos/productos.php"><?php echo mo_get_data(1, 27); ?></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1126"  ><a href="SIG/sig.php"><?php echo mo_get_data(1, 13); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="SIG/politica.php"><?php echo mo_get_data(1, 14); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="SIG/garantia.php"><?php echo mo_get_data(1, 15); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="SIG/reclamos.php"><?php echo mo_get_data(1, 16); ?></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1126"  ><a href="trabaje_con_nosotros/trabaje_con_nosotros.php"><?php echo mo_get_data(1, 17); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="trabaje_con_nosotros/porque_movitecnica.php"><?php echo mo_get_data(1, 18); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="trabaje_con_nosotros/testimonios.php"><?php echo mo_get_data(1, 21); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="trabaje_con_nosotros/oferta_de_trabajo.php"><?php echo mo_get_data(1, 19); ?></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1126"  ><a href="media/media.php"><?php echo mo_get_data(1, 28); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="media/media.php?media=noticia"><?php echo mo_get_data(1, 29); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="media/media.php?media=nota"><?php echo mo_get_data(1, 30); ?></a></li>
                                            </ul>
                                        </li>
                                        <!--<li id="menu-item-1125" ><a href="single-ele.html">HTML Elements</a></li>-->
                                        <!--<li id="menu-item-1114" ><a href="single-full-widgets.html">Sidebars</a></li>-->

                                    </ul>

                                    <div class="header_search"><div class="search_zoom search_btn"></div>
                                        <div class="search_box">
                                            <form method="get" id="searchform" action="#"><input id="s" name="s"   type="text" placeholder="Escribir y dar enter para buscar" class="search_input" /></form></div></div>	
                                </div>						

                            </div>
                        </div>	
                    </div>	
                </div><!-- .container -->
            </div><!-- #header -->
        </div> <!--.top_wrapper -->	
        <div class="container">	
            <div id="post_grids" class="row" style=" margin-top: -20px;">
                <div style="margin-left: 20px;">
                    <span> <a href="index.php"><?php echo mo_get_data(1, 1); ?></a> > <?php echo mo_get_data(1, 31); ?> </span>
                    <br />
                    <br />
                    <?php 
                    if (isset($email_send)) {
                        if ($email_send) {
                    ?>
                    <p class="lead alert-success">&nbsp;Su mensaje ha sido enviado con exito.</p>
                    <?php
                        }else{
                    ?>
                    <p class="lead alert-error">&nbsp;El Mensaje no ha podido ser enviado. Intente de nuevo por favor.</p>
                    <?php
                        }
                    }
                    ?>
                    <h1><b><?php echo mo_get_data(1, 31); ?></b></h1>
                    <span><?php echo mo_get_data(4, 31); ?></span>
                    <br />
                    <div id="post_p" style="display: inline-block; margin-top: 10px; vertical-align: top;">
                        <h3>Enviar un Mensaje</h3>
                        <form method="post">
                            <div class="control-group">
                                <label class="control-label" for="inputTema">Tema</label>
                                <div class="controls">
                                    <input type="text" id="textTema" placeholder="Tema" name="tema">
                                </div>
                            </div>
                            <br />
                            <div class="control-group">
                                <label class="control-label" for="inputMensaje">Mensaje</label>
                                <div class="controls">
                                    <textarea rows="3" placeholder="Mensaje" name="mensaje"></textarea>
                                </div>
                            </div>
                            <br />
                            <div class="control-group">
                                <label class="control-label" for="inputCompania">Compañia</label>
                                <div class="controls">
                                    <input type="text" id="textCompania" placeholder="Compañia" name="compania">
                                </div>
                            </div>
                            <br />
                            <div class="control-group">
                                <label class="control-label" for="inputNombre">Nombre</label>
                                <div class="controls">
                                    <input type="text" id="textNombre" placeholder="Nombre" name="nombre">
                                </div>
                            </div>
                            <br />
                            <div class="control-group">
                                <label class="control-label" for="inputApellido">Apellido</label>
                                <div class="controls">
                                    <input type="text" id="textApellido" placeholder="Apellido" name="apellido">
                                </div>
                            </div>
                            <br />
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Email</label>
                                <div class="controls">
                                    <input type="text" id="textEmail" placeholder="Email" name="email">
                                </div>
                            </div>
                            <br />
                            <div class="control-group">
                                <label class="control-label" for="inputTelefono">Teléfono</label>
                                <div class="controls">
                                    <input type="text" id="textTelefono" placeholder="Telefono" name="telefono">
                                </div>
                            </div>
                            <br />
                            <div class="control-group">
                                <div class="controls">
                                    <label class="checkbox">
                                        <input type="checkbox" name="check"> Solicitar Devolucion de Mensaje
                                    </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" class="btn">Enviar</button>
                                </div>
                            </div>
                            <br />
                        </form>

                    </div>
                    <div style="display: inline-block; " class="uni_response">
                        <div style="width: 98%;">
<?php echo mo_get_data(3, 31); ?>
                        </div>
                    </div>

                </div>
                <footer class="footer">
                    <br />
                    <section>
                        <span class="footer-menu"> <span style="font-size: 17px"><b>Ocultar Menú</b></span> <img src="images/flecha_abajo.png" style="margin-bottom: -2px;"></span>
                    </section>
                    <div class='footer-trog'>
                        <section>
                            <article style="width: 170px;">
                                <span style="font-size: 16px;"><b><a href="conocenos/conocenos.php"><?php echo mo_get_data(1, 2); ?></a></b></span><br/>
                                <span>
                                    <a href="conocenos/mensaje_del_gerente.php"><?php echo mo_get_data(1, 3); ?></a><br />
                                    <a href="conocenos/mision_y_vision.php"><?php echo mo_get_data(1, 4); ?></a><br />
                                    <a href="conocenos/valores.php"><?php echo mo_get_data(1, 5); ?></a><br />
                                    <a href="conocenos/equipo_de_trabajo.php"><?php echo mo_get_data(1, 6); ?></a><br />
                                </span>
                            </article>
                            <article style="width: 235px">
                                <span style="font-size: 16px;"><b><a href="que_hacemos/que_hacemos.php"><?php echo mo_get_data(1, 7); ?></a></b></span><br/>
                                <span>
                                    <a href="que_hacemos/unidad_gruas_y_proyectos.php"><?php echo mo_get_data(1, 8); ?></a><br/>
                                    <a href="que_hacemos/unidad_fajas_transportadoras.php"><?php echo mo_get_data(1, 9); ?></a><br/>
                                    <a href="que_hacemos/unidad_servicio_tecnico.php"><?php echo mo_get_data(1, 11); ?></a><br/>
                                    <a href="que_hacemos/unidad_comercial.php"><?php echo mo_get_data(1, 12); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 120px">
                                <span style="font-size: 16px;"><b><a href="productos/productos.php"><?php echo mo_get_data(1, 25); ?></a></b></span><br/>
                                <span>
                                    <a href="productos/productos.php"><?php echo mo_get_data(1, 26); ?></a><br/>
                                    <a href="productos/productos.php"><?php echo mo_get_data(1, 27); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 120px">
                                <span style="font-size: 16px;"><b><a href="SIG/sig.php"><?php echo mo_get_data(1, 13); ?></a></b></span><br/>
                                <span>
                                    <a href="SIG/politica.php"><?php echo mo_get_data(1, 14); ?></a><br/>
                                    <a href="SIG/garantia.php"><?php echo mo_get_data(1, 15); ?></a><br/>
                                    <a href="SIG/reclamos.php"><?php echo mo_get_data(1, 16); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 210px">
                                <span style="font-size: 16px;"><b><a href="trabaje_con_nosotros/trabaje_con_nosotros.php"><?php echo mo_get_data(1, 17); ?></a></b></span><br/>
                                <span>
                                    <a href="trabaje_con_nosotros/porque_movitecnica.php"><?php echo mo_get_data(1, 18); ?></a><br/>
                                    <a href="trabaje_con_nosotros/testimonios.php"><?php echo mo_get_data(1, 21); ?></a><br/>
                                    <a href="trabaje_con_nosotros/oferta_de_trabajo.php"><?php echo mo_get_data(1, 19); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 140px">
                                <span style="font-size: 16px;"><b><a href="media/media.php"><?php echo mo_get_data(1, 28); ?></a></b></span><br/>
                                <span>
                                    <a href="media/media.php"><?php echo mo_get_data(1, 29); ?></a><br/>
                                    <a href="media/media.php"><?php echo mo_get_data(1, 30); ?></a><br/>
                                </span>
                            </article>

                        </section>
                        <section style='margin-top: 15px;'>
                            <div class="footer-op">
                                <span><img src="images/sitemap.png">Sitemap</span>
                                <span><a href="contactenos.php"><img src="images/contactenos.png"><?php echo mo_get_data(1, 31); ?></a></span>
                                <span><a href="index.php"><img src="images/home.png"><?php echo mo_get_data(1, 1); ?></a></span>
                            </div>
                        </section>
                    </div>
                </footer>
            </div>
            <br />
            <div style="display:none">
                <div id="inline1">
                    <iframe src="http://player.vimeo.com/video/52560308" width="800" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
            </div>
            <div class="load_more">	
                <nav id="page-nav">
                    <a href="#"></a>	</nav>
            </div>
            <!-- end infinite scroll -->
        </div>
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="twelve columns wrapper">
                        <div class="ft_left"><img src="images/logo_solo.png" width="30"><div style="margin-top: 8px; display: inline-block; vertical-align: top; margin-left: 5px;">Copyright © Movitécnica 2013. Todos los derechos reservados</div></div>
                        <div class="ft_right"></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div><!-- .container -->	
        </div>
        <!-- #footer -->

        <link rel='stylesheet' id='demo-style'  href='_switcher/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='demo-minicolor'  href='_switcher/miniColors/jQuery.miniColors.css' type='text/css' media='all' />

        <script type="text/javascript">
            var template = 'index.php';
        </script>
        <div id="pl_control_panel" style="display: none;">
            <div id="panel_control" class="control-open"></div>
            <div class="padd">

                <div class="input" id="predefined_skins">
                    <h4>Color Schemes</h4>
                    <a href="#" id="skin1" data-primary_color="e74c3c" data-color="fafafa" data-pattern="noise_pattern_with_crosslines"></a>
                    <a href="#" id="skin2" data-primary_color="2ecc71" data-color="fafafa" data-pattern="bg0"></a>
                    <a href="#" id="skin3" data-primary_color="3498db" data-color="fafafa" data-pattern="bg1"></a>
                    <a href="#" id="skin4" data-primary_color="9b59b6" data-color="fafafa" data-pattern="bg2"></a>
                    <a href="#" id="skin5" data-primary_color="f39c12" data-color="fafafa" data-pattern="bg3"></a>
                    <a href="#" id="skin6" data-primary_color="d35400" data-color="fafafa" data-pattern="retina_wood"></a>
                    <a href="#" id="skin7" data-primary_color="1abc9c" data-color="fafafa" data-pattern="purty_wood"></a>
                    <div class="clear"></div>
                </div>

                <div class='input'>
                    <h4>Background</h4>
                    <input type='text' value='#fafafa' name='custom_bg_color' id='custom_bg_color'/>

                </div>

                <div class='input'>
                    <h4>Example Patterns</h4>
                    <div id='custom_bg_image' class="custom_bg_image">
                        <img src='_switcher/images/_blank.png' data-img="bg0" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="bg1" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="bg2" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="bg3" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="retina_wood" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="bg4" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="bg5" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="white_brick_wall" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="rip_jobs" alt="demo" />
                        <img src='_switcher/images/_blank.png' data-img="purty_wood" alt="demo" />
                        <div class="clear"></div>
                    </div>
                </div>
                <br />
                <input type="button" id="reset_style" value="Reset" />

                <!--- end -->
            </div>	
        </div>	

        <script src="_switcher/miniColors/jQuery.miniColors.min.js"></script>
        <script src="_switcher/script.js"></script>

        <div id="toTop"><a href="#">Subir</a></div>
        <script src="../js/bootstrap.min.js"></script>
        <script type='text/javascript' src='js/jquery.easing-1.35152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jquery.masonry.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jquery.imagesloaded.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jquery.infinitescroll.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/superfish5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/mediaelement/build/mediaelement-and-player.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/fancybox/jQuery.fancybox-1.3.4.pack5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jquery.mobilemenu5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jquery.fitvids5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jquery.flexslider-min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jquery.placeholder.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='js/jflickrfeed.min5152.js?ver=1.0'></script>

    </body>
    <script type="text/javascript">
        $j(document).ready(function() {
            $j("#skin3").trigger("click");
            var menu = true;
            $j(".footer-menu").click(function() {
                $j('.footer-trog').animate({
                    height: 'toggle',
                    opacity: 'toggle'
                }, 900);
                if (menu) {

                    menu = false;
                    $j(".footer-menu span b").text("Mostrar Menu");
                    $j(".footer-menu img").attr("src", "images/flecha_arriba.png");
                } else {
                    $j('html, body').animate({
                        scrollTop: $j(document).height()
                    },
                    1500);
                    menu = true;
                    $j(".footer-menu span b").text("Ocultar Menu");
                    $j(".footer-menu img").attr("src", "images/flecha_abajo.png");
                }
            });
        });
    </script>
</html>
