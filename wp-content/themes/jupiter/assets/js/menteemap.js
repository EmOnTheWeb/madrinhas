var bubble_map = new Datamap({
  element: document.getElementById("bubbles"),
  responsive: true,
  geographyConfig: {
    popupOnHover: false,
    highlightOnHover: false
  },
  fills: {
    defaultFill: '#ABDDA4',
    RED: 'red',
    BLUE: 'blue'
  }
});
bubble_map.bubbles([
    {
    name: 'Barbados',
    radius: 25,
    fillKey: 'RED',
    latitude: 13.10,
    longitude: -59.32
  },
  {
    name: 'Kenya',
    radius: 30,
    fillKey: 'RED',
    latitude: 1.17,
    longitude: 44.49
  },
  {
    name: 'Nepal',
    radius: 30,
    country: 'NPL',
    centered: 'NPL',
    fillKey: 'RED'
  },
  {
    name: 'Nigeria',
    radius: 25,
    country: 'NGA',
    centered: 'NGA',
    fillKey: 'RED'
  },
  {
    name: 'Palestine',
    radius: 40,
    country: 'PSE',
    centered: 'PSE',
    fillKey: 'BLUE'
  },
  {
    name: 'Rwanda',
    radius: 35,
    country: 'RWA',
    centered: 'RWA',
    fillKey: 'BLUE',
    latitude: 2,
    longitude: 28
  },
  {
    name: 'South Africa',
    radius: 45,
    country: 'ZAF',
    centered: 'ZAF',
    fillKey: 'BLUE',
    latitude: -33,
    longitude: 24 
  },
  {
    name: 'Tunisia',
    radius: 30,
    country: 'TUN',
    centered: 'TUN',
    fillKey: 'RED' 


  },
    {
    name: 'Zambia',
    radius: 25,
    country: 'ZMB',
    centered: 'ZMB',
    fillKey: 'RED' 
  }
], {
  
});

window.addEventListener('resize', function() {
    bubble_map.resize();
});
(function($) {
    $(document).ready(function() {
        
        var allMenteeDivs = $('.mk-employees'); 
        var allMenteeHeadings = $('.page-template-page-mentee-map h3'); 

        $('circle').click(function() {
            
            allMenteeDivs.hide(); 
            allMenteeHeadings.hide(); 
            var name = $(this).data('info').name; 
            name = name.toLowerCase().replace(/ /g,''); 
            var selector = '.mentees__' + name; 
            $(selector).show(); 
            //show title 
            $(selector).prev('h3').show();  

            //scroll down to view mentees
            $('html, body').animate({
                scrollTop: $(selector).offset().top - ($('.mk-header-holder').outerHeight() + 150)
            }, 400);

        });

         $('.mobile-flags img').click(function() {
            
            allMenteeDivs.hide(); 
            allMenteeHeadings.hide(); 
            var name = $(this).prev('h4').text(); 
            name = name.toLowerCase().replace(/ /g,''); 
            var selector = '.mentees__' + name; 
            $(selector).show(); 
            //show title 
            $(selector).prev('h3').show();  

            //scroll down to view mentees
            $('html, body').animate({
                scrollTop: $(selector).offset().top - ($('.mk-header-holder').outerHeight() + 150)
            }, 400);

        }); 




        $('.page-template-page-mentee-map .mk-go-top').click(function() {
            
            setTimeout(function() {
                allMenteeDivs.hide(); 
                allMenteeHeadings.hide(); 
            }, 1000)
        }); 
    }); 
})(jQuery);
     