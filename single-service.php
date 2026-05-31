<?php get_header(); ?>

<main class="main">
    <?php while (have_posts()) : the_post(); ?>

    <div class="page-hero">
        <div class="page-hero__inner">
            <h1 class="page-hero__title"><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="page-content">
        <div class="page-content__inner">
            <div class="service-detail">
                <div class="service-detail__main">
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="service-detail__thumb">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <?php endif; ?>
                    <div class="service-detail__body">
                        <?php the_content(); ?>
                    </div>
                </div>
                    <div class="service-detail__back">
                    <a href="javascript:history.back()" class="back-btn">← 戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>