<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
