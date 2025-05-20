<?php get_header(); ?>

<main>
    <section class="blog">
        <h1>Derniers Articles</h1>
        <div class="blog-container">
            <?php
                    $args = [
                        'numberposts' => 10,
                        'post_type'   => 'post',
                        'post_status' => 'publish',
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                    ];

                    $latest_posts = get_posts($args);

                    foreach ($latest_posts as $post) {
                        setup_postdata($post);
                        ?>
                        <article class="blog-item">
                <div class="blog-image-container">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Blog">
                </div>
                <div class="blog-content">
                    <h2 class="blog-post-title"><a href="#"><?php the_title(); ?></a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn">Lire plus</a>
                </div>
            </article>
                        <?php
                    }

                    wp_reset_postdata();
                    ?>

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



