
       <?php
/*
Template Name: download
*/
?>

     <?php get_header() ?>
     <style>
         .header_top .header_menu {
             display: none;
         }
         
         .header_top:before,
         .header_top:after {
             display: none;
         }
         .header_top .wrap_float {
             padding-bottom: 28px;
         }
         
         section.success_section {
             padding: 80px 0;
         }
    </style>
       </header>
       
       <section class="success_section">
           <div class="wrap">
               <div class="wrap_float">
                   <div class="title"><?php the_field('download_title'); ?></div>
                   <div class="subtitle"><?php the_field('download_subtitle'); ?></div>
               </div>
               <div class="btn_wrap" style="margin-top: 50px;">
                   <a href="<?php the_field('catalog', 'option'); ?>" class="btn">Скачать каталог</a>
               </div>
           </div>
       </section>
       <script>setTimeout(function() { document.location = '<?php the_field('catalog', 'option'); ?>' }, 4000);</script>
<?php get_footer() ?>