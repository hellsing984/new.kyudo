<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<main>
    <section class="contact-section">
        <h2>Contactez-nous</h2>
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" class="contact-form">
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" placeholder="Entrez votre nom" required>
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
            </div>

            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="4" placeholder="Écrivez votre message ici..." required></textarea>
            </div>

            <div class="form-group terms">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">J’accepte les conditions générales</label>
            </div>

            <button type="submit" class="btn">Envoyer</button>
        </form>
    </section>
</main>

<?php get_footer(); ?>
