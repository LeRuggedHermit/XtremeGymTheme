<?php get_header(); ?>

<!--Banner med puffar-->

<div class="hero">
  <div class="push-container">
    <div class="push">
      <h1>Börja idag!</h1>
      <h3>Boka in ditt första pass redan nu!</h3>
    </div>
    <div class="push-button-container">
      <!-- Knappen under har en klick-funktion vilken skickar användaren vidare till bokningssidan: -->
      <button class="push-btn"
        onclick="window.location.href='<?php echo esc_url(get_permalink(get_page_by_path('booking'))); ?>'">Boka</button>
    </div>
  </div>
</div>

<!--Sidans huvudinnehåll: -->
<main>
  <article class="about">
    <section class="about-text">
      <h1>X-treme gym</h1>
      <p id="subheading">
        Xtreme-gym är gymmet för dig som vill träna X-tra hårt, som vill slå
        X-tra hårt och som vägrar kompromissa med din träning!
      </p>

      <p class="main-text">
        Vi tillhandahåller tjänster för dig som vill ägna dig åt antingen
        styrketräning i vårt gym, Jiu jitsu eller MMA.
      </p>

      <p class="main-text">
        Det spelar ingen roll om du är luttrad veteran eller aldrig satt din
        fot i ett gym tidigare!
      </p>

      <p class="main-text">
        Vi finns här för att hjälpa dig nå de resultat du vill nå.
      </p>
    </section>
    <section class="about-img">
      <img src="<?php echo get_template_directory_uri(); ?>/ASSETS/Kick_big.png" alt="kick" />
    </section>
  </article>
  <article class="news-article">
    <h1>Senaste nyheter!</h1>
    <div class="news-container">

      <?php
      // en query för att hämta inlägg från kategorin 'nyheter'
      $args = array(
        'category_name' => 'nyheter', // kategorin använder slug
        'posts_per_page' => 3 // definierar hur många inlägg vi vill kunna visa
      );

      $nyheter_query = new WP_Query($args);

      // Starta loopen
      if ($nyheter_query->have_posts()):
        while ($nyheter_query->have_posts()):
          $nyheter_query->the_post(); ?>
          <div class="news">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); // Visar en kort sammanfattning (excerpt) ?></p>
          </div>
          <?php
        endwhile;
      else:
        echo 'Inga inlägg hittades i kategorin "nyheter".';
      endif;

      // Återställ postdata
      wp_reset_postdata();
      ?>

    </div>
  </article>
</main>

<?php get_footer(); ?>