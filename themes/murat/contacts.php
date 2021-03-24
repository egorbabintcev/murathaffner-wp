
       <?php
/*
Template Name: contacts
*/
?>

     <?php get_header() ?>
    <div class="header_main header_page factory_head">
               <div class="wrap">
                   <div class="wrap_float">
                       <h1 class="main_title">Контакты</h1>
                   </div>
               </div>
           </div>
       </header>
       
       <section class="contacts">
           <div class="wrap">
               <div class="wrap_float">
                   <div class="contacts_left">
                       <div class="y-map" id="y-map"></div>
                   </div>
                   <div class="contacts_right">
                       <h2 class="title">
                           <?php the_field('contacts_title'); ?>
                       </h2>
                       <div class="section_content">
                           <div class="contacts_item">
                               <p class="contacts_item_title">
                                   Телефон Россия:
                               </p>
                               <div class="contacts_item_val">
                                   <a href="#" class="js_num"><?php the_field('contacts_num'); ?></a>
                               </div>
                           </div>
                           <div class="contacts_item">
                               <p class="contacts_item_title">
                                   Почта для связи:
                               </p>
                               <div class="contacts_item_val">
                                   <a class="email" href="mailto:<?php the_field('contacts_email'); ?>"><?php the_field('contacts_email'); ?></a>
                               </div>
                           </div>
                           <div class="contacts_item">
                               <p class="contacts_item_title">
                                   График работы:
                               </p>
                               <p class="contacts_item_val">
                                   <?php the_field('contacts_worktime'); ?>
                               </p>
                           </div>
                           <div class="contacts_item">
                               <p class="contacts_item_title">
                                   Адрес:
                               </p>
                               <p class="contacts_item_val"  data-latitude="<?php the_field('c-latitude'); ?>" data-longitude="<?php the_field('c-longitude'); ?>" id="js-map-1" data-adress="<?php the_field('contacts_adress'); ?>">
                                   <?php the_field('contacts_adress'); ?>
                               </p>
                           </div>
                           <div class="contacts_item">
                               <p class="contacts_item_title">
                                   Реквизиты:
                               </p>
                               <p class="contacts_item_val">
                                   <?php the_field('contacts_req'); ?>
                               </p>
                           </div>
                       </div>
                       <button value="#callback" class="btn getModal">Заказать звонок</button>
                   </div>
               </div>
           </div>
       </section>
       
       <style>.footer{border-top: 0;}</style>
       <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/map_2.min.js"></script>
<?php get_footer() ?>