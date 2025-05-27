<?php
/*
Template Name: liens
*/
get_header();
?>

<?php // Début de la boucle page ?>
<?php while (have_posts()) : the_post(); ?>
  <article>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </article>
<?php endwhile; ?>
<?php // Fin de la boucle page ?>

<style>
/* Arrière-plan global et centrage */
.page-template-liens {
  background-color: #f4f0eb;
  font-family: "Noto Serif JP", serif;
  display: flex;
  justify-content: center;
  padding: 60px 20px;
}

/* Bloc central */
.page-template-liens article {
  background: white;
  border-radius: 16px;
  padding: 40px;
  max-width: 800px;
  width: 100%;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
}

/* Titres */
.page-template-liens h1,
.page-template-liens h2 {
  color: #2c3e50;
  margin-top: 30px;
  border-left: 6px solid #9b2915;
  padding-left: 12px;
  font-weight: bold;
}

/* Liens */
.page-template-liens a {
  color: #1a4e8a;
  text-decoration: none;
  font-weight: bold;
  transition: color 0.3s ease;
}

.page-template-liens a:hover {
  color: #9b2915;
  text-decoration: underline;
}

/* Listes sans puces classiques */
.page-template-liens ul {
  list-style: none;
  padding-left: 0;
}

.page-template-liens li {
  margin: 10px 0;
  position: relative;
  padding-left: 20px;
}

/* Petite flèche japonaise */
.page-template-liens li::before {
  content: "⟶";
  position: absolute;
  left: 0;
  color: #9b2915;
  font-weight: bold;
}

</style>



<?php get_footer(); ?>
