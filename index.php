<?php get_header(); ?> <!-- Inclusion du header du site -->

<main>
    <!-- Section Événements & Stages -->
    <section class="events">
        <h2>Événements & Stages</h2>
        <p>Retrouve ici les prochains rendez-vous du Kyudo.</p>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const burger = document.getElementById('burger-toggle');
  const menu = document.getElementById('menu-menu-principal');

  burger.addEventListener('click', function () {
    menu.classList.toggle('open');
  });
});
</script>


<?php get_footer(); ?> <!-- Inclusion du footer du site -->
