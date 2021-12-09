$(document).ready(function(){
	
	$(document).ready(function(){
    
    var myPlacemark = [],
        arShopsItem = [],
        arPreset = 'islands#blueIcon';

        arShopsItem = $('.shop-list #item');
    
    function balloonRemoveAnd(){
        myMap.geoObjects.removeAll();

        $('.shop-list').find('#item:visible').each(function(){
            
            myMap.geoObjects.add(
                new ymaps.GeoObject({
                    geometry: {
                        type: "Point",
                        coordinates: $(this).data('coords').split(',')
                    },
                    properties: {
                        balloonContentHeader: $(this).find('#shop_city').text().trim().split(',')[0], 
                        balloonContentBody: $(this).find('#shop_city').text().trim().split(',')[1] + 
                                + '<br>' + $(this).find('#shop_hours').text().trim()
                    }
                    }, {
                        preset: arPreset
                    })    
           );
        });
        
    }
    
     $('#select_city').selectric();
    $('#select_city').bind('change', function(){
        $('.shop-list #item').hide();
        $('[data-city = '+ $('#select_city :selected').val() +']').show();
        
        balloonRemoveAnd();
    });
    
    $("#shop_sk").bind('click', function(){
        $('[data-shop = 239]').hide();
        $('[data-shop = 238]').show();

        balloonRemoveAnd();
    });

    $('#shop_mag').bind('click', function(){ 
        $('[data-shop = 238]').hide();
        $('[data-shop = 239]').show();
        
        balloonRemoveAnd();
    });
    
    $('#shop_all').bind('click', function(){
        $('.shop-list').find('#item:hidden').show();
        
        balloonRemoveAnd();
    });
    
    /*
     * Карта
     */
    ymaps.ready(init);
    
    function init(){
        
        window.myMap = new ymaps.Map ("shop_map", {
            center: [55.1540200, 61.4291500],
            zoom: 4,
            type:'yandex#publicMap',
            controls: []
        }); 

        arShopsItem.each(function(){            
                   
            myMap.geoObjects.add(
                 new ymaps.GeoObject({
                geometry: {
                    type: "Point",
                    coordinates: $(this).data('coords').split(',')
                },
                properties: {
                    balloonContentHeader: $(this).find('#shop_city').text().trim().split(',')[0], 
                    balloonContentBody: $(this).find('#shop_city').text().trim().split(',')[1] + '<br>' + $(this).find('#shop_hours').text().trim()
                }
                }, {
                    preset: arPreset
                })    
            );
           
        });

        myMap.controls.add('zoomControl', { left: 5, top: 5 })
    }
    
    
});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
});
