<?php get_header() ?>
   <?php
        $category = get_queried_object();
        $c_id = $category->term_id;
    ?>
    <div class="header_main header_page">
               <div class="wrap">
                   <div class="wrap_float">
                       <h1 class="main_title">
                           <?php
                            if( is_category() )
                               echo "<span>";
                               echo get_queried_object()->name;
                               echo "</span>";
                            ?>
                       </h1>
                   </div>
               </div>
           </div>
       </header>
       
       <section class="catalog_section catalog">
           <div class="wrap">
               <div class="wrap_float">
                   <div class="breadcrumbs" style="padding-top:0;">
                       <a href="<?php echo get_home_url(); ?>">Главная</a> / <a href="<?php echo get_home_url(); ?>/catalog/">Каталог оборудования</a>
                   </div>
                   <div class="section_content">
                       <div class="content_wrap">
                           <div class="tab_content archive" id="c-content1" style="display: block;">
                             
                               
                               
                               
                              <?php	query_posts('cat='.$c_id);
                                 while (have_posts()) : the_post();?>
                                 <a href="<?php the_permalink(); ?>" class="catalog_item">
                                       <div class="catalog_item_img">
                                           <?php 
                                           $image = get_field('single_img_min');
                                            $size = 'medium';
                                           ?>
                                           <img src="<?php echo $image['sizes'][ $size ]; ?>" alt="<?php echo $image['alt']; ?>">
                                       </div>
                                       <h3 class="catalog_item_title">
                                           <?php the_field('single_title'); ?>
                                       </h3>
                                   </a>

                                <?php // вывод текста записи
                                    endwhile;
                                    wp_reset_query();
                                    ?>
                               
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
<?php get_footer() ?>