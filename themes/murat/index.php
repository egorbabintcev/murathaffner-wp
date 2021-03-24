<?php get_header() ?>
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
                               <?php if ( $header_ul = get_field('header_ul', 'option') ) : ?>
                                    <?php foreach ($header_ul as $el) : ?>
                                        <li><?=$el['header_li'];?></li>
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
       
       <section class="advantages">
           <div id="circle_1"></div>
           <div id="circle_2"></div>
           <div id="circle_3"></div>
           <div id="circle_4"></div>
           <div class="wrap">
               <div class="wrap_float">
                   <h2 class="title">
                       <?php the_field('advantages_title', 'option'); ?>
                   </h2>
                   <?php if( get_field("advantages_subtitle", 'option') ): ?>
                       <p class="subtitle">
                           <?php echo get_field('advantages_subtitle', 'option'); ?>
                       </p>
                    <?php endif; ?>
                   <div class="section_content">
                       <div class="advantages_item">
                           <h3 class="advantages_item_title">
                               <?php the_field('advantages_1_title', 'option'); ?>
                           </h3>
                           <ul class="advantages_ul">
                               <?php if ( $advantages_1_ul = get_field('advantages_1_ul', 'option') ) : ?>
                                    <?php foreach ($advantages_1_ul as $el) : ?>
                                        <li><?=$el['advantages_1_li'];?></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                           </ul>
                       </div>
                       <div class="advantages_item">
                           <h3 class="advantages_item_title">
                               <?php the_field('advantages_2_title', 'option'); ?>
                           </h3>
                           <ul class="advantages_ul">
                               <?php if ( $advantages_2_ul = get_field('advantages_2_ul', 'option') ) : ?>
                                    <?php foreach ($advantages_2_ul as $el) : ?>
                                        <li><?=$el['advantages_2_li'];?></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                           </ul>
                       </div>
                   </div>
                   <img src="<?php echo get_template_directory_uri(); ?>/img/advantages.png" alt="">
                   <div class="section_content">
                       <div class="advantages_item">
                           <h3 class="advantages_item_title">
                               <?php the_field('advantages_3_title', 'option'); ?>
                           </h3>
                           <ul class="advantages_ul">
                               <?php if ( $advantages_3_ul = get_field('advantages_3_ul', 'option') ) : ?>
                                    <?php foreach ($advantages_3_ul as $el) : ?>
                                        <li><?=$el['advantages_3_li'];?></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                           </ul>
                       </div>
                       <div class="advantages_item">
                           <h3 class="advantages_item_title">
                               <?php the_field('advantages_4_title', 'option'); ?>
                           </h3>
                           <ul class="advantages_ul">
                               <?php if ( $advantages_4_ul = get_field('advantages_4_ul', 'option') ) : ?>
                                    <?php foreach ($advantages_4_ul as $el) : ?>
                                        <li><?=$el['advantages_4_li'];?></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                           </ul>
                       </div>
                   </div>
                   <div class="btn_wrap">
                       <a href="<?php echo get_home_url(); ?>/catalog/" class="btn">Перейти в каталог оборудования</a>
                   </div>
               </div>
           </div>
       </section>
       
       <section class="map">
           <div class="wrap">
               <div class="wrap_float">
                   <h2 class="title">
                       Поставили оборудование для 153 производств <br>
                        в 42 городах по всей России с 1994 года
                   </h2>
                   <p class="subtitle">
                       За это время компании Murat изготовила и доставила более 1700 единиц <br>
                        различного оборудования для предприятий по всему миру
                   </p>
                   <div class="section_content">
                       <div class="map_container">
                           <div class="point" style="left: 150px; top: 200px;"><div class="point_item"></div><div class="point_title">Санкт-Петерург</div></div>
                           <div class="point" style="left: 120px; top: 308px;"><div class="point_item"></div><div class="point_title">Курск</div></div>
                           <div class="point" style="left: 165px; top: 270px;"><div class="point_item"></div><div class="point_title">Москва</div></div>
                           <div class="point" style="left: 150px; top: 313px;"><div class="point_item"></div><div class="point_title">Воронеж</div></div>
                           <div class="point" style="left: 136px; top: 367px;"><div class="point_item"></div><div class="point_title">Ростов-на-Дону</div></div>
                           <div class="point" style="left: 172px; top: 350px;"><div class="point_item"></div><div class="point_title">Волгоград</div></div>
                           <div class="point" style="left: 210px; top: 263px;"><div class="point_item"></div><div class="point_title">Нижний Новгород</div></div>
                           <div class="point" style="left: 236px; top: 267px;"><div class="point_item"></div><div class="point_title">Казань</div></div>
                           <div class="point" style="left: 240px; top: 300px;"><div class="point_item"></div><div class="point_title">Самара</div></div>
                           <div class="point" style="left: 284px; top: 236px;"><div class="point_item"></div><div class="point_title">Пермь</div></div>
                           <div class="point" style="left: 287px; top: 280px;"><div class="point_item"></div><div class="point_title">Уфа</div></div>
                           <div class="point" style="left: 340px; top: 246px;"><div class="point_item"></div><div class="point_title">Екатеринбург</div></div>
                           <div class="point" style="left: 351px; top: 271px;"><div class="point_item"></div><div class="point_title">Челябинск</div></div>
                           <div class="point" style="left: 390px; top: 277px;"><div class="point_item"></div><div class="point_title">Омск</div></div>
                           <div class="point" style="left: 426px; top: 270px;"><div class="point_item"></div><div class="point_title">Новосибирск</div></div>
                           <div class="point" style="left: 470px; top: 253px;"><div class="point_item"></div><div class="point_title">Красноярск</div></div>
                           <div class="point" style="left: 623px; top: 295px;"><div class="point_item"></div><div class="point_title">Иркутск</div></div>
                           <div class="point" style="left: 865px; top: 343px;"><div class="point_item"></div><div class="point_title">Хабаровск</div></div>
                           <div class="point" style="left: 853px; top: 396px;"><div class="point_item"></div><div class="point_title">Владивосток</div></div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       
       <section class="production">
           <div class="wrap">
               <div class="wrap_float">
                   <h2 class="title">
                       <?php the_field('portfolio_title', 'option'); ?>
                   </h2>
                   <p class="subtitle">
                       <?php the_field('portfolio_subtitle', 'option'); ?>
                   </p>
                   <div class="section_content">
                       <?php if ( $company_ul = get_field('company_ul', 'option') ) : ?>
                            <?php foreach ($company_ul as $el) : ?>
                                <div class="production_item">
                                   <div class="production_item_img">
                                       <div class="img_wrap">
                                           <img src="<?=$el['company_img'];?>" alt="">
                                       </div>
                                   </div>
                                   <h3 class="production_item_title">
                                       <?=$el['company_title'];?>
                                   </h3>
                                   <p class="production_item_city">
                                       <?=$el['company_geo'];?>
                                   </p>
                                   <div class="production_item_logo">
                                       <img src="<?=$el['company_logo'];?>" alt="">
                                   </div>
                               </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                   </div>
                   <div class="btn_wrap">
                       <button value="#excursion" class="btn getModal">Записаться на экскурсию по функционирующему производству</button>
                   </div>
               </div>
           </div>
       </section>
       
       <section class="section_form">
           <div class="wrap">
               <div class="wrap_float">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/book.png" alt="">
                   <div class="form_div">
                       <h2 class="title">
                           Оставьте заявку
                       </h2>
                       <p class="subtitle">
                           на разработку индивидуального
                            коммерческого предложения
                       </p>
                       <form class="form js_form full_form">
                           <div class="input_wrap">
                               <label for="name">Введите ваше имя</label>
                               <input type="text" name="name" class="input js_input" id="name" placeholder="Ваше имя">
                           </div>
                           <div class="input_wrap">
                               <label for="tel">Телефон для уточнения деталей</label>
                               <input type="text" name="tel" class="input js_input phone-mask" id="tel" placeholder="+7 (___) ___-__-__">
                           </div>
                           <div class="input_wrap">
                               <label for="email">E-mail для получение КП</label>
                               <input type="text" name="email" class="input js_input" id="email" placeholder="mail@mail.ru">
                           </div>
                           <input type="hidden" name="form" value="Заявка на разработку индивидуального
                            коммерческого предложения">
                           <button type="submit" class="submit btn">Получить предложение</button>
                           <div class="checkbox_wrap">
                               <input type="checkbox" id="checkbox" checked>
                               <label for="checkbox" class="checkbox">
                                   Я даю разрешение на обработку моих
                                    персональных данных согласно правилам
                                    конфиденциальности
                               </label>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </section>
       
       <section class="scheme">
           <div class="wrap">
               <div class="wrap_float">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/manager.png" alt="">
                   <div class="section_content">
                       <h2 class="title">
                           <?php the_field('scheme_title', 'option'); ?>
                       </h2>
                       <ul class="scheme_ul">
                           <li data-num="01">
                               <?php the_field('scheme_li_1', 'option'); ?>
                           </li>
                           <li data-num="04">
                               <?php the_field('scheme_li_2', 'option'); ?>
                           </li>
                           <li data-num="02">
                               <?php the_field('scheme_li_3', 'option'); ?>
                           </li>
                           <li data-num="05">
                               <?php the_field('scheme_li_4', 'option'); ?>
                           </li>
                           <li data-num="03">
                               <?php the_field('scheme_li_5', 'option'); ?>
                           </li>
                           <li data-num="06">
                               <?php the_field('scheme_li_6', 'option'); ?>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
       </section>
       
       <section class="ymap_block">
           <div class="wrap">
               <div class="wrap_float">
                   <div class="ymap_left">
                       <div class="ymap_item">
                           <div class="y-map" id="y-map" style="display: block;"></div>
                           <div class="y-map" id="y-map2"></div>
                       </div>
                   </div>
                   <div class="ymap_right">
                       <h2 class="title" id="y-map-title1" data-adress="<?php the_field('map_1_title', 'option'); ?>">
                           <?php the_field('map_1_title', 'option'); ?>
                       </h2>
                       <h2 class="title" id="y-map-title2" style="display: none;" data-adress="<?php the_field('map_2_title', 'option'); ?>">
                           <?php the_field('map_2_title', 'option'); ?>
                       </h2>
                       <div class="tabs_wrap">
                           <div class="tabs">
                               <a href="#contacts_1" data-latitude="<?php the_field('map_1_geo_s', 'option'); ?>" data-longitude="<?php the_field('map_1_geo_d', 'option'); ?>" id="js-map-1" data-map="#y-map" class="tab current tab1">
                                   <?php the_field('map_1_btn', 'option'); ?>
                               </a>
                               <a href="#contacts_2" data-latitude="<?php the_field('map_2_geo_s', 'option'); ?>" data-longitude="<?php the_field('map_2_geo_d', 'option'); ?>" id="js-map-2" data-map="#y-map2" class="tab tab2">
                                   <?php the_field('map_2_btn', 'option'); ?>
                               </a>
                               <div class="active" style="left: 0;"></div>
                           </div>
                       </div>
                       <div class="info">
                           <p class="info_p">
                               Ответим на любые вопросы по телефону:
                           </p>
                           <div class="info_tel">
                               <a href="#" class="js_num"><?php the_field('map_tel', 'option'); ?></a>
                           </div>
                           <p class="info_p">
                               Или закажите звонок
                           </p>
                           <div class="info_bottom">
                               <button value="#callback" class="btn getModal">Заказать звонок</button>
                               <p class="info_bottom_p">
                                   С вами свяжется технический
                                    специалист, который знает
                                    оборудование Murat «до винтика»
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
        <style>.footer{border-top: 0;}</style>
        
        <div style="display: none;">
        <div class="modal modal_catalog" id="catalog">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Скачать каталог оборудования
                </h2>
                <p class="modal_subtitle">
                    Каталог с подробными техническими
                    характеристиками и фотографиями <br>
                    в процессе работы
                </p>
                <form class="js_form modal_form catalog_form">
                    <div class="input_wrap">
                        <label for="m_name_1">Введите ваше имя</label>
                        <input type="text" class="js_input" name="name" id="m_name_1" placeholder="Ваше имя">
                    </div>
                    <div class="input_wrap">
                        <label for="m_tel_1">Телефон для уточнения деталей</label>
                        <input type="text" class="phone-mask js_input" name="tel" id="m_tel_1" placeholder="+7 (___) ___-__-__">
                    </div>
                    <input type="hidden" name="form" value="Скачать каталог оборудования">
                    <input type="submit" class="submit btn" value="Скачать каталог оборудования, 5 МБ">
                    <input type="hidden" value="<?php the_field('catalog', 'option'); ?>" name="catalog_link" id="catalog">
                    <div class="checkbox_wrap">
                       <input type="checkbox" id="checkbox3" checked>
                       <label for="checkbox3" class="checkbox">
                           Я даю разрешение на обработку моих
                            персональных данных согласно правилам
                            конфиденциальности
                       </label>
                   </div>
                </form>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/map.min.js"></script>
<?php get_footer() ?>