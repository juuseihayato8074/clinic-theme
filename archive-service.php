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
                                <?php
                                $title = get_the_title();
                                if (strpos($title, '骨折') !== false) {
                                    $icon = 'fa-solid fa-bone';
                                } elseif (strpos($title, '捻挫') !== false || strpos($title, '打撲') !== false) {
                                    $icon = 'fa-solid fa-person-falling';
                                } elseif (strpos($title, 'リハビリ') !== false) {
                                    $icon = 'fa-solid fa-person-walking';
                                } else {
                                    $icon = 'fa-solid fa-stethoscope';
                                }
                                ?>
                                <div class="service__icon">
                                    <i class="<?php echo $icon; ?>"></i>
                                </div>
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </article>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>