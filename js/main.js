$(document).ready(function() {
	
	$('.hamburger').on('click', function(e){
       $(this).toggleClass('active');
       $('nav').toggleClass('active');
   });
         
    $('.flag.GB').on('click', function(e){
    	alert('website will be available soon');
    }); 
    $('.flag.UK').on('click', function(e){
    	alert('сторiнка незабаром буде доступна');
    });

    $('.menu').toggleClass('fixed', $(window).scrollTop() > 50);

    $('.gallery .row a').simpleLightbox();
});