<?php get_header(); ?>

<main class="main">
    <div class="page-hero">
        <div class="page-hero__inner">
            <h1 class="page-hero__title">診療内容</h1>
        </div>
    </div>

    <div class="page-content">
        <div class="page-content__inner">
            <div class="service__list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="service__item">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_content(), 20, '…'); ?></p>
                        </a>
                    </article>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>