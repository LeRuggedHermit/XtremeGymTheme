<?php
get_header(); ?>

<main>
    <!-- Kategorimallen för singel-inlägg: -->
    <article class="news-content">
        <div class="single-post">
            <?php
            //Öppna loopen...
            if (have_posts()):
                while (have_posts()):
                    //och skriv ut inlägget: 
                    the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="post-meta">
                        <p>Publicerat den: <?php echo get_the_date(); ?></p>
                        <p>Av: <?php the_author(); ?></p>
                    </div>
                <?php endwhile;
            else:
                echo '<p>Inlägget finns inte.</p>';
            endif;
            ?>
        </div>
    </article>
</main>
<?php get_footer(); ?>