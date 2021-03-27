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
                        <div class="header_top_toggler">
                          <svg class="ham hamRotate ham1" viewBox="12 12 75 75">
                            <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40"></path>
                            <path class="line middle" d="m 30,50 h 40"></path>
                            <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40"></path>
                          </svg>
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
