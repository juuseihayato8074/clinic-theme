<?php get_header(); ?>

<main class="main">
    <div class="page-hero">
        <div class="page-hero__inner">
            <h1 class="page-hero__title">医師・スタッフ紹介</h1>
        </div>
    </div>

    <div class="page-content">
        <div class="page-content__inner">
            <div class="staff__list">
                <?php
                $staffs = new WP_Query([
                    'post_type'      => 'staff',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'ASC',
                ]);
                if ($staffs->have_posts()) : while ($staffs->have_posts()) : $staffs->the_post(); ?>
                    <article class="staff__item">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <div style="width:100%;height:200px;background:var(--color-bg);"></div>
                            <?php endif; ?>
                            <div class="staff__item-body">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words(get_the_content(), 10, '…'); ?></p>
                            </div>
                        </a>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
                endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>