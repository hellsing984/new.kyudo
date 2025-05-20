<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<main>
    <section class="contact-section">
        <h2>Contacte-nous</h2>
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" class="contact-form">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit" class="btn">Envoyer</button>
        </form>
    </section>
</main>

<?php get_footer(); ?>
