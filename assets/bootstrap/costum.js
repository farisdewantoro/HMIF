

document.addEventListener('DOMContentLoaded',function(){

const ketik = $('#typed-strings ');
if (ketik.length > 0) {
    var typed = new Typed('#typed', {
      stringsElement: '#typed-strings',
      typeSpeed: 60,
      backSpeed:60,
      loop:true,
      smartBackspace:true,
      backDelay:6000

    });
}

});


$(window).scroll(function(){





var wScroll = $(this).scrollTop();
	// $('.contenthome img').css({
	// 	filter:"blur("+(wScroll/70)+"px)"
	// });
	 if(wScroll > 100){
		 $('.navbar .nav ').addClass('sticky');
  	$('.navbar').addClass('sticky');
		$('.design').addClass('sticky');
   	$('.navbar-brand img').addClass('sticky');
}else  {
	 $('.navbar .nav ').removeClass('sticky');
	$('.navbar').removeClass('sticky');
	$('.navbar-brand img').removeClass('sticky');
}

const tentang = $('.tentangkami .isitentang ');
if (tentang.length > 0) {

       if (wScroll >$('.tentangkami .isitentang .imganimate1').offset().top -400){
		$('.tentangkami .isitentang .imganimate1').addClass('animateputar');
		$('.tentangkami .isitentang .imganimate3').addClass('animateputar');
		$('.tentangkami .isitentang .imganimate2').addClass('animateputar');

       }
}


var thumb = $('.recentpost .container .thumbnail');
if (thumb.length > 0) {

       if (wScroll >$('.recentpost .container .thumbnail').offset().top -400){
		$('.recentpost .thumbnail').addClass('tampil1');
		$('.recentpost .caption').addClass('tampil1');
       }
}





});


$(document).ready(function(){
	$('.prestasi img').fadeIn(1000);
	// 	$('.prestasi p').each(function(i){
	// 	setTimeout(function(){
	// 		$('.prestasi p').eq(i).addClass('tampil');
	// 	},500 * (i+1));
	// });

	$('.scroll').on('click',function(e){

  var tujuan = $(this).attr('href');
    //tangkap elemen
    var elemenHref = $(tujuan);


    $('body,html').animate({
        scrollTop:elemenHref.offset().top -190
    },1250,'swing');
     e.preventDefault();
  });








});
