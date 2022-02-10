<?php 
    /* Template Name: strona z cytatem */
    get_header();
?>  

<h1> <?php the_title(); ?> </h1>

<main>

<blockquote>
    So wise.
</blockquote>

<?php 
the_content();

?>
</main>


<?php
    get_footer();
?>