var myMap,myPlacemark;
    var myMap2,myPlacemark2;
    var btn1 = document.getElementById("js-map-1");
    var geo1_s = parseFloat(btn1.getAttribute("data-latitude"));
    var geo1_d = parseFloat(btn1.getAttribute("data-longitude"));
    var adress_1 = document.getElementById("js-map-1");
    var adress_1val = adress_1.getAttribute("data-adress");
    
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