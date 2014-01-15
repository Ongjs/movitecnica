                                <div id="post_tab" class="tab_content recent_posts">
                                    <ul>
                                        <li> 
                                            <div style="border-top: 1px solid #D7D7D7; padding-top: 10px;">
                                                <div style="width: 100%; margin-bottom: 10px;"> <h3 style="display: inline-block; vertical-align: top; margin-top: 10px;"> <b><a href="../contactenos.php"><?php echo mo_get_data(1, 31); ?></a></b> </h3><div style="display: inline-block; margin-left: 8px;"><img src="../images/logo_solo.png" style="width: 38px"></div></div>
                                                <span>Póngase en contacto con nuestros expertos y saber cómo podemos ayudarle a usted y a su empresa con su proyecto.</span>
                                            </div><br />
                                            <div style="border-top: 1px solid #D7D7D7">
                                                <br />
                                                <h3><b>Noticias Recientes</b></h3>   
                                                <span>
                                                    <?php
                                                    foreach (mo_get_desc() as $array) {
                                                        ?>
                                                        <a href="../media/noticia.php?cod=<?php echo $array[0]; ?>">
                                                            <?php echo substr($array[1], 0, 150) . "...."; ?>
                                                        </a>
                                                        <br />
                                                        <a class="button normal small pull-right" href="../media/media.php">Ver más</a>
                                                        <br /><br /><br />
                                                        <?php
                                                    }
                                                    ?>
                                                </span>
                                                <a href="../media/media.php">Ver Todas ></a>
                                                <br /><br />
                                            </div>
                                            <?php
                                            $images = mo_get_ar($quehacemos_image_category, 1);
                                            if (count($images)) {
                                            ?>
                                            <div style="border-top: 1px solid #D7D7D7;">
                                                <br />
                                                <h3><b>Galería de Imágenes</b></h3>   
                                                <div class="image_carousel">
                                                    <div id="foo1">
                                                        <?php
                                                        foreach ($images as $image) {
                                                            echo '<a href="../userfiles/' . $image['image'] . '" title="' . $image['name'] . '" rel="fancybox"> <img src="../userfiles/' . $image['thumbnail'] . '" alt="' . $image['name'] . '" /> </a>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </li>
                                    </ul>
                                </div>