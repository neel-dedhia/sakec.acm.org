$(document).ready(function(){
	// setInterval(abc(0), 3000);
	var navHeight = $('nav').height();
	navHeight = (navHeight/100*80);
	// console.log(navHeight);
	$('#set-top-margin').css({"margin-top": navHeight});
});

function abc(prevHeight){
	var navHeight = $('nav').height();
	if(navHeight != prevHeight){
		navHeight = (navHeight/100*80);
		console.log(navHeight);
		$('#set-top-margin').css({"margin-top": navHeight});
	}
}