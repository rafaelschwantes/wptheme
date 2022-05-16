<?php
/**
 * Template Name: test-pods
 */

//Custom setting
$dataOptions = pods( 'opcoes_personalizadas' );
$nome = $dataOptions->display( 'nome' );
$apelido = $dataOptions->display( 'apelido' );
$ficheiro = $dataOptions->display( 'ficheiro' );

echo $nome . ' - ' . $apelido . ' - ' . $ficheiro ;




//Custom Post Type
    $params = array(
        'limit'   => -1  // Return all rows
    );

    // Create and find in one shot
    $dataPage = pods( 'pagina_personalizada', $params );

    if ( 0 < $dataPage->total() ) {
        while ( $dataPage->fetch() ) {
            $dataPageID = $dataPage->id();
            $dataPageTitle = get_the_title($dataPageID);
            $pageName = $dataPage->display( 'page_name' );
            $pageType = $dataPage->display( 'page_type' );
            $pageLocal = $dataPage->display( 'page_local' );
            $pageImageUrl = $dataPage->display( 'page_image' );
            ?>
                <h2><?php echo $dataPageTitle; ?> - <?php echo $dataPageID; ?></h2>
                <p>Nome da página: <?php echo $pageName ?></p>
                <p>tipo da página: <?php echo $pageType ?></p>
                <p>local da página: <?php echo $pageLocal; ?></p>
                <p>iamgem da página: <?php echo $pageImageUrl; ?></p>
                <div style="border-top: 1px solid #ccc"></div>
            <?php
        } 
    } 





/* $params = [
    'limit'   => -1,
];
$mypod = pods( 'conteudo_personaliza', $params );

// $dados = pods('name do custom type', 'id do post type')
$dados = pods( 'name do custom type', get_the_ID() );
$image = $dados->field('image');



// ACF
$image = get_field( 'image', id );


$page_fields = get_fields( id );
echo $page_fields['image']; */