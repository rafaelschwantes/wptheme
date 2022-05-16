<!-- Safety -->
<?php if (! empty( $modelSafetyTitle )) { ?>
        <section id="model-safety" class="model-safety container-gc ">

            <?php if (!empty( $modelSafetyTitle ) && !empty( $modelSafetyDescription )) { ?>
                <div class=" header-section content-gc">
                    <h3 class="header-section-efectTitle">Sécurité</h3>
                    <h2 class="header-section-title"><?php echo $modelSafetyTitle ?></h2>
                    <p class="header-section-subtitle"><?php echo $modelSafetyDescription ?></p>
                </div>
            <?php } ?>

            <div class="content-safety ">
                <div thumbsSlider="" class="content-safety-tabs swiper swiper-safety-tabs ">
                    <div class="swiper-wrapper">
                        <?php foreach ($arrSafety as $key => $value) { ?>
                            <div class="content-safety-article-slider-tabs content-gc swiper-slide ">
                                    <li ><a class="<?php echo $key == 0 ? 'active' : '' ?>"><?php echo $value['title'] ?></a></li>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="content-safety-article swiper swiper-safety">
                    <?php if (count($arrSafety) > 0) { ?>
                        <div id="dot-pagiantion-safety" class="swiper-pagination"></div>   
                        <div class="content-safety-article-slider swiper-wrapper">
                            <?php foreach ($arrSafety as $key => $value) { ?>
                                <div class="content-safety-article-slider-item content-gc swiper-slide">
                                    <div class="content-safety-article-slider-item-figure">
                                        <img class="" src="<?php echo $value['image'] ?>">
                                    </div>
                                    <div class="content-safety-article-slideritem-description">
                                        <h4><?php echo $value['title'] ?></h4>
                                        <p><?php echo $value['description']?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="content-safety-background"></div>
                    <?php } ?>
                </div>
            </div>
            <script>
            let safetyTabsItems = document.querySelectorAll('.content-safety-article-slider-tabs li a');
            safetyTabsItems.forEach(link => {
                link.addEventListener('click', function() {
                    safetyTabsItems.forEach(activeItem => activeItem.classList.remove('active'));
                    this.classList.add('active');
                    console.log('cliquei')
                }) 
            });
        </script>

        </section>
    <?php } ?>