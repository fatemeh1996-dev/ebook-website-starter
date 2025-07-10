<?php
/**
 * قالب فوتر - footer.php
 */
?>

<footer class="border-top border-primary bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <!-- ابزارک‌های فوتر -->
      <div class="col-md-8 d-flex flex-wrap justify-content-between">
        <?php if (is_active_sidebar('footer-1')) : ?>
          <div class="footer-column me-4">
            <?php dynamic_sidebar('footer-1'); ?>
          </div>
        <?php endif; ?>

        <?php if (is_active_sidebar('footer-2')) : ?>
          <div class="footer-column me-4">
            <?php dynamic_sidebar('footer-2'); ?>
          </div>
        <?php endif; ?>

        <?php if (is_active_sidebar('footer-3')) : ?>
          <div class="footer-column">
            <?php dynamic_sidebar('footer-3'); ?>
          </div>
        <?php endif; ?>
      </div>

      <!-- متن کپی‌رایت -->
      <div class="col-md-4 mt-3 mt-md-0">
        <p class="text-end mb-0 small">
          <?php
          echo get_theme_mod('footer_copyright_txt') ? get_theme_mod('footer_copyright_txt') : 'استفاده از مطالب فروشگاه اینترنتی کیت کالا برای مقاصد غیرتجاری و با ذکر منبع بلامانع است.';
          ?>
        </p>
      </div>
    </div>
  </div>


</footer>

<?php wp_footer(); ?>
</body>
</html>
