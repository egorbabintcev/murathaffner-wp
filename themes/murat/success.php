
       <?php
/*
Template Name: success
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
                   <div class="title"><?php the_field('success_title'); ?></div>
                   <div class="subtitle"><?php the_field('success_subtitle'); ?></div>
               </div>
           </div>
       </section>
       
<?php get_footer() ?>