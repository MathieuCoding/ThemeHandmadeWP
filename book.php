<?php 
    // Aller chercher NOTRE ficher header.php
    get_header();
?>

<p>This is my book page</p>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();?>
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
    <?php endwhile;
endif;
?>


<?php 
    // Aller chercher NOTRE fichier footer.php
    get_footer(); 
?>