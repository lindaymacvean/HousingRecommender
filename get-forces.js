$.ajax({
	url: "http://data.police.uk/api/forces",
	dataType: "jsonp",
	success: function(data){
	
		_.forEach(data, function(force){
			getLatLong(force.name);
			
		});
	}
})