<?php get_header(); ?> <!-- Inclusion du header du site -->

<main>
    <!-- Section principale avec un fond visuel -->
    <section class="hero">
        <h2>MA PAGE D ACCUEIL</h2>
        <p>Explore la puissance et la discipline d'une époque révolue.</p>
        <a href="#about" class="btn">En savoir plus</a> <!-- Bouton pour naviguer vers la section À propos -->
    </section>
    
    <!-- Section Événements & Stages -->
    <section class="events">
        <h2>Événements & Stages</h2>
        <p>Retrouve ici les prochains rendez-vous du Kyudo.</p>

        <?php
        // Requête WordPress pour récupérer les événements
        $events_query = new WP_Query([
            'post_type' => 'event', 
            'posts_per_page' => 5 
        ]);

        if ($events_query->have_posts()) :
            while ($events_query->have_posts()) : $events_query->the_post();
        ?>
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> <!-- Lien vers l'événement -->
                <p><?php the_excerpt(); ?></p> <!-- Affiche un extrait de l'événement -->
                <p><strong>Date :</strong> <?php the_field('event_date'); ?></p> <!-- Affiche la date de l'événement -->
                <a href="<?php the_permalink(); ?>" class="btn">Voir l'événement</a> <!-- Bouton vers l'événement complet -->
            </article>
        <?php
            endwhile;
            wp_reset_postdata(); // Réinitialise les données de la requête WordPress
        else :
            echo "<p>Aucun événement prévu pour le moment.</p>"; // Message si aucun événement n'est enregistré
        endif;
        ?>
    </section>
</main>

<?php get_footer(); ?> <!-- Inclusion du footer du site -->

<!-- Script permettant de changer la langue du site -->
<script>
function toggleLanguage() {
    let currentLang = document.documentElement.lang;

    if (currentLang === "fr") {
        document.documentElement.lang = "en";
        localStorage.setItem("siteLang", "en"); 
    } else {
        document.documentElement.lang = "fr";
        localStorage.setItem("siteLang", "fr"); 
    }

    location.reload(); 
}
</script>
