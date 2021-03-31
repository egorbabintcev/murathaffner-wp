<?php
/*
Template Name: quiz
*/
?>

<?php get_header(); ?>
<div class="header_main">
  <div class="wrap">
    <div class="wrap_float">
      <div class="header_main_left">
        <h1 class="header_title">
          <?php the_field('header_title', 'option'); ?>
        </h1>
        <div class="header_catalog">
          <p class="header_catalog_p">Скачайте каталог и получите индивидуальное предложение</p>
          <button value="#catalog" class="header_catalog_btn getModal">Скачать каталог оборудования</button>
        </div>
        <ul class="header_ul">
          <?php if ($header_ul = get_field('header_ul', 'option')) : ?>
            <?php foreach ($header_ul as $el) : ?>
              <li><?= $el['header_li']; ?></li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>
      <div class="header_main_right">
        <img src="<?php echo get_template_directory_uri(); ?>/img/header_img.png" alt="">
      </div>
    </div>
  </div>
</div>
</header>

<section class="quiz">
  <div class="wrap">
    <div class="wrap_float">
      <iframe src="<?php echo get_stylesheet_directory_uri(); ?>/quiz" frameborder="0"></iframe>
    </div>
  </div>
</section>

<style>
  .footer {
    border-top: 0;
  }
</style>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/map_2.min.js"></script>
<?php get_footer() ?>
