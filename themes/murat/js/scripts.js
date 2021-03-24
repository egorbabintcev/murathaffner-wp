$(document).ready(function(){
    /*if(device.desktop() && screen.width <= 1430) {
        $("body").addClass("responsive");
    };*/
    
    //mask
    $('.phone-mask').mask('+7 (999) 999-99-99');
    
    //dropdown menu
    var dropDowm = $(".dropdown");
    $( ".dropdown_li" ).hover(
      function() {
       dropDowm.stop( true, true ).fadeIn();
       $( ".dropdown_li" ).addClass( "opened" );
      }, function() {
        dropDowm.stop( true, true ).fadeOut();
        $( ".dropdown_li" ).removeClass( "opened" );
      }
    );
    
    //tooltip (main)
    $( ".js-hover " ).hover(
      function() {
       $(this).next(".tooltip").stop( true, true ).fadeIn();
      }, function() {
        dropDowm.stop( true, true ).fadeOut();
        $(this).next(".tooltip").stop( true, true ).fadeOut();
      }
    );
    
    
    
     //Modals
    $('a.getModal').on('click', function(e){
        e.preventDefault();
        var target_modal = $(this).attr('href');
        $(target_modal).arcticmodal();
    });
    
    $('button.getModal').on('click', function(e){
        e.preventDefault();
            var target_modal = $(this).val();
            $(target_modal).arcticmodal();
        });

    $('.modal_close').on('click', function(){
        $(this).arcticmodal('close');
    });
    
    var fn=function(){
        $('.map_container .point').removeClass("active");
      $('.map_container .point').siblings().eq(Math.floor(Math.random() * 19)).addClass("active");
        $(".point_item").hover(function(){
            $('.map_container .point').removeClass("active");
            $(this).parent().addClass("active");
        }, function() {
        $( this ).parent().removeClass( "active" );
      });
      setTimeout(arguments.callee,3000);
      }


      setTimeout( fn,3000 );
    
    
    //catalog slider
    $(".catalog_content .slider_for_item").each(function () {
       var _this = $(this),
           img = _this.find("img"),
           imgH = img.height(),
           imgW = img.width();
       if(imgW > imgH) {
          _this.addClass("horizontal");
       }
        
        if(imgW < imgH) {
          _this.addClass("vertical");
       }
   });
    
    
    
    //max height item card
    var mh = 0;
   $(".content_wrap .js-c-content").each(function () {
       var h_block = $(this).innerHeight();
       if(h_block > mh) {
          mh = h_block;
       };
   });
   $(".c-content").height(mh);
    
    
    //max height catalog
   /* var mh2 = 0;
   $(".catalog_section .tab_content").each(function () {
       var c_block = $(this).innerHeight();
       if(c_block > mh2) {
          mh2 = c_block;
       };
   });
   $(".tab_content").height(mh2);*/
    
    
    //tabs map (main page)
    $('.ymap_block .tabs .tab').click(function(e) {
        e.preventDefault();
        var title1 = $("#y-map-title1");
        var title2 = $("#y-map-title2");
        
        if ($(this).hasClass("tab1")) {
            $(".ymap_block .tabs .active").css("left", "0px");
            $(".ymap_right .title").not(title1).hide();
            title1.fadeIn();
        }
        if ($(this).hasClass("tab2")) {
            $(".ymap_block .tabs .active").css("left", "50%");
            $(".ymap_right .title").not(title2).hide();
            title2.fadeIn();
        }
        $('.ymap_block .tabs .current').removeClass('current');
        $(this).addClass('current');
        var tab = $(this).attr('href');
        $('.y-map').not(tab).hide();
        $(tab).show();
        
        var thisMap = $(this).attr('data-map');
        
        $(".y-map").not(thisMap).fadeOut();
        $(thisMap).fadeIn();
    });
    
    //item cart scroll
    $(".j_to_form").on("click", function(e){
        e.preventDefault();
        var plansOffset=$("#section_form").offset().top;
        $("html, body").animate({scrollTop:plansOffset},500);
    });
    
    //item card tabs
    $('.js-tab-item').click(function(e) {
        e.preventDefault();
        
        $('.js-tab-item').removeClass('active');
        $(this).addClass('active');
        var tab = $(this).attr('href');
        $('.content_wrap .c-content').not(tab).hide();
        $(tab).fadeIn();
    });
    
    //left tabs
    $('.js-storage_tab').click(function(e) {
        e.preventDefault();
        
        $('.storage_left .js-storage_tab').removeClass('active');
        $(this).addClass('active');
        var tab = $(this).attr('href');
        $('.storage_right .storage_content').not(tab).hide();
        $(tab).fadeIn();
    });
    
    //catalog archive tabs
    /*$('.catalog .tabs .tab').click(function(e) {
        e.preventDefault();
        var thisPosition = $(this).position().left;
        
        $('.catalog .tabs .current').removeClass('current');
        $(this).addClass('current');
        var tab = $(this).attr('href');
        $('.catalog .active').css("left", thisPosition + "px");
        $('.tab_content').not(tab).hide();
        $(tab).fadeIn();
    });*/
    
    //to top scroll
    $('#toTop').click(function(e){
        e.preventDefault();
        $('body,html').animate({scrollTop:0},800);
    });
    
    
    //item card slider
    $('.slider_for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
        dots: false,
      fade: true,
        infinite: false,
      asNavFor: '.slider_nav'
    });
    $('.slider_nav').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      asNavFor: '.slider_for',
      dots: false,
      centerMode: false,
        infinite: false,
      focusOnSelect: true
    });
    
    //victorshibut.com
    //certificates
    $('#certificates_slider').slick({
        arrows: true,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: false,
        swipe: false,
        touchMove: false,
        draggable: false,
        autoplay: false,
        autoplaySpeed: 4000  
    });
    
    //commercial btn
    $(".js-commercial").on("click", function(){
        $(this).arcticmodal('close');
        var plansOffset=$("#section_form").offset().top;
        $("html, body").animate({scrollTop:plansOffset},500);
        $('#name').focus();
    });
    
    //numbers href:tel
    $('.js_num').each(function(){
        var thisNum = $(this).text();
        var newNum = thisNum.replace(/[-_—' '()]+/g,'');

        $(this).attr('href', 'tel:' + newNum);
    });
    
    $('.advantages_item_title a').on("click", function(e){
        e.preventDefault();
    });
    
    $(".storage .storage_left .storage_tab:first-child").addClass("active");
    
    /********************  forms  *********************/  
        $('.js_form').on('submit', function(e){
            e.preventDefault();
            $(this).find('.submit').attr('disabled','disable');
            var self = $(this),
                selfCheck = self.children(".checkbox_wrap").find('input'),
                selfCheckLabel = self.children(".checkbox_wrap").find('.checkbox');
            self.find('input').css('outline','none');
            var proceed = true;
            
            self.find('.js_input').each(function(){
                if ($(this).val() == "") {
                    $(this).css('border','1px solid red');
                    setTimeout(function () {
                        $('.js_input').removeAttr('style');
                        $('.submit').removeAttr('disabled');
                    }, 1500);
                    proceed = false;
                }
            });
            
            if(selfCheck.prop("checked") == false) {
                selfCheckLabel.addClass("warning");
                $('.submit').removeAttr('disabled');
                setTimeout(function () {
                        selfCheckLabel.removeClass("warning");
                    }, 1500);
                proceed = false;
            }

            if(proceed) {
                
                if ( $(this).hasClass('full_form') ) {
                    var send_data = $(this).serialize();
                    var send_url = document.location.origin + '/wp-content/themes/murat/send_request.php';
                    var success_page = document.location.origin + '/success/';
                }
                if ( $(this).hasClass('catalog_form') ) {
                    var send_data = $(this).serialize();
                    var catalog = $("#catalog").val();
                    var success_page = document.location.origin + '/download/';
                    var send_url = document.location.origin + '/wp-content/themes/murat/send.php';
                }
                else {
                    var send_data = $(this).serialize();
                    var send_url = document.location.origin + '/wp-content/themes/murat/send.php';
                    var success_page = document.location.origin + '/success/';
                }

                if ($(this).data('redirect')) {
                    var succes_page = $(this).data('redirect');
                    if (typeof succes_page == "undefined") {

                    }
                }
                $.ajax({
                    type: "POST",
                    url: send_url,
                    data: send_data,
                    success: function (data) {
                        $.arcticmodal('close');
                        $('.js_input').val('');
                       window.location.href = success_page;
                        $('.submit').removeAttr('disabled');
                    },
                    error: function (xhr, str) {
                        alert("Произошла ошибка!");
                        $('.submit').removeAttr('disabled');
                    }
                });
            }

            return false;
        });
    
    
    if ($(".video").length){
         var video = $(".video").attr("data-href"),
        arr = video.split('/'),
        path = arr[arr.length - 1],
        ImgUrl = 'https://img.youtube.com/vi/' + path + '/maxresdefault.jpg',
        vedeoImg = 'url(https://img.youtube.com/vi/' + path + '/maxresdefault.jpg)';
        console.log(vedeoImg);

        $(".video").css("background-image",vedeoImg);
        $("#video_img").attr("src",ImgUrl);

        $(".video_btn").on('click', function() {
            var $video = $('.video iframe'),
                src = $video.attr('src');

            $video.attr('src', src + '&autoplay=1');
            $(".video").removeAttr("style");
            $(".video").addClass("active");
            $(".video iframe").addClass("active");
            $(".video_btn").hide();
        });
    }
    
    if ($("#js_catalog").length){
        var plansOffset=$("#js_catalog").offset().top - 20;
        $("html, body").animate({scrollTop:plansOffset},500);
    }
    
});	



