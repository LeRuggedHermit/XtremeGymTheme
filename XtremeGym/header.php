<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--CSS: -->

  <!--CDN-Fonts: -->
  <link href="https://fonts.cdnfonts.com/css/montserrat-alternates" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/metal-mania-2" rel="stylesheet" />

  <!--GSAP: -->
  <!-- dessa har inte rensats ordentligt sedan utvecklingsstadiet. 
 samtliga cdns är inte nödvändiga. Kommer uppdateras framgent.
  -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js" defer></script>

  <link href="https://fonts.cdnfonts.com/css/lemonade-farmhouse" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js" defer></script>

  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Observer.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Draggable.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/MotionPathPlugin.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EaselPlugin.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/PixiPlugin.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js" defer></script>

  <!-- RoughEase, ExpoScaleEase och SlowMo inkluderas i EasePack filen -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EasePack.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js" defer></script>

  <!--Egna skript: -->
  <script src="<?php echo get_template_directory_uri(); ?>/JS/buttons.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/JS/indexAnimations.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/JS/menu.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/JS/pushAnimation.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/JS/slider.js" defer></script>

  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <!--Sidhuvud-->
  <header>
    <!--Logotyp-->
    <img src="<?php echo get_template_directory_uri(); ?>/ASSETS/logo-big.png" alt="logotyp" id="logo" />
    <!--Navigering: -->
    <div class="nav-container">
      <nav>
        <?php
        //konfigurerar navigeringsmenyn: 
        wp_nav_menu(array(
          'theme_location' => 'primary-menu',
          'container' => 'ul',
          'container_class' => 'test',
          'menu' => 'ul',
          'menu_class' => 'nav-menu',
          'items_wrap' => '<ul class="%2$s">%3$s</ul>',
          'add_li_class' => 'link',
        ));


        ?>



      </nav>
    </div>

    <!--Knappar:-->
    <div class="buttons">
      <button class="menu_btn">Meny</button>
      <button class="trial_btn"
        data-url="<?php echo esc_url(get_permalink(get_page_by_path('booking'))); ?>">Provträna</button>
      <button class="member_btn" data-url="<?php echo esc_url(get_permalink(get_page_by_path('kontakt'))); ?>">Bli
        medlem!</button>
    </div>
  </header>

  <!--Mobil-meny-->
  <div class="mobile-nav-container">
    <?php

    wp_nav_menu(array(
      'theme_location' => 'primary-menu',
      'container' => 'ul',
      'container_class' => 'test',
      'menu' => 'ul',
      'menu_class' => 'mobile-nav-menu',
      'items_wrap' => '<ul class="%2$s">%3$s</ul>',
      'add_li_class' => 'link',
    ));


    ?>

    <button class="close_btn">Stäng menyn</button>
  </div>