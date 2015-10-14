$(function() {
	$('.field, textarea').focus(function() {
        if(this.title==this.value) {
            this.value = '';
        }
    }).blur(function(){
        if(this.value=='') {
            this.value = this.title;
        }
    });

    $('#slider ul').jcarousel({
    	scroll: 1,
		auto: 7,
		itemFirstInCallback : mycarousel_firstCallback,
        wrap: 'both'
    });
   function mycarousel_firstCallback(carousel, item, idx) {
        $('#slider .nav a').bind('click', function() {
            carousel.scroll(jQuery.jcarousel.intval($(this).text()));
            $('#slider .nav a').removeClass('active');
            $(this).addClass('active');
            return false;
        });
        $('#slider .nav a').removeClass('active');
        $('#slider .nav a').eq(idx-1).addClass('active');
    }
	
    $('#five_minread ul').jcarousel({
        auto: 5,
        scroll: 1,
        wrap: 'circular'
    });
	
     if ($.browser.msie && $.browser.version.substr(0,1)<7) {
        DD_belatedPNG.fix('#logo h1 a, .read-more-btn, #slider .image img, #five_minread .jcarousel-prev, #five_minread .jcarousel-next, #slider .jcarousel-container, #five_minread .price, .shell, #footer, .articles ul li a:hover');
    }
});