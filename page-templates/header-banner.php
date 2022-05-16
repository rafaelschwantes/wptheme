<header style="display:none;">
    <div class="header-banner">
        <figure class="header-banner-out">
        <img id="topHeight" class="banner-img-mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/Elantra-main.webp" alt="">
        </figure>

        <figure class="header-banner-in">
            <img id="topHeight" class="banner-img-mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/Elantra-main.webp" alt="">
        </figure>

        <article class="header-banner-info">
            <div class="banner-info-text">
                <h1><?php echo $modelSignature ?></h2>
                <p><?php echo $modelSubtitle ?></p>
            </div>
            <?php  if (! empty( $modelHighlightLink )) {  ?>
            <a href="<?php echo $modelHighlightLink ?>&zm=<?php echo $zohoIdModel?>">
                <div class="banner-info-button">
                    <p class="m-0"><?php echo $modelHighlightCTA ?></p> 
                </div>
            </a>
            <?php  }  ?>
        </article>
    </div>
</header>

<?php /*
    <header class="header-model" id="model-top">
        <div class="header-banner">
            <figure class="header-banner-out" style="background-image: url('<?php echo $modelTopBanner ?>');">
                <img id="topHeight" class="banner-img-mobile" src="<?php echo $modelTopBanner ?>" alt="<?php echo 'Hyundai - ' . $modelName ?>" style="visibility: hidden;">
            </figure>

            <figure class="header-banner-in">
                <img id="topHeight" class="banner-img-mobile" src="<?php echo $modelTopBanner ?>" alt="<?php echo 'Hyundai - ' . $modelName ?>">
            </figure>
            <article class="header-banner-info">
                <div class="banner-info-text">
                    <h1><?php echo $modelSignature ?></h2>
                    <p><?php echo $modelSubtitle ?></p>
                </div>
                <?php  if (! empty( $modelHighlightLink )) {  ?>
                <a href="<?php echo $modelHighlightLink ?>&zm=<?php echo $zohoIdModel?>">
                    <div class="banner-info-button">
                        <p class="m-0"><?php echo $modelHighlightCTA ?></p> 
                    </div>
                </a>
                <?php  }  ?>
            </article>
        </div>
    </header>
    */ ?>