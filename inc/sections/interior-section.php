<?php if (! empty( $modelInteriorTitle )) { ?>
    <section id=" model-interior" class=" interior container-gc">
        <?php if (!empty( $modelInteriorTitle ) && !empty( $modelInteriorDescription )) { ?>
            <div class="header-section ">
                <h3 class="header-section__efectTitle">Intérieur</h3>
                <h2 class="header-section__title"><?php echo $modelInteriorTitle ?></h2>
                <p class="header-section__subtitle"><?php echo $modelInteriorDescription ?></p>
            </div>
        <?php } ?>

        <div class="interior__content">

            <div class="inteior__article swiper swiper-interior">

                <?php if(count($arrInterior) > 0) { ?>
                    <div class="interior__slider swiper-wrapper">
                        <?php foreach ($arrInterior as $key => $value) { ?>
                            <div class="interior__item swiper-slide"> 
                                <!-- Carrossel Imagens -->
                                <?php if (! empty( $value['image'] )) { ?>
                                    <div class="interior__image">
                                        <img class="" src="<?php echo $value['image'] ?>">
                                    </div>
                                <?php } ?>
                                <!-- Carrossel card -->
                                <div class="interior__card">
                                    <?php if (! empty( $value['title'] )) { ?>
                                        <h4 class="article__title"><?php echo $value['title'] ?></h4>
                                    <?php } ?>
                                    <p class="article__description"><?php echo $value['description']?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div id="arrow-next-interior" class="swiper-button-next"></div>
                    <div id="arrow-prev-interior" class="swiper-button-prev"></div>
                    <div id="dot-pagiantion-interior" class="swiper-pagination"></div>    
                <?php } ?>
            </div>

        </div>
    </section>
<?php } ?>