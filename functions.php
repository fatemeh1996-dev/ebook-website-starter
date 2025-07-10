<?php
function enqueue_theme_styles()
{
  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap', array(), null);

  // Font Awesome
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), filemtime(get_template_directory() . '/assets/css/font-awesome.css'));

  // Bootstrap
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), filemtime(get_template_directory() . '/assets/css/bootstrap.css'));

  // Main compiled Sass styles
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime(get_template_directory() . '/assets/css/main.css'));

  // WordPress default style.css (for theme metadata)
  wp_enqueue_style('theme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_theme_styles');


// function theme_assets()
// {
//     wp_enqueue_style('main-style', get_stylesheet_uri()); // Loads style.css
//     wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/styles.css');
// }
// add_action('wp_enqueue_scripts', 'theme_assets');

function ebook_header_menu()
{
  register_nav_menu('header-menu', __('هدر بالایی'));

}
add_action('init', 'ebook_header_menu');
// add_filter('','');
// add_action( 'after_setup_theme', 'register_primary_menu' );

// function register_primary_menu() {
// 	register_nav_menu( 'primary', __( 'Primary Menu', 'theme-text-domain' ) );
// }

function enqueue_bootstrap_local()
{
  // Bootstrap CSS
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

  // Theme main CSS
  wp_enqueue_style('theme-style', get_stylesheet_uri());

  // Bootstrap JS (with Popper.js included)
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_bootstrap_local');

function dynamicTitle()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'dynamicTitle');





class Bootstrap_Navwalker extends Walker_Nav_Menu
{

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $indent = str_repeat("\t", $depth);
    $classes = array('dropdown-menu');
    if ($depth >= 1) {
      $classes[] = 'dropdown-submenu'; // Apply special class for submenus
    }
    $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
    $output .= "\n$indent<ul class=\"" . esc_attr($class_names) . "\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $classes[] = 'nav-item';
    if ($args->walker->has_children) {
      $classes[] = 'dropdown';
      if ($depth >= 1) {
        $classes[] = 'dropdown-submenu';
      }
    }

    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $output .= $indent . '<li class="' . esc_attr($class_names) . '">';

    $atts = array();
    $atts['title'] = !empty($item->title) ? $item->title : '';
    $atts['target'] = !empty($item->target) ? $item->target : '';
    $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
    $atts['href'] = !empty($item->url) ? $item->url : '';

    if ($args->walker->has_children) {
      $atts['class'] = 'nav-link dropdown-toggle';
      $atts['data-bs-toggle'] = 'dropdown';
      $atts['aria-expanded'] = 'false';
    } else {
      $atts['class'] = 'nav-link';
    }

    $attributes = '';
    foreach ($atts as $attr => $value) {
      if (!empty($value)) {
        $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
      }
    }

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}


function ebookRegisterWidget() {
  register_sidebar(array(
    'name' => __('فوتر کیت کالا 1', 'ebook'),
    'id' => 'footer-1',
    'description' => __('ابزارک‌های ستون اول فوتر را اینجا اضافه کنید.', 'ebook'),
    'before_widget' => '<div id="%1$s" class="widget %2$s mb-3">',
    'after_widget' => '</div>',
  ));

  register_sidebar(array(
    'name' => __('فوتر کیت کالا 2', 'ebook'),
    'id' => 'footer-2',
    'description' => __('ابزارک‌های ستون دوم فوتر را اینجا اضافه کنید.', 'ebook'),
    'before_widget' => '<div id="%1$s" class="widget %2$s mb-3">',
    'after_widget' => '</div>',
  ));

  register_sidebar(array(
    'name' => __('فوتر کیت کالا 3', 'ebook'),
    'id' => 'footer-3',
    'description' => __('ابزارک‌های ستون سوم فوتر را اینجا اضافه کنید.', 'ebook'),
    'before_widget' => '<div id="%1$s" class="widget %2$s mb-3">',
    'after_widget' => '</div>',
  ));

  register_sidebar(array(
    'name' => __('سایدبار کیت کالا', 'ebook'),
    'id' => 'sidebar_widget',
    'description' => __('ابزارک‌های سایدبار قالب.', 'ebook'),
    'before_widget' => '',
    'after_widget' => '',
  ));
}
add_action('widgets_init', 'ebookRegisterWidget');

function create_testimonial_post_type()
{
  register_post_type(
    'testimonial',
    array(
      'labels' => array(
        'name' => __('Testimonials'),
        'singular_name' => __('Testimonial')
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'testimonials'),
      'supports' => array('title', 'editor', 'thumbnail'),
      'menu_icon' => 'dashicons-format-quote'
    )
  );
}
add_action('init', 'create_testimonial_post_type');

function ebook_customize_register($wp_customize)
{
  // سکشن آیکن‌ها
$wp_customize->add_section('ebook_icons_section', array(
    'title' => __('بخش آیکن‌ها', 'ebook'),
    'priority' => 40,
));

for ($i = 1; $i <= 3; $i++) {
    // آیکن FontAwesome
    $wp_customize->add_setting("ebook_icon_{$i}_icon", array(
        'default' => 'fas fa-user',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control("ebook_icon_{$i}_icon", array(
        'label' => __("آیکن {$i} (کلاس FontAwesome)", 'ebook'),
        'section' => 'ebook_icons_section',
        'type' => 'text',
    ));

    // رنگ آیکن
    $wp_customize->add_setting("ebook_icon_{$i}_color", array(
        'default' => 'text-primary',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control("ebook_icon_{$i}_color", array(
        'label' => __("رنگ آیکن {$i} (کلاس بوت‌استرپ)", 'ebook'),
        'section' => 'ebook_icons_section',
        'type' => 'text',
    ));

    // عنوان
    $wp_customize->add_setting("ebook_icon_{$i}_title", array(
        'default' => 'Unlock Your Blogging Potentional',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control("ebook_icon_{$i}_title", array(
        'label' => __("عنوان {$i}", 'ebook'),
        'section' => 'ebook_icons_section',
        'type' => 'text',
    ));

    // متن توضیحی
    $wp_customize->add_setting("ebook_icon_{$i}_text", array(
        'default' => 'Lorem ipsum dolor sit amet consectetur...',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control("ebook_icon_{$i}_text", array(
        'label' => __("متن توضیحی {$i}", 'ebook'),
        'section' => 'ebook_icons_section',
        'type' => 'textarea',
    ));
}
   // سکشن بخش جزئیات
    $wp_customize->add_section('ebook_details_section', array(
        'title' => __('بخش جزئیات', 'ebook'),
        'priority' => 50,
    ));

    // عنوان اصلی
    $wp_customize->add_setting('ebook_details_title', array(
        'default' => 'Unblock your Blogging Potentional',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('ebook_details_title', array(
        'label' => __('عنوان اصلی', 'ebook'),
        'section' => 'ebook_details_section',
        'type' => 'text',
    ));

    // متن پاراگراف
    $wp_customize->add_setting('ebook_details_paragraph', array(
        'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quis accusantium saepe cum a, rerum excepturi cupiditate ex optio. Asperiores.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('ebook_details_paragraph', array(
        'label' => __('متن پاراگراف', 'ebook'),
        'section' => 'ebook_details_section',
        'type' => 'textarea',
    ));

    // لیست (سه مورد)
    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("ebook_details_list_item_{$i}", array(
            'default' => 'Unleash your Creativity: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium expedita sunt sint, fugit sit dolor quos ipsa quis iusto unde.',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("ebook_details_list_item_{$i}", array(
            'label' => __("مورد لیست {$i}", 'ebook'),
            'section' => 'ebook_details_section',
            'type' => 'textarea',
        ));
    }

    // تصویر سمت راست
    $wp_customize->add_setting('ebook_details_image', array(
        'default' => get_template_directory_uri() . '/images/description.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ebook_details_image', array(
        'label' => __('تصویر بخش جزئیات', 'ebook'),
        'section' => 'ebook_details_section',
        'settings' => 'ebook_details_image',
    )));
      $wp_customize->add_section('ebook_modal_section', array(
        'title' => __('مدال دانلود', 'ebook'),
        'priority' => 60,
    ));

    // عنوان مدال
    $wp_customize->add_setting('ebook_modal_title', array(
        'default' => 'Unblock your Blogging Potentional',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('ebook_modal_title', array(
        'label' => __('عنوان مدال', 'ebook'),
        'section' => 'ebook_modal_section',
        'type' => 'text',
    ));

    // پاراگراف مدال
    $wp_customize->add_setting('ebook_modal_paragraph', array(
        'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quis accusantium saepe cum a, rerum excepturi cupiditate ex optio. Asperiores.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('ebook_modal_paragraph', array(
        'label' => __('متن مدال', 'ebook'),
        'section' => 'ebook_modal_section',
        'type' => 'textarea',
    ));

    // لیست آیتم‌ها (3 مورد)
    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("ebook_modal_list_item_{$i}", array(
            'default' => 'Unleash your Creativity: Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("ebook_modal_list_item_{$i}", array(
            'label' => __("آیتم لیست {$i} مدال", 'ebook'),
            'section' => 'ebook_modal_section',
            'type' => 'textarea',
        ));
    }

    // تصویر مدال
    $wp_customize->add_setting('ebook_modal_image', array(
        'default' => get_template_directory_uri() . '/images/description.png',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ebook_modal_image', array(
        'label' => __('تصویر مدال', 'ebook'),
        'section' => 'ebook_modal_section',
        'settings' => 'ebook_modal_image',
    )));
  // سکشن جزئیات
  $wp_customize->add_section('ebook_details_section', array(
    'title' => __('بخش جزئیات', 'ebook'),
    'priority' => 35,
  ));

  // عنوان اصلی
  $wp_customize->add_setting('ebook_details_title', array(
    'default' => 'Craft',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('ebook_details_title', array(
    'label' => __('عنوان اصلی', 'ebook'),
    'section' => 'ebook_details_section',
    'type' => 'text',
  ));

  // توضیحات
  $wp_customize->add_setting('ebook_details_description', array(
    'default' => 'لورم ایپسوم متن ساختگی...',
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('ebook_details_description', array(
    'label' => __('توضیحات', 'ebook'),
    'section' => 'ebook_details_section',
    'type' => 'textarea',
  ));

  // ویژگی‌ها (هر خط یک ویژگی)
  $wp_customize->add_setting('ebook_details_features', array(
    'default' => "ویژگی اول\nویژگی دوم\nویژگی سوم",
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('ebook_details_features', array(
    'label' => __('ویژگی‌ها (هر خط یک مورد)', 'ebook'),
    'section' => 'ebook_details_section',
    'type' => 'textarea',
  ));

  // تصویر
  $wp_customize->add_setting('ebook_details_image', array(
    'default' => get_template_directory_uri() . '/images/author.png',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ebook_details_image', array(
    'label' => __('تصویر بخش', 'ebook'),
    'section' => 'ebook_details_section',
    'settings' => 'ebook_details_image',
  )));

  // بخش جدید
  $wp_customize->add_section('ebook_modal_section', array(
    'title' => __('تنظیمات مودال دانلود', 'ebook'),
    'priority' => 30,
  ));

  // عنوان
  $wp_customize->add_setting('ebook_modal_title', array('default' => 'Unblock your Blogging Potentional'));
  $wp_customize->add_control('ebook_modal_title', array(
    'label' => __('عنوان اصلی', 'ebook'),
    'section' => 'ebook_modal_section',
    'type' => 'text',
  ));

  // متن
  $wp_customize->add_setting('ebook_modal_description', array('default' => 'لورم ایپسوم ...'));
  $wp_customize->add_control('ebook_modal_description', array(
    'label' => __('توضیح کوتاه', 'ebook'),
    'section' => 'ebook_modal_section',
    'type' => 'textarea',
  ));

  // دکمه دانلود
  $wp_customize->add_setting('ebook_modal_button_link', array('default' => '#'));
  $wp_customize->add_control('ebook_modal_button_link', array(
    'label' => __('لینک دکمه دانلود', 'ebook'),
    'section' => 'ebook_modal_section',
    'type' => 'url',
  ));
  // ویژگی‌های مودال (هر خط یک ویژگی)
  $wp_customize->add_setting('ebook_modal_features', array(
    'default' => "Unleash your Creativity\nBoost your Workflow\nGrow your Audience",
    'sanitize_callback' => 'sanitize_textarea_field',
  ));

  $wp_customize->add_control('ebook_modal_features', array(
    'label' => __('ویژگی‌ها (هر خط یک مورد)', 'ebook'),
    'section' => 'ebook_modal_section',
    'type' => 'textarea',
  ));
  // تصویر
  $wp_customize->add_setting('ebook_modal_image');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ebook_modal_image', array(
    'label' => __('تصویر نویسنده', 'ebook'),
    'section' => 'ebook_modal_section',
    'settings' => 'ebook_modal_image',
  )));

  // بخش فوتر
  $wp_customize->add_section('ebook_footer_section', array(
    'title' => __('تنظیمات فوتر', 'ebook'),
    'priority' => 120,
  ));

  // تنظیم متن کپی‌رایت
  $wp_customize->add_setting('footer_copyright_txt', array(
    'default' => 'استفاده از مطالب فروشگاه اینترنتی کیت کالا برای مقاصد غیرتجاری و با ذکر منبع بلامانع است.',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('footer_copyright_txt', array(
    'label' => __('متن کپی‌رایت فوتر', 'ebook'),
    'section' => 'ebook_footer_section',
    'type' => 'text',
  ));
// Social Icons Section
$wp_customize->add_section('ebook_social_section', array(
    'title' => __('شبکه‌های اجتماعی', 'ebook'),
    'priority' => 70,
));

$social_networks = array(
    'facebook' => 'Facebook',
    'instagram' => 'Instagram',
    'linkedin'  => 'LinkedIn',
    'whatsapp'  => 'WhatsApp',
);

foreach ($social_networks as $key => $label) {
    $wp_customize->add_setting("ebook_social_{$key}_url", array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control("ebook_social_{$key}_url", array(
        'label' => __("لینک {$label}", 'ebook'),
        'section' => 'ebook_social_section',
        'type' => 'url',
    ));
}
}
add_action('customize_register', 'ebook_customize_register');




// هندل کردن فرم دانلود
function handle_ebook_download_form() {
  if (isset($_POST['ebook_email']) && is_email($_POST['ebook_email'])) {
    $email = sanitize_email($_POST['ebook_email']);
    $subject = __('Your Free eBook Download Link', 'your-theme-textdomain');
    $message = __('Thank you for your interest! Click the link below to download your eBook:', 'your-theme-textdomain') . "\n\n";
    $message .= esc_url(home_url('/downloads/ebook.pdf')); // لینک فایل PDF

    wp_mail($email, $subject, $message);

    // Redirect to thank you or show confirmation (optional)
    wp_redirect(add_query_arg('downloaded', 'true', wp_get_referer()));
    exit;
  }
}
add_action('init', 'handle_ebook_download_form');







?>