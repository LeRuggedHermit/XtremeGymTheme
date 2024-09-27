<?php
/*
Template Name: Booking Page
*/
get_header();
?>


<!--Sidans huvudinnehåll: -->
<main>
  <article class="booking-content-container">
    <section class="booking-info">
      <h1>Boka ditt första pass här nedan!</h1>
      <p>
        Innan du startar din nya resa på vårt gym, oavsett om du är
        nybörjare eller erfaren, kan det kännas bra att prova på först!
      </p>
      <p>
        I formuläret nedan kan du boka ditt första pass hos oss och se vad
        som passar dig!
      </p>
    </section>
    <section class="booking-form-container">
      <!-- bokningsformulär: utan funktionalitet på det här stadiet: -->
      <form action="booking.html?1" method="post">
        <label for="name">ditt namn</label>
        <input type="text" name="name" id="name" />
        <label for="email">Din email</label>
        <input type="text" name="email" id="email" />
        <label for="phone">ditt telefonnummer</label>
        <input type="tel" name="phone" id="phone" />
        <label for="date">Välj datum för pass</label>
        <input type="date" name="date" id="date" />
        <label for="choice">välj sport</label>
        <select name="choice" id="choice">
          <option value="1">mma</option>
          <option value="2">bjj</option>
          <option value="3">Muay thai</option>
        </select>
        <label for="level">Välj den nivå du anser att du ligger på</label>
        <select name="level" id="level">
          <option value="1">nybörjare</option>
          <option value="2">fortsättare (medelnivå)</option>
          <option value="3">fortsättare (avancerad)</option>
        </select>
        <label for="submit">Skicka in</label>
        <input type="submit" value="skicka" />
      </form>
    </section>
  </article>
</main>




<?php get_footer(); ?>