<?php get_header() ?>
    <div class="header_main header_page">
               <div class="wrap">
                   <div class="wrap_float">
                       <h1 class="main_title">Каталог оборудования</h1>
                   </div>
               </div>
           </div>
       </header>

       <section class="catalog_section catalog">
           <div class="wrap">
               <div class="wrap_float">
                   <h2 class="title">
                       Производим и поставляем как одноголовочные
                        станки, так и автоматические обрабатывающие центры
                   </h2>
                   <p class="subtitle" id="js_catalog">Выберите категорию оборудования</p>
                   <div class="section_content">
                       <div class="tabs_wrap">
                           <div class="tabs">
                               <a href="<?php echo get_home_url(); ?>/catalog/pvh/" class="tab current">ПВХ</a>
                               <a href="<?php echo get_home_url(); ?>/catalog/alyuminij/" class="tab">Алюминий</a>
                               <a href="<?php echo get_home_url(); ?>/catalog/steklopakety/" class="tab">Стеклопакеты</a>
                               <div class="active" style="left: 0;"></div>
                           </div>
                       </div>
                       <div class="content_wrap">
                           <div class="tab_content" id="c-content1">
                              <?php
                                $categories = get_categories(array(
                                    'orderby' => 'ID',
                                    'order' => 'ASC',
                                    'hide_empty' => false,
                                    'parent' => 1
                                ));
                                foreach( $categories as $category ){
                                    $image = get_field('cat_img', $category);
                                    echo '<a href="' . get_category_link( $category->term_id ) . '" class="catalog_item">
                                                            <div class="catalog_item_img"><img src="';
                                    echo $image['url'];
                                    echo '" alt="';
                                    echo $image['alt'];
                                    echo '"></div>
                                                             <h3 class="catalog_item_title">'.$category->name.'</h3>
                                                        </a>';
                                }
                                ?>

                           </div>
                       </div>
                   </div>
                   <div class="description">
                       <?php if( get_field("catalog_descr", 'option') ): ?>
                           <?php echo get_field('catalog_descr', 'option'); ?>
                    <?php endif; ?>
                   </div>
               </div>
           </div>
       </section>
<?php get_footer() ?>
