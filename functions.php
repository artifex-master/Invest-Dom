<?php 
  function astana_invest_scripts_and_styles() {
    wp_enqueue_style('astana_invest_styles', get_theme_file_uri('/assets/css/style.css'));
    wp_enqueue_style('astana_invest_slick_css', get_theme_file_uri('/assets/css/slick.css'));
    wp_enqueue_style('astana_invest_slick_theme_css', get_theme_file_uri('/assets/css/slick-theme.css'));
    wp_enqueue_style('astana_invest_jquery_tab', get_theme_file_uri('/assets/css/jQueryTab.css'));
    wp_enqueue_style('astana_invest_jquery_tab_animation', get_theme_file_uri('/assets/css/animation.css'));
    wp_enqueue_style('astana_invest_google_fonts', 'https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap', false);
    wp_enqueue_script('astana_invest_jquery_min_js', get_theme_file_uri('/assets/js/jquery-3.6.4.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('astana_invest_slick_min_js', get_theme_file_uri('/assets/js/slick.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('astana_invest_slick_js', get_theme_file_uri('/assets/js/slick.js'), array('jquery'), '1.0',true);
    wp_enqueue_script('astana_invest_jquerytab_js', get_theme_file_uri('/assets/js/jQueryTab.js'), array('jquery'), '1.0',true);
    wp_enqueue_script('astana_invest_script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('astana_invest_custom_script', get_theme_file_uri('/assets/js/custom-script.js'), array('jquery'), '1.0', true);
  }

  add_action('wp_enqueue_scripts', 'astana_invest_scripts_and_styles');


