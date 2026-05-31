<?php get_header(); ?>

<main class="main">
    <div class="page-hero">
        <div class="page-hero__inner">
            <h1 class="page-hero__title">医師・スタッフ紹介</h1>
        </div>
    </div>

    <div class="page-content">
        <div class="page-content__inner">
            <?php
            $staffs = new WP_Query([
                'post_type'      => 'staff',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'ASC',
            ]);
            if ($staffs->have_posts()) : while ($staffs->have_posts()) : $staffs->the_post(); ?>
                <div class="staff-profile">
                    <div class="staff-profile__thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                            <div class="staff-profile__no-image"></div>
                        <?php endif; ?>
                    </div>
                    <div class="staff-profile__info">
                        <h2 class="staff-profile__name"><?php the_title(); ?></h2>
                        <?php
                        $content = get_the_content();
                        $lines = explode("\n", strip_tags($content));
                        $lines = array_filter(array_map('trim', $lines));
                        $lines = array_values($lines);
                        $role = isset($lines[0]) ? $lines[0] : '';
                        $body_lines = array_slice($lines, 1);
                        $body = implode('<br>', $body_lines);
                        ?>
                        <p class="staff-profile__role"><?php echo esc_html($role); ?></p>
                        <div class="staff-profile__body"><?php echo $body; ?></div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>