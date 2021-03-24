/********************  yandex map  *********************/  
    var myMap,myPlacemark;
    var myMap2,myPlacemark2;
    var btn1 = document.getElementById("js-map-1");
    var geo1_s = parseFloat(btn1.getAttribute("data-latitude"));
    var geo1_d = parseFloat(btn1.getAttribute("data-longitude"));
    var adress_1 = document.getElementById("y-map-title1");
    var adress_1val = adress_1.getAttribute("data-adress");
    var adress_2 = document.getElementById("y-map-title2");
    var adress_2val = adress_2.getAttribute("data-adress");
    var homeUrl = document.location.origin;
    ymaps.ready(function() {     
        myMap = new ymaps.Map("y-map", {
            center: [geo1_s, geo1_d],
            zoom: 17,
            controls: [] //удаляем все элементы с карты
        });

        myMap.controls.add('zoomControl', {
            float: 'none',
            position: {
                top: '40px',
                right: '15px'
            }
        });
        
         if (screen.width < 1050) {
                myMap.behaviors.disable('drag');
            }
        
         

        myPlacemark = new ymaps.Placemark([geo1_s, geo1_d], {
            hintContent: adress_1val
        }, {
            iconLayout: 'default#image',
            iconImageHref: homeUrl + '/wp-content/themes/murat/img/marker.png',
            iconImageSize: [70, 74]
        });

       

        myMap.geoObjects.add(myPlacemark); //добавлям маркер


        myMap.behaviors.disable('scrollZoom'); //отключаем zoom по скроллу

    });
    
    var btn2 = document.getElementById("js-map-2");
    var geo2_s = parseFloat(btn2.getAttribute("data-latitude"));
    var geo2_d = parseFloat(btn2.getAttribute("data-longitude"));
    ymaps.ready(function() {     
        myMap2 = new ymaps.Map("y-map2", {
            center: [geo2_s, geo2_d],
            zoom: 17,
            controls: [] //удаляем все элементы с карты
        });

        myMap2.controls.add('zoomControl', {
            float: 'none',
            position: {
                top: '40px',
                right: '15px'
            }
        });
        
        if (screen.width < 1050) {
                myMap2.behaviors.disable('drag');
            }

        myPlacemark2 = new ymaps.Placemark([geo2_s, geo2_d], {
            hintContent: adress_2val
        }, {
            iconLayout: 'default#image',
            iconImageHref: homeUrl + '/wp-content/themes/murat/img/marker.png',
            iconImageSize: [70, 74]
        });



        myMap2.geoObjects.add(myPlacemark2); //добавлям маркер


        myMap2.behaviors.disable('scrollZoom'); //отключаем zoom по скроллу

    });