<?php
/* Template Name: Histoire */
get_header();
?>

<style>
/* === Styles spécifiques à la page Histoire === */

body {
    font-family: 'Noto Serif JP', serif;
    text-align: center;
    padding: 20px;
}

/* Titre principal */
h1 {
    color:rgb(17, 11, 11);
    font-size: 36px;
    margin-bottom: 20px;
    font-weight: bold;
}

/* Frise chronologique */
.timeline-container {
    display: flex;
    justify-content: center;
    align-items: center;
    overflow-x: auto;
    padding: 20px;
    white-space: nowrap;
}

.timeline-item {
    display: inline-block;
    width: 250px;
    margin: 15px;
    background: white;
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    border: 2px solid #8B0000;
    box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.timeline-item.visible {
    opacity: 1;
    transform: translateY(0);
}

.timeline-item h3 {
    color: #8B0000;
    font-size: 22px;
    margin-bottom: 8px;
}

.timeline-item p {
    font-size: 16px;
    color: #333;
}

/* Sections sous la frise */
section {
    background: white;
    margin: 30px auto;
    padding: 25px;
    border-radius: 12px;
    max-width: 800px;
    box-shadow: 0px 5px 10px rgba(0,0,0,0.15);
    text-align: left;
}

section h2 {
    color: #8B0000;
    font-size: 28px;
    margin-bottom: 15px;
    text-align: center;
}

section p, section ul {
    font-size: 16px;
    color: #444;
}

.figure-item {
    padding: 15px;
    border-left: 4px solid #8B0000;
    margin-bottom: 15px;
}

.video iframe {
    width: 100%;
    border-radius: 10px;
}
.frise-secondaire {
    display: flex;
    overflow-x: auto;
    padding: 20px;
    gap: 20px;
    scroll-snap-type: x mandatory;

    /* Décalage vers la droite */
    margin-left: 100px;
}


.frise-item {
    min-width: 300px;
    background: white;
    border-radius: 12px;
    padding: 20px;
    border: 2px solid #8B0000;
    box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
    scroll-snap-align: start;
    flex-shrink: 0;
    text-align: center;
    transition: transform 0.3s;
}

.frise-item:hover {
    transform: scale(1.03);
}

.frise-item h2 {
    font-size: 22px;
    color: #8B0000;
    margin-bottom: 10px;
}

.frise-item p {
    font-size: 16px;
    color: #333;
}


/* === NOUVEAU : mise en page côte à côte des 2 blocs de localisation === */

.locations-wrapper {
    display: flex;
    gap: 30px; /* espace entre les deux blocs */
    justify-content: center;
    flex-wrap: wrap; /* passage en colonne sur petits écrans */
    margin-top: 40px;
}

.locations-wrapper section {
    flex: 1 1 450px; /* largeur min 450px, s'adapte */
    max-width: 480px;
    padding: 0; /* on enlève le padding pour laisser retrait-container gérer */
    box-shadow: none; /* on enlève l'ombre ici pour pas doublon */
    margin: 0; /* suppression des marges auto par défaut */
    background: transparent; /* transparent pour mieux coller */
}

.retrait-container {
    display: flex;
    border: 1px solid #ccc;
    border-radius: 12px;
    overflow: hidden;
    height: 300px;
    background: #b5a9a9;
    box-shadow: 0px 5px 10px rgba(0,0,0,0.15);
}

.retrait-map {
    flex: 1;
}

.retrait-map iframe {
    width: 100%;
    height: 100%;
    border: none;
}

.retrait-info {
    flex: 1;
    padding: 15px;
    text-align: left;
    background: #fafafa;
}

.kyudo-explication {
    background: #fff8f0;
    border: 2px solid #8B0000;
    border-radius: 12px;
    padding: 25px 30px;
    max-width: 1500px;
    margin: 40px auto;
    text-align: left;
    box-shadow: 0 4px 12px rgba(139, 0, 0, 0.2);
    font-family: 'Noto Serif JP', serif;
    color: #4a2c2c;
}

.kyudo-explication h2 {
    color: #8B0000;
    font-size: 28px;
    margin-bottom: 20px;
    text-align: center;
    font-weight: bold;
}

.kyudo-explication p {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 16px;
}

/* Responsive simplifié */
@media (max-width: 1000px) {
    .locations-wrapper {
        flex-direction: column;
        gap: 40px;
        margin-top: 20px;
    }
    
    .locations-wrapper section {
        max-width: 100%;
        flex: 1 1 100%;
    }
}

</style>

<div class="content-histoire">
    <h1><?php the_title(); ?></h1>
    <div class="texte-histoire">
        <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
                the_content(); 
            endwhile; 
        endif; 
        ?>
    </div>
</div>

<!-- Animation JS -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const items = document.querySelectorAll('.timeline-item');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.2
    });

    items.forEach(item => observer.observe(item));
});
</script>

<?php get_footer(); ?>
