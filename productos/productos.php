<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Movitécnica</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <link rel="shortcut icon" href="../images/favicon_movi.ico">
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
        <link rel='stylesheet'  href='../css/mystyles.css' type='text/css' media='all' />
        <link rel='stylesheet' id='reset-css'  href='../css/reset9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='responsive'  href='../css/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' id='font-awesome.min-css'  href='../css/font-awesome.min9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='flexslider-css'  href='../css/flexslider9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='superfish-css'  href='../css/superfish9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='mediaelement-css'  href='../js/mediaelement/build/mediaelementplayer.min9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='style-css'  href='../style9d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='fancybox-css'  href='../js/fancybox/jquery.fancybox-1.3.49d52.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='skin'  href='../css/skin3.css' type='text/css' media='all' />
        <script type='text/javascript' src='../js/jquery.js'></script>
        <script type='text/javascript' src='../js/custom.js'></script>
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

        .accordion_title
        {
            font-size: 15px;
        }
        .addthis_toolbox
        {
            float: right;
        }
        .list_cats_mar,.list_prods_mar,.list_all_marcs,.list_cats,.list_prods, #list_all_categories, #list_all_marks :hover
        {
            cursor: pointer;
        }
    </style>
    <body>  <?php
include '../class/Connection.class.php';
include '../class/Fuctions.php';
?>
        <div class="top_wrapper">
            <div id="header">
                <div class="container">
                    <div class="row">
                        <div style="text-align: right; margin-right: 3%; color: #FFF; font-weight: bold; font-size: 10px;">
                            <span style="margin-left: 15px; margin-right: 15px;"><a href="../contactenos.php"><?php echo mo_get_data(1, 31); ?></a></span> <span>|</span> <span style="margin-left: 15px; margin-right: 12px;">Síguenos</span> <img class="movirs" src="../images/facebook.png">
                            <img class="movirs" src="../images/flickr.png">
                        </div>
                        <div class="twelve columns">
                            <div class="header_left">
                                <h1 id="logo"><a href="../index.php" title=""><img src="../images/logo_skin3.png" alt="" id="header_logo" style="width: 270px"/></a></h1>


                            </div>

                            <div class="header_right">
                                <div id="top_menu" class="menu-navigation-container"><ul id="mainmenu" class="sf-menu">
                                        <!--<li id="menu-item-861"  class="current-menu-item"><a href="../index.php">Homepage</a></li>-->
                                        <li id="menu-item-1126"  ><a href="../conocenos/conocenos.php"><?php echo mo_get_data(1, 2); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../conocenos/mensaje_del_gerente.php"><?php echo mo_get_data(1, 3); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../conocenos/mision_y_vision.php"><?php echo mo_get_data(1, 4); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../conocenos/valores.php"><?php echo mo_get_data(1, 5); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../conocenos/equipo_de_trabajo.php"><?php echo mo_get_data(1, 6); ?></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1126"  ><a href="../que_hacemos/que_hacemos.php"><?php echo mo_get_data(1, 7); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 237px"><a href="../que_hacemos/unidad_gruas_y_proyectos.php"><?php echo mo_get_data(1, 8); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 237px"><a href="../que_hacemos/unidad_fajas_transportadoras.php"><?php echo mo_get_data(1, 9); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 237px"><a href="../que_hacemos/unidad_servicio_tecnico.php"><?php echo mo_get_data(1, 11); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199" style="width: 237px"><a href="../que_hacemos/unidad_comercial.php"><?php echo mo_get_data(1, 12); ?></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1126"  ><a href="../productos/productos.php"><?php echo mo_get_data(1, 25); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../productos/productos.php?filtro=categorias">Por <?php echo mo_get_data(1, 26); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../productos/productos.php?filtro=marcas">Por <?php echo mo_get_data(1, 27); ?></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1126"  ><a href="../SIG/sig.php"><?php echo mo_get_data(1, 13); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../SIG/politica.php"><?php echo mo_get_data(1, 14); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../SIG/garantia.php"><?php echo mo_get_data(1, 15); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../SIG/reclamos.php"><?php echo mo_get_data(1, 16); ?></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1126"  ><a href="../trabaje_con_nosotros/trabaje_con_nosotros.php"><?php echo mo_get_data(1, 17); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../trabaje_con_nosotros/porque_movitecnica.php"><?php echo mo_get_data(1, 18); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../trabaje_con_nosotros/testimonios.php"><?php echo mo_get_data(1, 21); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../trabaje_con_nosotros/oferta_de_trabajo.php"><?php echo mo_get_data(1, 19); ?></a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-1126"  ><a href="../media/media.php"><?php echo mo_get_data(1, 28); ?></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../media/media.php?media=noticias"><?php echo mo_get_data(1, 29); ?></a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="../media/media.php?media=identidad-de-marca"><?php echo mo_get_data(1, 30); ?></a></li>
                                            </ul>
                                        </li>
                                        <!--<li id="menu-item-1125" ><a href="single-ele.html">HTML Elements</a></li>-->
                                        <!--<li id="menu-item-1114" ><a href="single-full-widgets.html">Sidebars</a></li>-->

                                    </ul>

                                    <div class="header_search"> 
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
                    <!--<span> <a href="index.php"><?php // echo mo_get_data(1, 1);  ?></a> > <a href="productos/productos.php"> <?php // echo mo_get_data(1, 25);  ?> </a> > Productos </span>-->
                    <br />
                    <br />
                    <div class="image_box2"><img src="../userfiles/<?php echo mo_get_data(2, 25); ?>" style=""></div>
                    <br />
                    <br />
                    <?php
                    $array_cats_parent = mo_get_cats_parents();
                    $array_marc = mo_get_cats_mar();
                    $array_sub_cats = mo_get_sub_cat();
                    $array_id_cats = array();
                    foreach ($array_sub_cats as $cats) {
                        $array_id_cats[] = $cats[0];
                    }
                    ?>

                    <div id="post_p" style="display: inline-block; vertical-align: top; width: 230px; text-align: left;">
                        <div class="categorias">
                            <ul class="accordion">
                                <li>
                                    <div id="select_categories" class="accordion_head accordion_title list_cats" style="font-size: 16px; font-weight: bold;" data-id="">Seleccionar por <?php echo mo_get_data(1, 26); ?></div>
                                    <div class="accordion_content">
                                        <ul>
                                            <?php
                                            foreach ($array_cats_parent as $parents) {
                                                ?>
                                                <li>
                                                    <div class="accordion_head accordion_title all_cats" data-id="<?php echo $parents[0]; ?>"><?php echo $parents[1]; ?></div>
                                                    <div class="accordion_content">
                                                        <?php
                                                        sub_categorys($array_id_cats, $parents[0]);
                                                        ?>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion_head accordion_title list_all_marcs" style="font-size: 16px; font-weight: bold;">Seleccionar por <?php echo mo_get_data(1, 27); ?></div>
                                    <div class="accordion_content">
                                        <ul id="ul_list_marks">
                                            <?php
                                            foreach ($array_marc as $parents) {
                                                $array_hidden = array();
                                                $array_hidden = explode(",", $parents[4]);
                                                ?>
                                                <li>
                                                    <div class="accordion_head accordion_title list_marc" data-id="<?php echo $parents[0]; ?>" data-currentid="<?php echo $parents[3]; ?>"><?php echo $parents[1]; ?></div>
                                                    <div class="accordion_content">
                                                        <?php
                                                        sub_categorys_mar($array_id_cats, $parents[0], $array_hidden);
                                                        ?>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php ?>
                    <span style="display: none" id="filtrado"><?php echo isset($_GET['filtro']) ? $_GET['filtro'] : ""; ?></span>
                    <span style="display: none" id="normal_content">
                        <div>
                            <div style="float: left;"><h1 style="font-size: 28px"><b>Catálogo de Productos</b></h1></div>
                            <input type="button" value="►" title="buscar" id="buscar" style=" float: right;"><input type="text" name="buscar_prod" value="" id="prod" size="42" style="display: inline-block; float: right;" placeholder="Buscar producto">
                        </div>
                        <br />
                        <br />  <br />  
                        <div style="margin-top: 10px;">
                            <div id="list_all_categories" class="four columns post_col masonry-brick">
                                <div class="post-973 post type-post status-publish format-standard hentry category-uncategorized post_item">
                                    <div class="large_thumb">
                                        <!--<a href="../images/_demo/1.jpg" class="thumb_icon productos fancybox" style="-webkit-transition:none; -moz-transition: none; margin-top: 20%;"><span></span></a>-->
                                        <div class="mask post_top_element"></div> 
                                        <div class="img_wrapper"><a href="#" rel="bookmark" title=""><img src="../images/1.png" alt="This is a image" class="post_top_element thumb" /></a></div>
                                    </div>
                                </div>
                                <div style=" text-align: center;"><h2 style="font-size: 25px;">Categorías</h2></div>
                            </div>
                            <div id="list_all_marks" class="four columns post_col masonry-brick">
                                <div class="post-973 post type-post status-publish format-standard hentry category-uncategorized post_item">
                                    <div class="large_thumb" >
                                        <!--<a href="../images/_demo/1.jpg" class="thumb_icon marcas fancybox" style="-webkit-transition:none; -moz-transition: none; margin-top: 28px;"><span></span></a>-->
                                        <div class="mask post_top_element"></div> 
                                        <div class="img_wrapper"><a href="#" rel="bookmark" title=""><img src="../images/2.png" alt="This is a image" class="post_top_element thumb" /></a></div>
                                    </div>
                                </div>
                                <div style=" text-align: center;"><h2 style="font-size: 25px;">Marcas</h2></div>
                            </div>
                        </div>
                        <br />
                    </span>

                    <div style="display: inline-block; width: 73%; min-width: 220px; " class="uni_response">
                        <div style="width: 98%;" id="product_content">

                        </div>
                    </div>

                </div>
                <br />
                <br />
                <footer class="footer">
                    <br />
                    <section>
                        <span class="footer-menu"> <span style="font-size: 17px"><b>Ocultar Menú</b></span> <img src="../images/flecha_abajo.png" style="margin-bottom: -2px;"></span>
                    </section>
                    <div class='footer-trog'>
                        <section>
                            <article style="width: 160px;">
                                <span style="font-size: 16px;"><b><a href="../conocenos/conocenos.php"><?php echo mo_get_data(1, 2); ?></a></b></span><br/>
                                <span>
                                    <a href="../conocenos/mensaje_del_gerente.php"><?php echo mo_get_data(1, 3); ?></a><br />
                                    <a href="../conocenos/mision_y_vision.php"><?php echo mo_get_data(1, 4); ?></a><br />
                                    <a href="../conocenos/valores.php"><?php echo mo_get_data(1, 5); ?></a><br />
                                    <a href="../conocenos/equipo_de_trabajo.php"><?php echo mo_get_data(1, 6); ?></a><br />
                                </span>
                            </article>
                            <article style="width: 225px">
                                <span style="font-size: 16px;"><b><a href="../que_hacemos/que_hacemos.php"><?php echo mo_get_data(1, 7); ?></a></b></span><br/>
                                <span>
                                    <a href="../que_hacemos/unidad_gruas_y_proyectos.php"><?php echo mo_get_data(1, 8); ?></a><br/>
                                    <a href="../que_hacemos/unidad_fajas_transportadoras.php"><?php echo mo_get_data(1, 9); ?></a><br/>
                                    <a href="../que_hacemos/unidad_servicio_tecnico.php"><?php echo mo_get_data(1, 11); ?></a><br/>
                                    <a href="../que_hacemos/unidad_comercial.php"><?php echo mo_get_data(1, 12); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 120px">
                                <span style="font-size: 16px;"><b><a href="../productos/productos.php"><?php echo mo_get_data(1, 25); ?></a></b></span><br/>
                                <span>
                                    <a href="../productos/productos.php?filtro=categorias">Por <?php echo mo_get_data(1, 26); ?></a><br/>
                                    <a href="../productos/productos.php?filtro=marcas">Por <?php echo mo_get_data(1, 27); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 150px">
                                <span style="font-size: 16px;"><b><a href="../SIG/sig.php"><?php echo mo_get_data(1, 13); ?></a></b></span><br/>
                                <span>
                                    <a href="../SIG/politica.php"><?php echo mo_get_data(1, 14); ?></a><br/>
                                    <a href="../SIG/garantia.php"><?php echo mo_get_data(1, 15); ?></a><br/>
                                    <a href="../SIG/reclamos.php"><?php echo mo_get_data(1, 16); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 200px">
                                <span style="font-size: 16px;"><b><a href="../trabaje_con_nosotros/trabaje_con_nosotros.php"><?php echo mo_get_data(1, 17); ?></a></b></span><br/>
                                <span>
                                    <a href="../trabaje_con_nosotros/porque_movitecnica.php"><?php echo mo_get_data(1, 18); ?></a><br/>
                                    <a href="../trabaje_con_nosotros/testimonios.php"><?php echo mo_get_data(1, 21); ?></a><br/>
                                    <a href="../trabaje_con_nosotros/oferta_de_trabajo.php"><?php echo mo_get_data(1, 19); ?></a><br/>
                                </span>
                            </article>
                            <article style="width: 140px">
                                <span style="font-size: 16px;"><b><a href="../media/media.php"><?php echo mo_get_data(1, 28); ?></a></b></span><br/>
                                <span>
                                    <a href="../media/media.php?media=noticias"><?php echo mo_get_data(1, 29); ?></a><br/>
                                    <a href="../media/media.php?media=identidad-de-marca"><?php echo mo_get_data(1, 30); ?></a><br/>
                                </span>
                            </article>

                        </section>
                        <section style='margin-top: 15px;'>
                            <div class="footer-op">
                                <span><img src="../images/sitemap.png"><a href="../sitemap.php">Sitemap</a></span>
                                <span><a href="../contactenos.php"><img src="../images/contactenos.png"><?php echo mo_get_data(1, 31); ?></a></span>
                                <span><a href="../index.php"><img src="../images/home.png"><?php echo mo_get_data(1, 1); ?></a></span>
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
                        <div class="ft_left"><img src="../images/logo_solo.png" width="30"><div style="margin-top: 8px; display: inline-block; vertical-align: top; margin-left: 5px;">Copyright © Movitécnica 2013. Todos los derechos reservados</div></div>
                        <div class="ft_right"></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div><!-- .container -->	
        </div>
        <!-- #footer -->

        <link rel='stylesheet' id='demo-style'  href='_switcher/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='demo-minicolor'  href='_switcher/miniColors/jquery.miniColors.css' type='text/css' media='all' />

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
                        <img src='_switcher/../images/_blank.png' data-img="bg0" alt="demo" />
                        <img src='_switcher/../images/_blank.png' data-img="bg1" alt="demo" />
                        <img src='_switcher/../images/_blank.png' data-img="bg2" alt="demo" />
                        <img src='_switcher/../images/_blank.png' data-img="bg3" alt="demo" />
                        <img src='_switcher/../images/_blank.png' data-img="retina_wood" alt="demo" />
                        <img src='_switcher/../images/_blank.png' data-img="bg4" alt="demo" />
                        <img src='_switcher/../images/_blank.png' data-img="bg5" alt="demo" />
                        <img src='_switcher/../images/_blank.png' data-img="white_brick_wall" alt="demo" />
                        <img src='_switcher/../images/_blank.png' data-img="rip_jobs" alt="demo" />
                        <img src='_switcher/../images/_blank.png' data-img="purty_wood" alt="demo" />
                        <div class="clear"></div>
                    </div>
                </div>
                <br />
                <input type="button" id="reset_style" value="Reset" />

                <!--- end -->
            </div>	
        </div>	

        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51cd9546674927d0"></script>
        <script src="../_switcher/miniColors/jquery.miniColors.min.js"></script>
        <script src="../_switcher/script.js"></script>
        <div id="toTop"><a href="#">Subir</a></div>
        <script src="../js/bootstrap.min.js"></script>
        <script type='text/javascript' src='../js/tinyscrollbar.js'></script>
        <script type='text/javascript' src='../js/jquery.easing-1.35152.js?ver=1.0'></script>
        <script type='text/javascript' src='../js/jquery.masonry.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='../js/jquery.imagesloaded.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='../js/jquery.infinitescroll.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='../js/superfish5152.js?ver=1.0'></script>
        <script type='text/javascript' src='../js/mediaelement/build/mediaelement-and-player.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='../js/fancybox/jquery.fancybox-1.3.4.pack5152.js?ver=1.0'></script>
        <script type='text/javascript' src='../js/jquery.mobilemenu5152.js?ver=1.0'></script>
        <script type='text/javascript' src='../js/jquery.fitvids5152.js?ver=1.0'></script>
        <script type='text/javascript' src='../js/jquery.flexslider-min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='../js/jquery.placeholder.min5152.js?ver=1.0'></script>
        <script type='text/javascript' src='../js/jflickrfeed.min5152.js?ver=1.0'></script>

    </body>
    <?php

    function sub_categorys($array_cats, $id) {
        if (in_array($id, $array_cats)) {
            $array_fil = mo_get_cat_content($id);
            foreach ($array_fil as $li) {
                if (in_array($li[0], $array_cats)) {
                    ?>
                    <ul>
                        <li>
                            <div class="accordion_head accordion_title list_cats" data-id="<?php echo $li[0]; ?>" ><?php echo $li[1]; ?></div>
                            <div class="accordion_content">
                            <?php sub_categorys($array_cats, $li[0]); ?>
                            </div>
                        </li>
                    </ul>
                    <?php
                } else {
                    ?>
                    <span class="list_prods" data-id="<?php echo $li[0]; ?>" style="cursor:pointer"><?php echo $li[1]; ?></span><br/>
                    <?php
                }
            }
        }
    }

    function sub_categorys_mar($array_cats, $id, $array_hidden = array()) {
        if (in_array($id, $array_cats)) {
            $array_fil = mo_get_cat_content($id);
            foreach ($array_fil as $li) {
                if(!in_array($li[0], $array_hidden)){
                    if (in_array($li[0], $array_cats)) {
                        ?>
                        <ul>
                            <li>
                                <div class="accordion_head accordion_title list_cats_mar" data-id="<?php echo $li[0]; ?>"><?php echo $li[1]; ?></div>
                                <div class="accordion_content">
                                <?php sub_categorys_mar($array_cats, $li[0], $array_hidden); ?>
                                </div>
                            </li>
                        </ul>
                        <?php
                    } else {
                        ?>
                        <span class="list_prods_mar" data-id="<?php echo $li[0]; ?>"><?php echo $li[1]; ?></span><br/>
                        <?php
                    }
                }
            }
        }
    }
    ?>
    <script type="text/javascript">
        $j(document).ready(function() {
            var $list_marc = "",$currentid = "";
            var product_content_html = $j("#normal_content").html();
            $j("#normal_content").remove();
            $j(".list_cats, .list_cats_mar, .list_marc, .list_all_marcs, .all_cats").on("click",function (){
                if($j(this).hasClass("list_all_marcs")){
                    $j("#select_categories").next().find(".active").removeClass("active").next().css("display","none");     
                    $j(this).next().find(".active").removeClass("active").next().css("display","none");     
                }else if($j(this).attr('id') == "select_categories"){
                    $j(".list_all_marcs").next().find(".active").removeClass("active").next().css("display","none");     
                    $j(this).next().find(".active").removeClass("active").next().css("display","none");     
                }else{
                    $j(this).next().find(".active").removeClass("active").next().css("display","none");     
                }
            });
            function trigger_list_all($this){
                if(!$this.hasClass("active")){
                    if($j($this.parent().parent().parent().parent().children(".active")).hasClass("list_all_marcs")){
                        all_marks();
                    }
                }
            }
            function normal_cats(id,$this){
                $j.ajax({
                    data:  "id=" + id,
                    url:   'procesos.php',
                    type:  'post',
                    success:  function (html) {
                        if(!$this.hasClass("active") && $this.attr('id') == "select_categories"){
                            $j("#product_content").html(product_content_html);
                        }else{
                            if (html.indexOf('vacio') >= 0){
                                $j("#product_content").html(html);
                                var oScroll6 = $j('.scrollbar1');
                                oScroll6.tinyscrollbar();
                                if ($j('a.fancybox').length && jQuery()) {
                                    $j("a.fancybox").fancybox();
                                }
                                addthis.toolbox('.addthis_toolbox');
                            }
                        }
                        
                    }
                });
            }
            function all_marks(){
                $j.ajax({
                    data:  "do=2",
                    url:   'procesos.php',
                    type:  'post',
                    success:  function (html) {
                        $j("#product_content").html(html);
                    }
                });
            }
            
            var search_products = function(){
                $j.ajax({
                    data:  "do=3&filt=" + $j("#prod").val(),
                    url:   'procesos.php',
                    type:  'post',
                    success:  function (html) {
                        $j("#product_content").html(html);
                        var oScroll6 = $j('.scrollbar1');
                        oScroll6.tinyscrollbar();
                        if ($j('a.fancybox').length && jQuery()) {
                            $j("a.fancybox").fancybox();
                        }
                        addthis.toolbox('.addthis_toolbox');
                    }
                });
            };
            
            var keycode;
            $j(document).on("keyup","#prod", function(e) {
                keycode = (e.keyCode ? e.keyCode : e.which);
                if(keycode === 13) search_products();
            });
            $j(document).on("click","#buscar", search_products);
            
            $j(document).on("click",".regresar",function(){
                $j("#product_content").html(product_content_html);
                $j("div.list_all_marcs.active").click();
                $j("div#select_categories.active").click();
            });
            
            
            $j(document).on("click",".list_all_marcs",function(){
                if($j(this).hasClass("active")){
                    all_marks();
                }else{
                    $j("#product_content").html(product_content_html);
                }
            });
            
            $j(document).on("click","#select_categories",function(){
                
            });
            
            
            $j(document).on("click",".all_cats",function(){
                normal_cats('',$j(this));
            });

            $j(document).on("click",".list_cats,.list_prods",function(){
                normal_cats($j(this).data("id"),$j(this));
            });
            
            $j(document).on("click",".list_cats_mar,.list_prods_mar",function(){
                $j.ajax({
                    data:  "id=" + $j(this).data("id") + "&do=1&parent=" + $list_marc + "&current=" + $currentid,
                    url:   'procesos.php',
                    type:  'post',
                    success:  function (html) {
                        $j("#product_content").html(html);
                        var oScroll6 = $j('.scrollbar1');
                        oScroll6.tinyscrollbar();
                        if ($j('a.fancybox').length && jQuery()) {
                            $j("a.fancybox").fancybox();
                        }
                        addthis.toolbox('.addthis_toolbox');
                    }
                });
            });
            
            $j(document).on("click",".list_marc",function(){
                $list_marc = $j(this).data("id");
                $currentid = $j(this).data("currentid");
                $this = $j(this);
                $j.ajax({
                    data:  "id=" + $j(this).data("id") + "&do=1&parent=" + $list_marc + "&current=" + $currentid,
                    url:   'procesos.php',
                    type:  'post',
                    success:  function (html) {
                        $j("#product_content").html(html);
                        trigger_list_all($this);
                    }
                });
            });

            var $filtrado = $j("#filtrado").text();
            if($filtrado === "categorias"){
                $j("#select_categories").trigger("click");
            }else if($filtrado === "marcas"){
                $j(".list_all_marcs").trigger("click");
            }else{
                $j("#product_content").html(product_content_html);
            }
            
            $j(document).on("click","#list_all_categories",function(){
                $j("#select_categories").trigger("click");
            });
            
            $j(document).on("click","#list_all_marks",function(){
                $j(".list_all_marcs").trigger("click");
            });
            
            $j(document).on("click",".select_mark",function(){
                //3 = 1 div de titulo y 2 <br>
                $j("#ul_list_marks > li:eq(" + ($j(this).parent().parent().index() - 3) + ") .list_marc").trigger("click");
            });

            var menu = true, $height;
            if ($j(".title_share").length) {
                $height = parseInt($j(".title_share:first-child")[0].firstChild.nextSibling.offsetHeight) + 5;
                $j(".title_share").css("height", $height + "px");
            }
            //            $j(".selec_img_hover").on("mouseenter",function(){
            //                $j(this).fadeOut(0);
            //               $j(this).attr("src","../images/foto_pro_marcas_hover.png"); 
            //               $j(this).fadeIn(5);
            //            }).on("mouseleave",function(){
            //               $j(this).attr("src","../images/foto_pro_marcas.png"); 
            //            });
            var oScroll6 = $j('.scrollbar1');
            oScroll6.tinyscrollbar();

            //add a click event to a button
            $j('#scrollbar6-anchor').click(function() {
                oScroll6.tinyscrollbar_update(50);
                return false;
            });
            $j(".footer-menu").click(function() {
                $j('.footer-trog').animate({
                    height: 'toggle',
                    opacity: 'toggle'
                }, 900);
                if (menu) {
                    menu = false;
                    $j(".footer-menu span b").text("Mostrar Menu");
                    $j(".footer-menu img").attr("src", "../images/flecha_arriba.png");
                } else {
                    $j('html, body').animate({
                        scrollTop: $j(document).height()
                    },
                    1500);
                    menu = true;
                    $j(".footer-menu span b").text("Ocultar Menu");
                    $j(".footer-menu img").attr("src", "../images/flecha_abajo.png");
                }
            });
        });
    </script>
</html>
