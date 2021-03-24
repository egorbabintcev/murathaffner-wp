
       <?php
/*
Template Name: dostavka
*/
?>

     <?php get_header() ?>
    <div class="header_main header_page">
               <div class="wrap">
                   <div class="wrap_float">
                       <h1 class="main_title">Доставка и оплата</h1>
                   </div>
               </div>
           </div>
       </header>
       
       <section class="payment_scheme">
           <div class="wrap">
               <div class="wrap_float">
                   <div id="circle_1"></div>
                   <div id="circle_2"></div>
                   <div id="circle_3"></div>
                   <div id="circle_4"></div>
                   <h2 class="title">
                       <?php the_field('pay_scheme'); ?>
                   </h2>
                   <?php if( get_field("pay_subtitle") ): ?>
                       <p class="subtitle">
                           <?php the_field( "pay_subtitle" ); ?>
                       </p>
                    <?php endif; ?>
                   <div class="section_content">
                       <div class="payment_scheme_left">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/document.png" alt="">
                       </div>
                       <ul class="payment_scheme_right">
                            <li>
                                <h3 class="payment_scheme_title">
                                    <?php the_field('pay_li_title'); ?>
                                </h3>
                                <div class="payment_scheme_text">
                                    <?php the_field('pay_li_text'); ?>
                                </div>
                            </li>
                            <li>
                                <h3 class="payment_scheme_title">
                                    <?php the_field('pay_li_title_2'); ?>
                                </h3>
                                <div class="payment_scheme_text">
                                    <?php the_field('pay_li_text_2'); ?>
                                </div>
                            </li>
                            <li>
                                <h3 class="payment_scheme_title">
                                    <?php the_field('pay_li_title_3'); ?>
                                </h3>
                                <div class="payment_scheme_text">
                                    <?php the_field('pay_li_text_3'); ?>
                                </div>
                                <a href="#payment" class="btn getModal">
                                    Запросить индивидуальную схему оплаты
                                </a>
                            </li>
                            <li>
                                <h3 class="payment_scheme_title">
                                    <?php the_field('pay_li_title_4'); ?>
                                </h3>
                                <div class="payment_scheme_text">
                                    <?php the_field('pay_li_text_4'); ?>
                                </div>
                            </li>
                       </ul>
                   </div>
               </div>
           </div>
       </section>
       
       <section class="delivery">
           <div class="wrap">
               <div class="wrap_float">
                   <h2 class="title">
                       <?php the_field('pay_scheme'); ?>
                   </h2>
                   <?php if( get_field("dostavka_subtitle") ): ?>
                       <p class="subtitle">
                           <?php the_field( "dostavka_subtitle" ); ?>
                       </p>
                    <?php endif; ?>
                   <div class="section_content">
                        <div class="delivery_left">
                            <div class="delivery_item">
                                <?php the_field('dostavka_text_1'); ?>
                                <a href="#contract" class="link getModal">Запросить пример договора</a>
                            </div>
                            <div class="delivery_item">
                                <?php the_field('dostavka_text_2'); ?>
                            </div>
                            <div class="delivery_item">
                                <?php the_field('dostavka_text_3'); ?>
                            </div>
                        </div>
                        
                   </div>
               </div>
           </div>
           <img src="<?php echo get_template_directory_uri(); ?>/img/car.png" alt="">
       </section>
       
       <section class="certificates_delivery">
           <div class="wrap">
               <div class="wrap_float">
                   <h2 class="title">
                       <?php the_field('dostavka_certificates_title'); ?>
                   </h2>
                   <?php if( get_field("dostavka_certificates_subtitle") ): ?>
                       <p class="subtitle">
                           <?php the_field( "dostavka_certificates_subtitle" ); ?>
                       </p>
                    <?php endif; ?>
                   <div class="section_content">
                       <?php $_images = get_field('dostavka_certificates'); ?>
                       <?php if ( $_images ) : ?>
                            <?php foreach ($_images as $el) : ?>
                              <?php 
                                    $image = $el['cert_img'];
                                    $size = 'medium';
                               ?>
                               <a href="#certificate-<?php echo $image['id']; ?>" class="certificates_delivery_item getModal">
                                   <div class="img_wrap">
                                       <img src="<?php echo $image['sizes'][ $size ]; ?>" alt="<?php echo $image['alt']; ?>">
                                   </div>
                               </a>
                               <div style="display: none;">
                                    <div class="modal modal_certificate" id="certificate-<?php echo $image['id']; ?>">
                                        <div class="modal_wrap">
                                            <img src="<?php echo $image['url']; ?>" alt="">
                                        </div>
                                        <div class="modal_close"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                   </div>
               </div>
           </div>
       </section>
<?php get_footer() ?>