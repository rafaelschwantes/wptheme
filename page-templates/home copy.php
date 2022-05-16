<?php
/**
 * Template Name: Homepage
 */

get_header();

//Safety


$arrBackofficeSafety = array(
    [
        'title' => 'model-caracteristic-safety-title-1', 
        'description' => 'model-caracteristic-safety-description-1', 
        'image' => 'img1'
    ],
    [
        'title' => 'model-caracteristic-safety-title-2', 
        'description' => 'model-caracteristic-safety-description-2', 
        'image' => 'img2'
    ],
    [
        'title' => 'model-caracteristic-safety-title-3', 
        'description' => 'model-caracteristic-safety-description-3', 
        'image' => 'img3'
    ],
    [
        'title' => 'model-caracteristic-safety-title-4', 
        'description' => 'model-caracteristic-safety-description-4', 
        'image' => 'img4'
    ],
    [
        'title' => 'model-caracteristic-safety-title-5', 
        'description' => 'model-caracteristic-safety-description-5', 
        'image' => 'img5'
    ]
);

$arrSafety = [];

foreach ($arrBackofficeSafety as $key => $value) {
    if(!empty($value['title']) && !empty($value['description']) && !empty($value['image'])) {
        array_push($arrSafety, $value);
    }
}



?>

<section class="pipSectionHeader pipSection">
    <div class="pip-header-bgimage" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/images/Elantra-main.jpg)"></div>
    <div class="pip-header-holder">
        <div class="pip-header-image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/images/Elantra-main.jpg)"></div>
        <div class="pip-header-text d-flex justify-content-between align-items-center">
            <div>
                <h1 class="extrabold">Hyundai i20</h1>
                <h2 class="regular">Mais tecnológico. Mais Confiante.</h2>
            </div>
            <div>
                <a href="https://hyundai.pt/wp-content/themes/hyundai/src/controllers/Configurator-Controller.php?cmd=GETENGINEPIP&m=45&g=264&n=Hyundai i20" class="btn btn-standard btn-lg btn-pip">Configurar</a>
            </div>
        </div>
    </div>
</section>



<section class="safety-section">
    <div class="safety__header">

    </div>
    <div class="safety__content">
        <div class="safety__tabs">
            <?php foreach ( $arrSafety as $key => $value ) : ?>
                <button type="button" class="tb" data-tab="#tab-<?php echo $key; ?>">
                    <?php echo $value['title'] ?>
                </button>
            <?php endforeach; ?>
        </div>
        <div class="safety__articles">
            <?php foreach ($arrSafety as $key => $value) : ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/<?php echo $value['image'] ;?>.jpg">
                <?php echo $value['description'] ?>

            <?php endforeach; ?>
        </div>
    </div>
    <div class=""></div>
    <div class=""></div>
    <div class=""></div>
    <div class=""></div>
    <div class=""></div>
    <div class=""></div>
</section>

	














<style>


.header-banner{
    position: relative;
}
.header-banner-out img{
    position: absolute;
    width: 100%;
    left: 0;
}
.header-banner-in img{
    position: absolute;
    width: 100vw;
    /*max-width: 800px;*/
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    
}



@media screen and (min-width: 768px){
    .header-banner-in img{
        width: 90%;
        margin: 0 auto;
    }
}

@media screen and (min-width: 1024px){
    .header-banner-in img{
    }
}

@media screen and (min-width: 1200px){
    .header-banner-in img{
    }
}

@media screen and (min-width: 1400px){
    .header-banner-in img{
    }
}

@media screen and (min-width: 1600px){
    .header-banner-in img{
    }
}

@media screen and (min-width: 1800px){

}


</style>
<?php
get_footer();