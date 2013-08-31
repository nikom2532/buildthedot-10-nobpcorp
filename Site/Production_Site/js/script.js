
$(document).ready(function(){
	var menuOffset = $('#wrap-header-nobg')[0].offsetTop;
	$(document).bind('ready scroll', function() {
		var docScroll = $(document).scrollTop();
		if (docScroll >= menuOffset) {
			$('#wrap-header-nobg').addClass('fixed');
		} else {
			$('#wrap-header-nobg').removeClass('fixed');            
		}

	});
  
});
