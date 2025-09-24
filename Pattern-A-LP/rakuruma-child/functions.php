<?php
// 親→子→追加CSS（rk.css）の順で読み込み
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css', [], null);
  wp_enqueue_style('child-style',  get_stylesheet_directory_uri() . '/style.css', ['parent-style'], null);
  wp_enqueue_style('rk-style',     get_stylesheet_directory_uri() . '/assets/css/rk.css', ['child-style'], null);
});

// ご利用の流れ [rk_flow]
add_shortcode('rk_flow', function () {
  ob_start();
  get_template_part('template-parts/sections/flow');
  return ob_get_clean();
});

// 料金 [rk_price]
add_shortcode('rk_price', function () {
  ob_start();
  get_template_part('template-parts/sections/price');
  return ob_get_clean();
});

