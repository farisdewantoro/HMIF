



$(window).scroll(function(){




var wScroll = $(this).scrollTop();


var thumb = $('.masterplan');
if (thumb.length > 0) {
if (wScroll >$('.masterplan .proker2').offset().top -350){
		$('.masterplan .proker2').addClass('muncul1');

}
if (wScroll >$('.masterplan .proker3').offset().top -350){
		$('.masterplan .proker3').addClass('muncul1');

}
if (wScroll >$('.masterplan .proker4').offset().top -350){
		$('.masterplan .proker4').addClass('muncul1');

}
if (wScroll >$('.masterplan .proker5').offset().top -350){
		$('.masterplan .proker5').addClass('muncul1');

}
if (wScroll >$('.masterplan .proker6').offset().top -350){
		$('.masterplan .proker6').addClass('muncul1');

}
if (wScroll >$('.masterplan .proker7').offset().top -350){
		$('.masterplan .proker7').addClass('muncul1');

}
if (wScroll >$('.masterplan .proker8').offset().top -350){
		$('.masterplan .proker8').addClass('muncul1');

}
if (wScroll >$('.masterplan .proker9').offset().top -350){
		$('.masterplan .proker9').addClass('muncul1');

}

if (wScroll >$('.masterplan .bepart').offset().top -450){
		$('.masterplan .bepart').addClass('muncul1');

}






}




});

$(document).ready(function(){
	$('.masterplan .proker1').addClass('muncul1');
});
