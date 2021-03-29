<?php get_header() ?>
  <?php
       $categories = get_the_category();
        $category_id = $categories[0]->cat_ID;
        $category_name = $categories[0]->name;
        $category_link = get_category_link( $categories[0]->term_id );
       ?>
   <?php while (have_posts()) : the_post(); $post_id = get_the_ID(); ?>
        <div class="header_main header_page header_single">
               <div class="wrap">
                   <div class="wrap_float">
                       <p class="main_title"><?php the_field('item_card_title'); ?></p>
                   </div>
               </div>
           </div>
       </header>

       <section class="catalog_content">
           <div class="wrap">
               <div class="wrap_float">
                   <div class="breadcrumbs">
                       <a href="<?php echo get_home_url(); ?>">Главная</a> / <a href="<?php echo get_home_url(); ?>/catalog/">Каталог оборудования</a> / <a href="<?php echo $category_link; ?>"><?php echo $category_name; ?></a>
                   </div>
                   <div class="catalog_top">
                       <div class="catalog_top_left">
                           <div class="slider_for">
                               <?php if ( $slider_list = get_field('slider_list') ) : ?>
                                    <?php foreach ($slider_list as $el) : ?>
                                      <?php
                                       $image = $el['slide_img'];;
                                        $size = 'thumbnail';
                                       ?>
                                       <div class="slider_for_item">
                                           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                       </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                           </div>
                           <div class="slider_nav">
                               <?php if ( $slider_list = get_field('slider_list') ) : ?>
                                    <?php foreach ($slider_list as $el) : ?>
                                      <?php
                                       $image = $el['slide_img'];;
                                        $size = 'thumbnail';
                                       ?>
                                       <div class="slider_nav_item">
                                           <img src="<?php echo $image['sizes'][ $size ]; ?>" alt="<?php echo $image['alt']; ?>">
                                       </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                           </div>
                       </div>
                       <div class="catalog_top_right">
                           <h1>
                               <p><?php the_field('single_model'); ?></p>
                               <p class="item_title">
                                   <?php the_field('item_card_title'); ?>
                               </p>
                           </h1>
                           <ul class="item_ul">
                               <?php if ( $single_list = get_field('single_list') ) : ?>
                                    <?php foreach ($single_list as $el) : ?>
                                       <li><?=$el['single_li'];?></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                           </ul>
                           <button value="#ask" class="btn getModal">Задать вопрос по этой модели</button>
                       </div>
                   </div>
                   <div class="catalog_bottom">
                        <div class="catalog_tabs">
                            <a href="#c-content-1" class="tab js-tab-item active">Описание</a>
                            <a href="#c-content-2" class="tab js-tab-item">Технические характеристики</a>
                            <?php if( get_field("single_video") ): ?>
                               <a href="#c-content-3" class="tab js-tab-item">Видео работы</a>
                            <?php endif; ?>
                            <a href="" class="tab j_to_form">Получить предложение</a>
                        </div>
                        <div class="content_wrap">
                            <div class="c-content js-c-content" id="c-content-1" style="display: block;">
                                <h3 class="c-content_title">
                                    Описание:
                                </h3>
                                <div class="wp_content">
                                    <?php the_field('single_descr'); ?>
                                </div>
                            </div>
                            <div class="c-content js-c-content" id="c-content-2">
                                <h3 class="c-content_title">
                                    Технические характеристики:
                                </h3>
                                <table class="table">
                                    <tbody>
                                        <?php if ( $single_table = get_field('single_table') ) : ?>
                                            <?php foreach ($single_table as $el) : ?>
                                               <tr>
                                                    <td><?=$el['single_td_1'];?></td>
                                                    <td><?=$el['single_td_2'];?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php if( get_field("single_video") ): ?>
                               <div class="c-content" id="c-content-3">
                                    <h3 class="c-content_title">
                                        Видео работы:
                                    </h3>
                                    <div class="video" data-href="<?php the_field( "single_video" ); ?>">
                                        <iframe src="<?php the_field( "single_video" ); ?>?rel=0&showinfo=0" allowfullscreen></iframe>
                                        <div class="video_btn"></div>
                                        <img id="video_img" src="img/" alt="">
                                    </div>
                                </div>
                                <style>
                                    .catalog_content .catalog_bottom .content_wrap .c-content {
                                        /* min-height: 600px; */
                                    }
                                </style>
                            <?php endif; ?>
                        </div>
                   </div>
               </div>
           </div>
       </section>

       <section class="section_form" id="section_form">
           <div class="wrap">
               <div class="wrap_float">
                   <a href="#commercial" class="form_hum commercial_hum getModal">
                        <div class="span_wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <p>
                            посмотреть содержание
                        </p>
                   </a>
                   <img src="<?php echo get_template_directory_uri(); ?>/img/book.png" alt="">
                   <div class="form_div">
                       <h2 class="title">
                           Оставьте заявку
                       </h2>
                       <p class="subtitle mobile_only">
                          Коммерческое предложение содержит:
                       </p>
                       <ul>
                          <li>Подробные технически характеристики;</li>
                          <li>Расчет срока поставки;</li>
                          <li>Точную стоимость «под ключ»;</li>
                          <li>Несколько вариантов оплаты;</li>
                          <li>Сертификаты на оборудование;</li>
                          <li>Возможность получения скидки;</li>
                          <li>Приглашение на действующее производство.</li>
                       </ul>
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
                            коммерческого предложения. Модель: <?php the_field('single_model'); ?>, <?php the_field('single_title'); ?>">
                           <button type="submit" class="submit btn">Получить предложение</button>
                           <div class="checkbox_wrap">
                               <input type="checkbox" id="checkbox" class="checkbox" checked>
                               <label for="checkbox">
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

        <style>@media screen and (min-width: 480px){.section_form{margin-bottom: 110px;}}</style>

        <div style="display: none;">
        <div class="modal modal_ask" id="ask">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Задать вопрос по этой модели
                </h2>
                <p class="modal_subtitle">
                    Специалист по данной модели
                    ответит на любой техничекий вопрос
                </p>
                <form class="js_form modal_form">
                    <div class="input_wrap">
                        <label for="p_name_1">Введите ваше имя</label>
                        <input type="text" name="name" class="js_input" id="p_name_1" placeholder="Ваше имя">
                    </div>
                    <div class="input_wrap">
                        <label for="p_tel_1">Телефон для уточнения деталей</label>
                        <input type="text" name="tel" class="phone-mask js_input" id="p_tel_1" placeholder="+7 (___) ___-__-__">
                    </div>
                    <input type="hidden" name="form" value="Вопрос по модели: <?php the_field('single_model'); ?>, <?php the_field('single_title'); ?>">
                    <input type="submit" class="submit btn" value="Получить ответ на вопрос">
                    <div class="checkbox_wrap">
                       <input type="checkbox" id="checkbox2" checked>
                       <label for="checkbox2" class="checkbox">
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

    <?php endwhile; ?>
<?php get_footer() ?>
