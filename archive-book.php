<?php 
    // Aller chercher NOTRE ficher header.php
    get_header();
?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();?>
        <h1><a href="<?= get_the_permalink()?>"><?php the_title() ?></a></h1>
    <?php endwhile;
endif;
?>


<?php 
    // Aller chercher NOTRE fichier footer.php
    get_footer(); 
?>