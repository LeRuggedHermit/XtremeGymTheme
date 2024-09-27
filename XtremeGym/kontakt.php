
<?php 
/*
Template Name: Contact Page
*/
get_header(); 
?>

<!--Sidans huvudinnehåll: -->
<main>
      <article class="contact-content-container">
        <section class="contact-content">
          <div class="contact-info">
            <h1>Är du intresserad av att träna hos oss?</h1>
            <h2>I så fall ser vi fram emot att höra av dig!</h2>
            <p>
              Använd kontaktuppgifterna för att kontakta oss på mail eller
              telefon eller besök oss i våra lokaler så hjälper vi dig!
            </p>

            <p><b> address: </b>Väggatan 2</p>
            <p><b> telefon: </b>000-000 00 00</p>
            <p><b> Epost </b>noMail@notamail.se</p>
          </div>
        </section>
        <section class="contact-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d440.00711037233793!2d21.000628406828753!3d63.823999998483266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNjPCsDQ5JzI2LjQiTiAyMcKwMDAnMDQuNyJF!5e0!3m2!1ssv!2sse!4v1726922641003!5m2!1ssv!2sse"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            id="map"
          ></iframe>
        </section>
      </article>
    </main>


<?php get_footer(); ?>

<script src="JS\bookingAnimations.js"></script>