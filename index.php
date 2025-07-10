<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo("charset"); ?>" />


  <link rel="icon" href="<?php bloginfo("template_url"); ?>/images/favicon.png" />
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <!-- Navigation -->
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'header-menu', // Make sure this matches what you registered
          'container' => false,
          'menu_class' => 'navbar-nav ms-auto',
          'fallback_cb' => '__return_false',
          'depth' => 4, // Allow dropdowns
          'walker' => new Bootstrap_Navwalker(), // Add custom walker for Bootstrap
        ));
        ?>
      </div>
    </div>
  </nav>



  <!-- header -->
  <?php get_header(); ?>
  <section class="icons bg-light pb-5">
    <div class="container-xl">
      <div class="row hstack g-4">
        <?php for ($i = 1; $i <= 3; $i++): ?>
          <div class="col-md-4 d-flex gap-4">
            <i
              class="<?php echo esc_attr(get_theme_mod("ebook_icon_{$i}_icon", 'fas fa-user')); ?> fa-3x <?php echo esc_attr(get_theme_mod("ebook_icon_{$i}_color", 'text-primary')); ?>"></i>
            <div>
              <h5 class="fw-bold">
                <?php echo esc_html(get_theme_mod("ebook_icon_{$i}_title", 'Unlock Your Blogging Potentional')); ?>
              </h5>
              <p class="text-muted">
                <?php echo esc_html(get_theme_mod("ebook_icon_{$i}_text", 'Lorem ipsum dolor sit amet...')); ?>
              </p>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!-- details -->
  <section id="details" class="details my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="text-container d-flex flex-column justify-content-center h-100">
            <h2 class="display-6">
              <?php echo esc_html(get_theme_mod('ebook_details_title', 'Unblock your Blogging Potentional')); ?>
            </h2>
            <p>
              <?php echo esc_html(get_theme_mod('ebook_details_paragraph', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quis accusantium saepe cum a, rerum excepturi cupiditate ex optio. Asperiores.')); ?>
            </p>
            <ul class="list-group list-group-flush lh-lg">
              <?php
              for ($i = 1; $i <= 3; $i++) {
                $list_item = get_theme_mod("ebook_details_list_item_{$i}", 'Unleash your Creativity: Lorem ipsum dolor sit amet consectetur...');
                echo '<li class="list-group-item"><i class="fas fa-square text-primary"></i> ' . wp_kses_post($list_item) . '</li>';
              }
              ?>
            </ul>
            <a href="" class="btn btn-primary text-white mt-4 align-self-start" data-bs-toggle="modal"
              data-bs-target="#modal1">Get your Copy Now</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="image-container p-5">
            <img
              src="<?php echo esc_url(get_theme_mod('ebook_details_image', get_template_directory_uri() . '/images/description.png')); ?>"
              class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- modal1 -->
  <div id="modal1" class="modal fade">
    <div class="modal-dialog modal-lg mt-7">
      <div class="modal-content p-5">
        <div class="row">
          <div class="col-lg-6">
            <div class="image-container">
              <img
                src="<?php echo esc_url(get_theme_mod('ebook_modal_image', get_template_directory_uri() . '/images/description.png')); ?>"
                alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="text-container">
              <h2 class="display-6">
                <?php echo esc_html(get_theme_mod('ebook_modal_title', 'Unblock your Blogging Potentional')); ?>
              </h2>
              <p>
                <?php echo esc_html(get_theme_mod('ebook_modal_paragraph', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quis accusantium saepe cum a, rerum excepturi cupiditate ex optio. Asperiores.')); ?>
              </p>
              <ul class="list-group list-group-flush lh-lg">
                <?php
                for ($i = 1; $i <= 3; $i++) {
                  $item = get_theme_mod("ebook_modal_list_item_{$i}", 'Unleash your Creativity: Lorem ipsum dolor sit amet consectetur, adipisicing elit.');
                  echo '<li class="list-group-item"><i class="fas fa-square text-primary"></i> <strong>' . wp_kses_post($item) . '</strong></li>';
                }
                ?>
              </ul>
              <a href="" class="btn btn-primary text-white">Free Download</a>
              <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- statement -->
  <section class="statement mb-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-container bg-light p-5 rounded-5">
            <h2>Mastering art blog</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum enim est quia, earum consectetur
              iusto ut qui, aperiam quos minus magni. Ducimus tempora mollitia nesciunt?Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Ab ipsa repellat blanditiis quae eum culpa?</p>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- details -->
  <section class="details my-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="image-container p-5">
            <img src="<?php echo esc_url(get_theme_mod('ebook_details_image')); ?>" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="text-container d-flex flex-column justify-content-center h-100">
            <h2 class="display-6"><?php echo esc_html(get_theme_mod('ebook_details_title', 'Craft')); ?></h2>
            <p><?php echo esc_html(get_theme_mod('ebook_details_description')); ?></p>

            <ul class="list-group list-group-flush lh-lg">
              <?php
              $features = explode("\n", get_theme_mod('ebook_details_features'));
              foreach ($features as $feature):
                $feature = trim($feature);
                if (!empty($feature)):
                  ?>
                  <li class="list-group-item">
                    <i class="fas fa-square text-primary"></i>
                    <strong><?php echo esc_html($feature); ?></strong>
                  </li>
                <?php endif; endforeach; ?>
            </ul>

            <a href="#" class="btn btn-primary text-white mt-4 align-self-start" data-bs-toggle="modal"
              data-bs-target="#modal2">learn more</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- modal1 -->
  <div id="modal2" class="modal fade">
    <div class="modal-dialog modal-lg mt-7">
      <div class="modal-content p-5">
        <div class="row">
          <div class="col-lg-6">
            <div class="image-container">
              <img src="<?php echo esc_url(get_theme_mod('ebook_modal_image')); ?>" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="text-container">
              <h2 class="display-6">
                <?php echo esc_html(get_theme_mod('ebook_modal_title', 'Unblock your Blogging Potentional')); ?>
              </h2>
              <p><?php echo esc_html(get_theme_mod('ebook_modal_description')); ?></p>
              <ul class="list-group list-group-flush lh-lg">
                <?php
                $features = explode("\n", get_theme_mod('ebook_modal_features', ''));
                foreach ($features as $feature):
                  $feature = trim($feature);
                  if (!empty($feature)):
                    ?>
                    <li class="list-group-item">
                      <i class="fas fa-square text-primary"></i>
                      <strong><?php echo esc_html($feature); ?></strong>
                    </li>
                  <?php endif; endforeach; ?>
              </ul>

              <a href="<?php echo esc_url(get_theme_mod('ebook_modal_button_link', '#')); ?>"
                class="btn btn-primary text-white">Free Download</a>
              <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- testimonials -->
  <section class="testimonials mb-8">
    <div class="container">
      <div class="row">
        <?php
        $args = array(
          'post_type' => 'testimonial',
          'posts_per_page' => 3 // تعداد دلخواه
        );
        $query = new WP_Query($args);
        if ($query->have_posts()):
          while ($query->have_posts()):
            $query->the_post();
            ?>
            <div class="col-md-4 text-center">
              <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="rounded-circle mb-3"
                  alt="<?php the_title(); ?>">
              <?php endif; ?>
              <p class="lead fst-italic"><?php the_content(); ?></p>
              <p class="fw-bold"><?php the_title(); ?></p>
            </div>
            <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
  </section>



  <div class="download">
    <div class="container">
      <div class="row">

        <!-- Image Column -->
        <div class="col-lg-5">
          <div class="image-container mt-n6 mb-5">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/download-ebook.png"
              alt="<?php esc_attr_e('Download eBook', 'your-theme-textdomain'); ?>" class="img-fluid">
          </div>
        </div>

        <!-- Text + Form Column -->
        <div class="col-lg-7">
          <div class="text-container text-black d-flex flex-column justify-content-center h-100 mb-5">

            <h2 class="fw-bold"><?php esc_html_e('Get your Free eBook', 'your-theme-textdomain'); ?></h2>

            <p><?php esc_html_e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias doloremque nemo ad nesciunt, vitae
              accusamus expedita odio? Asperiores ullam iure placeat repudiandae, sit, quas accusamus atque amet
              expedita, nobis vero?', 'your-theme-textdomain'); ?></p>

            <!-- Basic non-functional form -->
            <form method="post" action="<?php echo esc_url(home_url('/')); ?>">
              <div class="input-group mb-3">
                <input type="email" name="ebook_email" class="form-control"
                  placeholder="<?php esc_attr_e('Email Address', 'your-theme-textdomain'); ?>" required>
                <button type="submit"
                  class="btn btn-primary text-white rounded-end"><?php esc_html_e('Download', 'your-theme-textdomain'); ?></button>
              </div>
            </form>
            <?php if (isset($_GET['downloaded']) && $_GET['downloaded'] === 'true'): ?>
              <div class="alert alert-success mt-3">
                <?php esc_html_e('The download link has been sent to your email!', 'your-theme-textdomain'); ?>
              </div>
            <?php endif; ?>


          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- social -->
  <section class="social text-bg-dark py-6 overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3 text-center fs-4">
          <p>
            <?php echo esc_html(get_theme_mod('ebook_details_paragraph', 'لورم ایپسوم ...')); ?>
          </p>
          <div class="social-icons d-flex justify-content-center gap-4 text-white">
            <?php
            $socials = [
              'facebook' => 'fab fa-facebook',
              'instagram' => 'fab fa-instagram',
              'linkedin' => 'fab fa-linkedin',
              'whatsapp' => 'fab fa-whatsapp',
            ];
            foreach ($socials as $key => $icon_class):
              $url = get_theme_mod("ebook_social_{$key}_url", '#');
              if ($url && $url !== '#'):
                ?>
                <a href="<?php echo esc_url($url); ?>" target="_blank" aria-label="<?php echo esc_attr(ucfirst($key)); ?>">
                  <i class="<?php echo esc_attr($icon_class); ?> fa-2x"></i>
                </a>
                <?php
              endif;
            endforeach;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>

  <script src="<?php bloginfo("template_url"); ?>/js/bootstrap.bundle.min.js"></script>
  <script src="<?php bloginfo("template_url"); ?>/js/script.js"></script>
</body>

</html>