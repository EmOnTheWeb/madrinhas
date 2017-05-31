
(function($) {
    $(document).ready(function() {

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
           
        window.addEventListener('resize', function() {
            bubble_map.resize();
        });
        $('.circle').show().addClass('enlarge'); 
        var allMenteeDivs = $('.mk-employees'); 
        var allMenteeHeadings = $('.page-template-page-mentee-map h3'); 
        var allFlags = $('.page-template-page-mentee-map h3+p');

        $('.circle').click(function() {
            
            allMenteeDivs.hide(); 
            allMenteeHeadings.hide();
            allFlags.hide();  
            var name = $(this).data('info'); 
            name = name.toLowerCase().replace(/ /g,''); 
            var selector = '.mentees__' + name; 
            $(selector).show(); 
            //show title 
            $(selector).parent().find('h3').css('display','inline-block'); 
            $(selector).parent().find('p').css('display','inline-block');  

            //scroll down to view mentees
            $('html, body').animate({
                scrollTop: $(selector).offset().top - ($('.mk-header-holder').outerHeight() + 190)
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
            $(selector).parent().find('h3').show();  

            //scroll down to view mentees
            $('html, body').animate({
                scrollTop: $(selector).offset().top - ($('.mk-header-holder').outerHeight() + 150)
            }, 400);

        }); 




        $('.page-template-page-mentee-map .mk-go-top').click(function() {
            
            setTimeout(function() {
                allMenteeDivs.hide(); 
                allMenteeHeadings.hide(); 
                allFlags.hide(); 
            }, 1000)
        }); 
    }); 
})(jQuery);
     