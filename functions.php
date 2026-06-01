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

// 絵文字スクリプトを無効化
function clinic_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
}
add_action('init', 'clinic_disable_emojis');

// RSSフィードを無効化
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

// WordPressバージョン情報を非表示
remove_action('wp_head', 'wp_generator');

// 不要なヘッダー情報を削除
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

// WebPのアップロードを許可
function clinic_allow_webp($mimes) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('upload_mimes', 'clinic_allow_webp');

// Font Awesomeの読み込み
function clinic_enqueue_fontawesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', [], null);
}
add_action('wp_enqueue_scripts', 'clinic_enqueue_fontawesome');

// メタディスクリプション
function clinic_meta_description() {
    if (is_front_page()) {
        $description = 'あおば整形外科クリニックは整形外科・リハビリを専門とする地域密着型のクリニックです。骨折・脱臼・捻挫・打撲・リハビリテーションに対応しています。';
    } elseif (is_singular()) {
        $description = get_the_excerpt();
    } else {
        $description = 'あおば整形外科クリニックは整形外科・リハビリを専門とする地域密着型のクリニックです。';
    }
    echo '<meta name="description" content="' . esc_attr(strip_tags($description)) . '">' . "\n";
}
add_action('wp_head', 'clinic_meta_description');