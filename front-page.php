<?php get_header(); ?> <!-- Inclusion du header du site -->

<main>
    <!-- Section principale avec un fond visuel -->
    <section class="hero">
        <h2>Association Languedocienne de Kyudo</h2>
        <p>Explore la puissance et la discipline d'une époque révolue.</p>
        <a href="#about" class="btn">En savoir plus</a> <!-- Bouton pour naviguer vers la section À propos -->
    </section>
    
    <!-- Section Événements & Stages -->
    <section class="events">
        <h2>Personnelle</h2>
        <p>Retrouve ici les prochains rendez-vous du Kyudo.</p>
        </section>

  <!-- section de la pyramide -->
 <section class="cards-container">
    <!-- Sommet avec Sophie seule -->
    <div class="row level3">
        <div class="card">
            <div class="card-inner">
                <div class="card-front"><p>Romain Ferreres</p></div>
                <div class="card-back"><p>Archery Enthusiast</p></div>
            </div>
        </div>
    </div>

    <!-- 2 cartes au deuxième niveau -->
    <div class="row level2">
        <div class="card">
            <div class="card-inner">
                <div class="card-front"><p>Marie Dubois</p></div>
                <div class="card-back"><p>Archery Specialist</p></div> 
            </div>
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="card-front"><p>Lucas Martin</p></div>
                <div class="card-back"><p>Kyudo Enthusiast</p></div> 
            </div>
        </div>
    </div>

    <!-- 3 cartes à la base -->
    <div class="row level1">
        <div class="card">
            <div class="card-inner">
                <div class="card-front"><p>Jean Dupont</p></div>
                <div class="card-back"><p>Kyudo Expert</p></div>
            </div>
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="card-front"><p>Emma Leroy</p></div>
                <div class="card-back"><p>Bow Master</p></div>
            </div>
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="card-front"><p>Paul Gauthier</p></div>
                <div class="card-back"><p>Kyudo Trainer</p></div>
            </div>
        </div>
    </div>
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
