<?php get_header(); ?>

<main>
    <section class="blog">
        <h1>Derniers Articles</h1>
        <div class="blog-container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="blog-item">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image de l'article" class="blog-image">
                    <div class="blog-content">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn">Lire plus</a>
                    </div>
                </article>
            <?php endwhile; else : ?>
                <p>Aucun article disponible.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
