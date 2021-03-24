
       <?php
/*
Template Name: factory
*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1300">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">
       <header class="header">
           <div class="header_top">
               <div class="wrap">
                   <div class="wrap_float">
                        <div class="header_top_left">
                            <a href="<?php echo get_home_url(); ?>" class="logo"></a>
                            <p class="text">
                                <?php the_field('logo_text', 'option'); ?>
                            </p>
                        </div>
                        <div class="header_top_right">
                            <div class="callback_left"></div>
                            <div class="callback_right">
                                <a href="" class="a_num js_num"><?php the_field('header_tel', 'option'); ?></a>
                                <a href="#callback" class="a_modal getModal">Заказать звонок</a>
                            </div>
                        </div>
                        <ul class="header_menu">
                            <li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
                            <li class="dropdown_li">
                                <a href="<?php echo get_home_url(); ?>/catalog/">Каталог оборудования</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo get_home_url(); ?>/catalog/pvh/">ПВХ</a></li>
                                    <li><a href="<?php echo get_home_url(); ?>/catalog/alyuminij/">Алюминий</a></li>
                                    <li><a href="<?php echo get_home_url(); ?>/catalog/steklopakety/">Стеклопакеты</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo get_home_url(); ?>/proizvodstvo/">Производство</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/dostavka-i-oplata/">Доставка и оплата</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/garantiya-i-servis/">Гарантии и сервис</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/contacts/">Контакты</a></li>
                        </ul>
                   </div>
               </div>
           </div>
    <div class="header_main header_page factory_head">
               <div class="wrap">
                   <div class="wrap_float">
                       <h1 class="main_title">Производство</h1>
                   </div>
               </div>
           </div>
       </header>
       
       <section class="company">
           <div class="wrap">
               <div class="wrap_float">
                   <div class="company_left">
                       <img src="<?php the_field('factory_img'); ?>" alt="">
                   </div>
                   <div class="company_right">
                       <h2 class="title">
                           <?php the_field('factory_title'); ?>
                       </h2>
                       <div class="wp_content">
                           <?php the_field('factory_content'); ?>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       
       <section class="storage photos">
           <div class="wrap">
               <div class="wrap_float">
                   <h2 class="title">
                       <?php the_field('infrastructure_title'); ?>
                   </h2>
                   <?php if( get_field("infrastructure_subtitle") ): ?>
                       <p class="subtitle">
                           <?php the_field( "infrastructure_subtitle" ); ?>
                       </p>
                    <?php endif; ?>
                   <div class="structure">
                        <div class="structure_item">
                            <div class="structure_item_top"><?php the_field('infrastructure_1_num'); ?></div>
                            <p class="structure_item_bottom">
                                <?php the_field('infrastructure_1_descr'); ?>
                            </p>
                        </div>
                        <div class="structure_item">
                            <div class="structure_item_top"><?php the_field('infrastructure_2_num'); ?></div>
                            <p class="structure_item_bottom">
                                <?php the_field('infrastructure_2_descr'); ?>
                            </p>
                        </div>
                        <div class="structure_item">
                            <div class="structure_item_top"><?php the_field('infrastructure_3_num'); ?></div>
                            <p class="structure_item_bottom">
                                <?php the_field('infrastructure_3_descr'); ?>
                            </p>
                        </div>
                   </div>
                   <div class="section_content">
                       <div class="storage_left">
                           <div>
                               <?php $_images = get_field('photos_list'); ?>
                               <?php if ( $_images ) : ?>
                                    <?php foreach ($_images as $el) : ?>
                                      <?php 
                                            $image = $el['photo_img'];
                                       ?>
                                       <a href="#s-content-<?php echo $image['id']; ?>" class="storage_tab js-storage_tab"><?=$el['photo_title'];?></a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                           </div>
                       </div>
                       <div class="storage_right">
                           <?php $_images = get_field('photos_list'); ?>
                           <?php if ( $_images ) : ?>
                                <?php foreach ($_images as $el) : ?>
                                  <?php 
                                        $image = $el['photo_img'];
                                   ?>
                                   <div class="storage_content" id="s-content-<?php echo $image['id']; ?>">
                                       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                   </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       
       <section class="certificates">
           <div class="wrap">
               <div class="wrap_float">
                   <h2 class="title">
                       <?php the_field('certificate_title'); ?>
                   </h2>
                   <?php if( get_field("certificate_title") ): ?>
                       <p class="subtitle">
                           <?php the_field( "certificate_title" ); ?>
                       </p>
                    <?php endif; ?>
                   <div class="section_content">
                        <div class="certificates_slider" id="certificates_slider">
                            <?php if ( $certificates_list = get_field('certificates_list') ) : ?>
                                <?php foreach ($certificates_list as $el) : ?>
                                    <?php 
                                        $image = $el['certificate_img'];
                                    ?>
                                    <div class="certificates_item">
                                        <div class="img_wrap">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                   </div>
               </div>
           </div>
       </section>
       
       <section class="partners">
           <div class="wrap">
               <div class="wrap_float">
                   <h2 class="title"><?php the_field('partners_title'); ?></h2>
                   <p class="subtitle">
                       <?php the_field('partners_subtitle'); ?>
                   </p>
                   <div class="section_content">
                       <?php if ( $partners_list = get_field('partners_list') ) : ?>
                            <?php foreach ($partners_list as $el) : ?>
                                <?php 
                                        $image = $el['partners_logo'];
                                    ?>
                                <div class="partners_item">
                                   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                               </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                   </div>
               </div>
           </div>
       </section>
<?php get_footer() ?>