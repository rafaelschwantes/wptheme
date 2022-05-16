<?php
/**
 * Template Name: test-acf-options
 */


get_header();
?>



<?php
//Obter valores de uma página de opções
?>

<p><?php the_field('general_title', 'options'); ?></p>
<p><?php the_field('header_title', 'options'); ?></p>
<p><?php the_field('footer_title', 'options'); ?></p>