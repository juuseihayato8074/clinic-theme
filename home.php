<?php get_header(); ?>

<main class="main">
    <div class="page-hero">
        <div class="page-hero__inner">
            <h1 class="page-hero__title">お知らせ</h1>
        </div>
    </div>

    <div class="page-content">
        <div class="page-content__inner">
            <ul class="news__list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li class="news__item">
                        <a href="<?php the_permalink(); ?>">
                            <time><?php echo get_the_date('Y.m.d'); ?></time>
                            <span><?php the_title(); ?></span>
                        </a>
                    </li>
                <?php endwhile; endif; ?>
            </ul>
            <?php the_posts_pagination(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>