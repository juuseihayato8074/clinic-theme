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
            <div class="staff-detail">
                <div class="staff-detail__head">
                    <div class="staff-detail__thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="staff-detail__info">
                        <h2 class="staff-detail__name"><?php the_title(); ?></h2>
                        <div class="staff-detail__body">
                            <?php the_content(); ?>
                        </div>
                        <a href="<?php echo esc_url(home_url('/#staff')); ?>" class="back-btn">← スタッフ一覧へ戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>