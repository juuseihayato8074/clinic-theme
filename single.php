<?php get_header(); ?>

<main class="main">
    <?php while (have_posts()) : the_post(); ?>

    <div class="page-hero">
        <div class="page-hero__inner">
            <h1 class="page-hero__title"><?php the_title(); ?></h1>
            <p class="page-hero__date"><?php echo get_the_date('Y.m.d'); ?></p>
        </div>
    </div>

    <div class="page-content">
        <div class="page-content__inner">
            <div class="single-post">
                <?php the_content(); ?>
                <div class="single-post__back">
                <a href="javascript:history.back()" class="back-btn">← 戻る</a>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>