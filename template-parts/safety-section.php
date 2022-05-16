<!-- Safety -->
<?php if (! empty( $modelSafetyTitle )) { ?>
    <section class="model-sections safety-sections">
        <div class="sections-container">
            <?php if (!empty( $modelSafetyTitle ) && !empty( $modelSafetyDescription )) { ?>    
                
                    <div class="container">
                        <div class="big-title">
                            <h2 class="sup-title-gray">Safety</h2>
                            <h3 id="contents_safety" class="sub-title-black"><?php echo $modelSafetyTitle ?></h3>
                        </div>
                        <div class="exterior-text">
                            <p><?php echo $modelSafetyDescription ?></p>
                        </div>
                    </div>
            <?php } ?>
            
            <!-- DESKTOP -->
            <div class="container safety-feature safety-desktop">
                <?php  if(count($arrSafety) > 0) {
                    foreach($arrSafety as $key => $value) { ?>
                        <a class="safety-choise <?php echo $key == 0 ? 'safety-choise-active' : '' ?>" id="<?php echo 'safetyChoiseDesktop' . $key?>" onclick="goSafetyItem('<?php echo 'safetyItem' . $key?>', 'desktop')"><?php echo $value['title']?></a>
                    <?php }
                } ?>
                
            </div>

            <!-- MOBILE -->
            <div class="container safety-feature safety-mobile" style="position: relative;">
                <div class="swiper-container swiper-container-safety" style="position: static;">
                    <div class="swiper-wrapper" style="position: static;">
                        <?php  if(count($arrSafety) > 0) {
                            foreach($arrSafety as $key => $value) { ?>
                                <a class="safety-choise swiper-slide <?php echo $key == 0 ? 'safety-choise-active' : '' ?>" id="<?php echo 'safetyChoiseMobile' . $key?>" onclick="goSafetyItem('<?php echo 'safetyItem' . $key?>', 'mobile')"><?php echo $value['title']?></a>
                            <?php }
                        } ?>
                    </div>
                    
                    <div class="swiper-safety-controls">
                        <div class="swiper-button-prev swiper-button-hidden"></div>
                        <div class="swiper-button-next swiper-button-hidden"></div>
                    </div>
                    
                </div>
            </div>

            <!-- Both -->
            <?php if (count($arrSafety) > 0) { 
                foreach ($arrSafety as $key => $value) { ?>
                    <div class="safety-content">
                        <div id="safetyItem<?php echo $key?>" class="safety-block <?php echo $key > 0 ? 'd-none': '' ?>">
                            <div class="safety-item">
                                <div class="visual">
                                    <img class="mx-auto img-fluid" src="<?php echo $value['image'] ?>">
                                </div>
                                <div class="subject">
                                    <h3><?php echo $value['title'] ?></h3>
                                    <p><?php echo $value['description']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </section>
<?php } ?>