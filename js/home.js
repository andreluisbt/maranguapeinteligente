$(document).ready(function() {
	
	$.ajax({
		url : site_url('app/showAllProjects'),
		beforeSend: function(){
			$('#home #sectionProjects').append(preload)
		},
		success: function(data){
			$('#home #sectionProjects').html(data);
		}
	});
	
});