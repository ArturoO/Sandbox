(function($, win, doc){
	var myApp = function(object, options)
	{
		var $obj = $(object);
		var $options = options;
		
		//event handlers
		this.handlerAjaxTexting = function(event)
		{
			event.preventDefault();
			var args = {
				"action" : "add",
				"age" : 15,
			};		
			$.ajax({
				url: $options.ajax_url,
				type: "POST",
				data: args,
				dataType: "json",
				success: function(result) {
					if(!result.isError)
					{
						console.log("success");
					} else {
						console.log("failure");	
					}				
				}
			});
		}
		
		this.handlerAddButton = function(event)
		{
			var $this = $(this);
			var $clone = $this.clone();
			$this.after($clone);
		}

		
		//assign handlers
		$obj.on("click", ".ajax_request", this.handlerAjaxTexting);
		$obj.on("click", ".add_button", {name: "Janusz"}, this.handlerAddButton);
	}
	
	$.fn.myApp = function(options)
	{
		new myApp(this, options);
		return this;
	}
})(jQuery, window, document);