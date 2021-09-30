$(function() {

	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});
	
	//Pretty Photo
	//$("a[rel^='prettyPhoto']").prettyPhoto({
	//	social_tools: false
	//});
	
	// Change color site
	var listColor = ['blue', 'ocean', 'purple'];
	var body = $('html body');

	function changeColor(colorParam) {
		$.each(listColor, function(idx, color) {
			body.removeClass(color);
		});
		body.addClass(colorParam);
	}

	var typeBgCookie = getCookie('bg');
	if (typeBgCookie == null || typeBgCookie == "") {
		setCookie('bg', 'blue');
	}
	if (typeBgCookie != null && typeBgCookie != "") {
		changeColor(typeBgCookie);
	}

	$.each(listColor, function(idx, color) {
		$('a.preset_'+color).click(function(e) {
			e.preventDefault();
			changeColor(color);
			setCookie('bg', color);
			return false;
		});
	});
});