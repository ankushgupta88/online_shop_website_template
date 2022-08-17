

	
	$(document).on("click", ".delete", function() { 
		var service_id = $(this).attr("data-service_id")
		$.ajax({
			url: "delete.php",
			type: "POST",
			cache: false,
			data:{
				id: service_id
			},
			success: function(response){
				
			}
		});
	});

