<?php 
    get_header();
?>  

<h1> <?php the_title(); ?> </h1>
<h2> REGULAR PAGE </h2>
<main>
<?php 
    the_content();
?>
</main>


<?php
    get_footer();
?>