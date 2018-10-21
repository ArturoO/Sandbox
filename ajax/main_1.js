jQuery(function($){
	
	
	// handling elements added dynamically
	$("body").on("click", ".add_button", {name: "Janusz"}, handlerAddButton);
	
	// ajax testing
	$(".ajax_request").on("click", function(event) {
		event.preventDefault();
		var args = {
			"action" : "add",
			"age" : 15,
		};		
		$.ajax({
			url: config.ajax_url,
			type: "POST",
			data: args,
			dataType: "json",
			success: function(result) {
				result = JSON.parse(result);
				if(!result.isError)
				{
					console.log("success");
				} else {
					console.log("failure");	
				}				
			}
		});
		
	})
	
});


function handlerAddButton(event)
{
	var $this = $(this);
	var $clone = $this.html;
	$this.after($clone);
}
