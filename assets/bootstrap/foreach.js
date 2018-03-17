$(window).scroll(function(){
if(wScroll >$('.prestasi p').offset().top -600){
	$('.prestasi p').each(function(i){
		setTimeout(function(){
			$('.prestasi p').eq(i).addClass('tampil');
		},500 * (i+1));
	});
}
});

