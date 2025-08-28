
<?php

// >>>>>>>>>>>>>>>>>>>>> Added Excerpt to Default WP Post
function add_excerpt_to_default_post() {
    add_post_type_support('post', 'excerpt');
}
add_action('init', 'add_excerpt_to_default_post');


// >>>>>>>>>>>>>>>>>>>>> Embed the SVG type media in the backend
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// >>>>>>>>>>>>>>>>>>>>> Register Menus
function aevier_register_menus() {
    register_nav_menu('primary', 'Primary Menu');
}
add_action('after_setup_theme', 'aevier_register_menus');


// >>>>>>>>>>>>>>>>>>>>> Enable support for featured images
add_theme_support('post-thumbnails');


// >>>>>>>>>>>>>>>>> Register Collections Custom Post Type
function register_collections_custom_post_type() {
    $labels = [
        'name'                  => 'Collections',
        'singular_name'         => 'Collection',
        'menu_name'             => 'Collections',
        'name_admin_bar'        => 'Collection',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Collection',
        'new_item'              => 'New Collection',
        'edit_item'             => 'Edit Collection',
        'view_item'             => 'View Collection',
        'all_items'             => 'All Collections',
        'search_items'          => 'Search Collections',
        'not_found'             => 'No Collections found!',
        'not_found_in_trash'    => 'No Collections found in Trash.',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        // 'has_archive'        => 'all-collections', // ✅ Archive uses a non-conflicting slug
        'rewrite'            => ['slug' => 'collections'], // ✅ Single post URL is /case-studies/post-name
        'show_in_rest'       => true,
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-store',
        // 'taxonomies'      => ['category'], // Uncomment if needed
    ];
    register_post_type('collections', $args);
}
add_action('init', 'register_collections_custom_post_type');





// >>>>>>>>>>>>>>>>>>> Showing All Post Types
// add_action('init', function () {
//     $post_types = get_post_types([], 'objects');
//     echo '<pre>';
//     print_r(array_keys($post_types));
//     echo '</pre>';
//     exit;
// });


?>
