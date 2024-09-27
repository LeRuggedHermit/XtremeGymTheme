<?php
/*
Template Name: Sports Page
*/
get_header();
?>
<!--Sidans huvudinnehåll: -->
<main>
  <article class="sports-content-container">
    <section class="mma">
      <div class="sports-text">
        <?php
        //vi filtrerar genom angivet id och slug:
        $post_id = 35;
        $category_slug = 'sporter';

        // Skapar WP_Query-argument
        $args = array(
          'p' => $post_id,  // Filtrerar på inläggs-ID
          'post_type' => 'any',  // Tillåter alla posttyper (inlägg, sidor, custom post types)
          'tax_query' => array(
            array(
              'taxonomy' => 'category',  // Använder kategori-taxonomin
              'field' => 'slug',  // Söker efter kategorins slug
              'terms' => $category_slug,  // Den specifika kategorins slug
            ),
          ),
        );

        // Skapar en ny WP_Query
        $query = new WP_Query($args);

        // Startar loopen
        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            //visar inläggets innehåll
            the_title('<h1>', '</h1>'); // Visar titeln
            the_content(); // Visar innehållet
          }
          wp_reset_postdata(); // Återställer global postdata
        } else {
          // Om inget inlägg hittas
          echo '<p>Inget inlägg hittades i denna kategori med detta ID.</p>';
        }
        ?>

      </div>
      <div class="sports-img">
        <img
          src="https://images.unsplash.com/photo-1671856129092-ef4f4c412186?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDd8fHxlbnwwfHx8fHw%3D"
          alt="mma-pic" />
      </div>
    </section>
    <section class="thai">
      <div class="sports-text">
        <?php
        //vi filtrerar genom angivet id och slug:
        $post_id = 40;
        $category_slug = 'sporter';

        // Skapar WP_Query-argument
        $args = array(
          'p' => $post_id,  // Filtrerar på inläggs-ID
          'post_type' => 'any',  // Tillåter alla posttyper (inlägg, sidor, custom post types)
          'tax_query' => array(
            array(
              'taxonomy' => 'category',  // Använder kategori-taxonomin
              'field' => 'slug',  // Söker efter kategorins slug
              'terms' => $category_slug,  // Den specifika kategorins slug
            ),
          ),
        );

        // Skapar en ny WP_Query
        $query = new WP_Query($args);

        // Startar loopen
        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            //visar inläggets innehåll
            the_title('<h1>', '</h1>'); // Visar titeln
            the_content(); // Visar innehållet
          }
          wp_reset_postdata(); // Återställer global postdata
        } else {
          // Om inget inlägg hittas
          echo '<p>Inget inlägg hittades i denna kategori med detta ID.</p>';
        }
        ?>
      </div>
      <div class="sports-img">
        <img
          src="https://plus.unsplash.com/premium_photo-1661963901750-f498389cc4a3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="muay thai" />
      </div>
    </section>
    <section class="bjj">
      <div class="sports-text">
        <?php
        //vi filtrerar genom angivet id och slug:
        $post_id = 42;
        $category_slug = 'sporter';

        // Skapar WP_Query-argument
        $args = array(
          'p' => $post_id,  // Filtrerar på inläggs-ID
          'post_type' => 'any',  // Tillåter alla posttyper (inlägg, sidor, custom post types)
          'tax_query' => array(
            array(
              'taxonomy' => 'category',  // Använder kategori-taxonomin
              'field' => 'slug',  // Söker efter kategorins slug
              'terms' => $category_slug,  // Den specifika kategorins slug
            ),
          ),
        );

        // Skapar en ny WP_Query
        $query = new WP_Query($args);

        // Startar loopen
        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            // här skriver vi ut innehållet:
            the_title('<h1>', '</h1>'); // Visar titeln
            the_content(); // Visar innehållet
          }
          wp_reset_postdata(); // Återställ global postdata
        } else {
          // Om inget inlägg hittas
          echo '<p>Inget inlägg hittades i denna kategori med detta ID.</p>';
        }
        ?>
      </div>
      <div class="sports-img">
        <img
          src="https://plus.unsplash.com/premium_photo-1712438460624-ed01afc4f6b5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fHw%3D"
          alt="BJJ" />
      </div>
    </section>
  </article>
</main>

<?php get_footer(); ?>