<footer class="footer">
           <div class="wrap">
               <div class="wrap_float">
                   <div class="footer_left">
                       <div class="footer_logo"></div>
                       <p>
                           <?php the_field('logo_text', 'option'); ?>
                       </p>
                   </div>
                   <div class="footer_center">
                       <p><a href="#policy" class="getModal">Политика конфиденциальности</a></p>
                       <p><?php the_field('footer_text', 'option'); ?></p>
                   </div>
                   <div class="footer_madeby">
                        <p>Разработано в:</p>
                        <a href="https://mkt-lab.ru">
                            <img src="https://static.tildacdn.com/tild3861-3434-4439-a366-316532613661/logo.png" alt="">
                        </a>
                   </div>
                   <div class="footer_right">
                       <div id="toTop">Наверх</div>
                   </div>
               </div>
           </div>
       </footer>

    </div>

    <div style="display: none;">
        <div class="modal modal_callback" id="callback">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Заказать звонок
                </h2>
                <p class="modal_subtitle">
                    Свяжемся с вами в рабочее время <br>
                    и ответим на любые вопросы
                </p>
                <form class="js_form modal_form">
                    <div class="input_wrap">
                        <label for="m_name_2">Введите ваше имя</label>
                        <input type="text" name="name" class="js_input" id="m_name_2" placeholder="Ваше имя">
                    </div>
                    <div class="input_wrap">
                        <label for="m_tel_2">Телефон для уточнения деталей</label>
                        <input type="text" name="tel" class="phone-mask js_input" id="m_tel_2" placeholder="+7 (___) ___-__-__">
                    </div>
                    <input type="hidden" name="form" value="Обратный звонок">
                    <input type="submit" class="submit btn" value="Получить ответ на вопрос">
                    <div class="checkbox_wrap">
                       <input type="checkbox" id="checkbox4" checked>
                       <label for="checkbox4" class="checkbox">
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

    <div style="display: none;">
        <div class="modal modal_payment" id="payment">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Запросить индивидуальную <br>
                    схему оплаты
                </h2>
                <p class="modal_subtitle">
                    Под каждого клиента можем <br>
                    разработать выгодную схему оплаты
                </p>
                <form class="js_form modal_form">
                    <div class="input_wrap">
                        <label for="m_name_3">Введите ваше имя</label>
                        <input type="text" name="name" class="js_input" id="m_name_3" placeholder="Ваше имя">
                    </div>
                    <div class="input_wrap">
                        <label for="m_tel_3">Телефон для уточнения деталей</label>
                        <input type="text" name="tel" class="phone-mask js_input" id="m_tel_3" placeholder="+7 (___) ___-__-__">
                    </div>
                    <input type="hidden" name="form" value="Запросить индивидуальную схему оплаты">
                    <input type="submit" class="submit btn" value="Запросить выгодную схему оплаты">
                    <div class="checkbox_wrap">
                       <input type="checkbox" id="checkbox5" checked>
                       <label for="checkbox5" class="checkbox">
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

    <div style="display: none;">
        <div class="modal modal_excursion" id="excursion">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Записаться
                    на экскурсию
                </h2>
                <form class="js_form modal_form">
                    <div class="input_wrap">
                        <label for="m_name_9">Введите ваше имя</label>
                        <input type="text" name="name" class="js_input" id="m_name_9" placeholder="Ваше имя">
                    </div>
                    <div class="input_wrap">
                        <label for="m_tel_9">Телефон для уточнения деталей</label>
                        <input type="text" name="tel" class="phone-mask js_input" id="m_tel_9" placeholder="+7 (___) ___-__-__">
                    </div>
                    <input type="hidden" name="form" value="Записаться на экскурсию">
                    <input type="submit" class="submit btn" value="Записаться на экскурсию">
                    <div class="checkbox_wrap">
                       <input type="checkbox" id="checkbox9" checked>
                       <label for="checkbox9" class="checkbox">
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

    <div style="display: none;">
        <div class="modal modal_contract" id="contract">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Запросить пример договора
                </h2>
                <form class="js_form modal_form">
                    <div class="input_wrap">
                        <label for="m_name_4">Введите ваше имя</label>
                        <input type="text" name="name" class="js_input" id="m_name_4" placeholder="Ваше имя">
                    </div>
                    <div class="input_wrap">
                        <label for="m_tel_4">Телефон для уточнения деталей</label>
                        <input type="text" name="tel" class="phone-mask js_input" id="m_tel_4" placeholder="+7 (___) ___-__-__">
                    </div>
                    <input type="hidden" name="form" value="Запросить пример договора">
                    <input type="submit" class="submit btn" value="Получить пример договора">
                    <div class="checkbox_wrap">
                       <input type="checkbox" id="checkbox6" checked>
                       <label for="checkbox6" class="checkbox">
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

    <div style="display: none;">
        <div class="modal modal_commercial" id="commercial">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Коммерческое <br>
                    предложение содержит:
                </h2>
                <ul>
                    <li>Подробные технически характеристики;</li>
                    <li>Расчет срока поставки;</li>
                    <li>Точную стоимость «под ключ»;</li>
                    <li>Несколько вариантов оплаты;</li>
                    <li>Сертификаты на оборудование;</li>
                    <li>Возможность получения скидки;</li>
                    <li>Приглашение на действующее производство.</li>
                </ul>
                <div class="btn js-commercial">Получить предложение</div>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>

    <div style="display: none;">
        <div class="modal modal_policy" id="policy">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Политика конфиденциальности
                </h2>
                <div class="wp_content">
                    <?php the_field('policy', 'option'); ?>
                </div>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>

    <div style="display: none;">
        <div class="modal modal_success" id="success">
            <div class="modal_wrap">
                <h2 class="modal_title">
                    Ваша заявка принята
                </h2>
                <p class="modal_subtitle">
                    В ближайшее время с Вами свяжется наш менеджер
                </p>
            </div>
            <div class="modal_close"></div>
        </div>
    </div>


    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/device.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.arcticmodal-0.3.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.min.js"></script>
    <?php the_field('footer_metriks', 'option'); ?>
</body>
</html>
