
       <?php
/*
Template Name: guarantee
*/
?>

     <?php get_header() ?>
    <div class="header_main header_page">
               <div class="wrap">
                   <div class="wrap_float">
                       <h1 class="main_title">Гарантия и сервис</h1>
                   </div>
               </div>
           </div>
       </header>

       <section class="service">
           <div class="wrap">
               <div class="wrap_float">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/guarantee.png" alt="">
                   <div class="circle">
                       Гарантия <br><b><?php the_field('guarantee_val'); ?></b>
                   </div>
                   <div class="section_content">
                       <h2 class="title">
                           <?php the_field('service_title'); ?>
                       </h2>
                       <?php if( get_field("service_subtitle") ): ?>
                           <p class="subtitle">
                               <?php the_field( "service_subtitle" ); ?>
                           </p>
                        <?php endif; ?>
                       <ul class="service_ol">
                           <li>
                               <?php the_field('1_text'); ?>
                           </li>
                           <li>
                               <?php the_field('2_text'); ?>
                           </li>
                       </ul>
                   </div>
               </div>
           </div>
       </section>

       <section class="support">
           <div class="wrap">
               <div class="wrap_float">
                   <h2 class="title">
                       <?php the_field('support_title'); ?>
                   </h2>
                   <p class="subtitle">
                       <?php the_field('support_subtitle'); ?>
                   </p>
                   <div class="section_content">
                       <div class="support_item">
                           <div class="support_item_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/sup-1.svg" alt="">
                           </div>
                           <div class="support_item_text">
                               <?php the_field('support_li_1'); ?>
                           </div>
                       </div>
                       <div class="support_item">
                           <div class="support_item_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/sup-2.svg" alt="">
                           </div>
                           <div class="support_item_text">
                               <?php the_field('support_li_2'); ?>
                           </div>
                       </div>
                       <div class="support_item">
                           <div class="support_item_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/sup-3.svg" alt="">
                           </div>
                           <div class="support_item_text">
                               <?php the_field('support_li_3'); ?>
                           </div>
                       </div>
                       <div class="support_item">
                           <div class="support_item_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/sup-4.svg" alt="">
                           </div>
                           <div class="support_item_text">
                               <?php the_field('support_li_4'); ?>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>

       <section class="storage">
           <div class="wrap">
               <div class="wrap_float">
                   <h2 class="title">
                       <?php the_field('storage_title'); ?>
                   </h2>
                   <?php if( get_field("storage_subtitle") ): ?>
                       <p class="subtitle">
                           <?php the_field( "storage_subtitle" ); ?>
                       </p>
                    <?php endif; ?>
                   <div class="section_content">
                       <div class="storage_left">
                           <div>
                               <?php $_images = get_field('storage_ul'); ?>
                               <?php if ( $_images ) : ?>
                                    <?php foreach ($_images as $el) : ?>
                                      <?php
                                            $image = $el['storage_img'];
                                       ?>
                                       <a href="#s-content-<?php echo $image['id']; ?>" class="storage_tab js-storage_tab"><?=$el['storage_li'];?></a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                           </div>
                           <div class="spares">
                               <a href="#s-content-4" class="spares_tab js-storage_tab">
                                   Список запчастей на складе
                               </a>
                           </div>
                       </div>
                       <div class="storage_right">
                           <?php $_images = get_field('storage_ul'); ?>
                           <?php if ( $_images ) : ?>
                                <?php foreach ($_images as $el) : ?>
                                  <?php
                                        $image = $el['storage_img'];
                                   ?>
                                   <div class="storage_content" id="s-content-<?php echo $image['id']; ?>">
                                       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                   </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                           <div class="storage_content list is-spares" id="s-content-4">
                               <ul>
                                   <?php if ( $storage_list = get_field('storage_list') ) : ?>
                                        <?php foreach ($storage_list as $el) : ?>
                                            <li><?=$el['storage_li'];?></li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>

        <style>.storage{margin-bottom: 110px;}</style>
<?php get_footer() ?>
