$(document).ready(function() {
	
	preload = '<div class="preload">'+
				'<span class="bar bar-1"></span>'+
				'<span class="bar bar-2"></span>'+
				'<span class="bar bar-3"></span>'+
			'</div>';
	
	$('#generalModal').on('show.bs.modal', function(e){

	}).on('hidden.bs.modal', function(e){
		var body = '<div class="modal-body">'+
						preload+	
					'</div>';
		$(this).find('.modal-content').html(body);
		$(this).removeData('bs.modal');
	});
    
	
	
    $('.carousel').carousel();
});