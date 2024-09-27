<?php get_header(); ?>
<!--Kategori-sida som huserar alla inlägg:  -->
<div class="category-page">
    <h1>Detta är kategorimallen!</h1>
    <?php if (have_posts()): ?>
        <ul>
            <?php while (have_posts()):
                the_post(); ?>
                <li>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>Inga inlägg hittades.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>