(function($){
	$(function(){
		$(".add-section").on("click", function() {
			$this = $(this);
			$sectionsWrapper = $(".sections-wrapper");
			$sectionsWrapper.append("<button class='call-console'>Call console</button>");
		});
		
		$(document).on("click", ".call-console", function() {
			console.log("hello there");
		});		
	});
})(jQuery);