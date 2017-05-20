(function($) {



$( document ).ready(function() { 

	$(window).scroll(function() {
	 
		$('.count').each(function () {

			var countElemPos = $(this).offset().top; 
		
			var topOfWindow = $(window).scrollTop(); 
			
			if (countElemPos < (topOfWindow + ($(window).height() -200))) { 
				
				if(!$(this).hasClass('animated')) {

					$(this).addClass('animated'); 
				    
				    $(this).prop('Counter',0).animate({
				        Counter: $(this).text()
				    }, {
				        duration: 1000,
				        easing: 'swing',
				        step: function (now) {
				            $(this).text(Math.ceil(now));
				        }
				    });
			   	}
			}
		});
		
	}); 
}); 

})(jQuery);