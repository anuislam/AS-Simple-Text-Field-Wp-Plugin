jQuery(document).ready(function($){

	$( ".anu_my_stutas_main .anu_stutas_inner span.as_gl_toggle" ).toggle(function() {
	     $('.anu_my_stutas_main').removeClass('as_gl_right');
	     $('.anu_my_stutas_main .anu_stutas_inner span.as_gl_toggle').removeClass('as_gl_close');
	     $('.anu_my_stutas_main').addClass('as_gl_left');
	     $('.anu_my_stutas_main .anu_stutas_inner span.as_gl_toggle').addClass('as_gl_open');
	}, function() {
	     $('.anu_my_stutas_main').removeClass('as_gl_left');
	     $('.anu_my_stutas_main .anu_stutas_inner span.as_gl_toggle').removeClass('as_gl_open');
	     $('.anu_my_stutas_main').addClass('as_gl_right');
	     $('.anu_my_stutas_main .anu_stutas_inner span.as_gl_toggle').addClass('as_gl_close');
	});

});