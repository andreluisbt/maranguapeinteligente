$(document).ready(function() {

	var map, marker = null;
	function initialize() {
		var mapOptions = {
			center : {
				lat : -3.894890,
				lng : -38.686022
			},
			zoom : 15,
			mapTypeId: google.maps.MapTypeId.HYBRID
		};
		map = new google.maps.Map(document.getElementById('map'), mapOptions);
		
		google.maps.event.addDomListener(map, 'click', function(event) {
			placeMarker(event.latLng);
		});
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
	
	function placeMarker(location) {
	  
	  $('#formNewProject #lat').val(location.G);
	  $('#formNewProject #lng').val(location.K);
	  
	  if(marker != null){
		  marker.setMap(null);
	  }
	  marker = new google.maps.Marker({
	      position: location, 
	      map: map
	  });
	}
	

	newProjectBeforeSubmit = function(formData, $form, options){
		$form.find('.msgs').removeClass('success error')
							.html(preload);
	};

	newProjectSuccess = function(response, status, xhr, $form){
		$msgs = $form.find('.msgs');
		if(response.result){
			$msgs.addClass('success').html(response.msg);
			$form.resetForm();
			marker.setMap(null);
		}else{
			$msgs.addClass('error').html(response.msg);
		}
	};
});

