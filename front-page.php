<?php get_header(); ?>

<main class="main">
    <section class="hero">
        <video class="hero__video" autoplay muted loop playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.mp4" type="video/mp4">
        </video>
        <div class="hero__overlay"></div>
        <div class="hero__inner">
            <h1 class="hero__title">あなたの健康を、<br>全力でサポートします。</h1>
            <p class="hero__text">あおば整形外科クリニックは整形外科・リハビリを専門とする<br>地域密着型のクリニックです。</p>
            <a href="#contact" class="hero__btn">お問い合わせ</a>
        </div>
    </section>
    <section class="service">
        <div class="service__inner">
            <h2 class="section__title service__title">診療内容</h2>
            <p class="section__subtitle">MEDICAL</p>
            <div class="service__list">
                <?php
                $services = new WP_Query([
                    'post_type'      => 'service',
                    'posts_per_page' => 6,
                ]);
                if ($services->have_posts()) :
                    while ($services->have_posts()) : $services->the_post(); ?>
                        <article class="service__item">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                            </a>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>
    <section class="staff">
        <div class="staff__inner">
            <h2 class="staff__title">医師・スタッフ紹介</h2>
            <div class="staff__list">
            <?php
                $staffs = new WP_Query([
                    'post_type'      => 'staff',
                    'posts_per_page' => 4,
                ]);
                if ($staffs->have_posts()) :
                    while ($staffs->have_posts()) : $staffs->the_post(); ?>
                        <article class="staff__item">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="news__inner">
            <h2 class="news__title">お知らせ</h2>
            <ul class="news__list">
            <?php
                $news = new WP_Query([
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                ]);
                if ($news->have_posts()) :
                    while ($news->have_posts()) : $news->the_post(); ?>
                        <li class="news__item">
                            <a href="<?php the_permalink(); ?>">
                               <time><?php the_date('Y.m.d'); ?></time>
                                <span><?php the_title(); ?></span>
                            </a>
                        </li>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>