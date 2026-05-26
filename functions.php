<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function clinic_scripts() {
    wp_enqueue_style('main_style', get_template_directory_uri() . '/assets/css/main.css', [], '1.0');
    wp_enqueue_script('main_script', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'clinic_scripts');

register_nav_menus([
    'primary' => 'グローバルナビ',
    'footer' => 'フッターナビ',
]);

function clinic_register_post_types() {
    register_post_type('service', [
        'labels' => [
            'name'          => '診療内容',
            'singular_name' => '診療内容',
            'add_new_item'  => '診療内容を追加',
        ],
        'public'       => true,
        'has_archive'  => true,
        'show_in_rest' => true,
        'supports'     => ['title', 'editor', 'thumbnail'],
        'menu_icon'    => 'dashicons-heart'
    ]);

    register_post_type('staff', [
        'labels' => [
            'name'          => 'スタッフ',
            'singular_name' => 'スタッフ',
            'add_new_item'  => 'スタッフを追加',
        ],
        'public'       => true,
        'has_archive'  => true,
        'show_in_rest' => true,
        'supports'     => ['title', 'editor', 'thumbnail'],
        'menu_icon'    => 'dashicons-groups'
    ]);
}
add_action('init', 'clinic_register_post_types');