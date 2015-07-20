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
    
    
    /** Ajax padrão para os forms **/
	$('form').on('submit', function(e){
		e.preventDefault();
		
		var options = {
			dataType: 'json',
	        beforeSubmit: eval($(this).data('beforeSubmit')),
	        success: eval($(this).data('success'))
 		};
		
		$(this).ajaxSubmit(options); 
		
	});
	/** ----------------------- **/
	
	
    $('.carousel').carousel();

	loginBeforeSubmit = function(formData, $form, options){
		$form.find('button[type="submit"]').html(preload).attr('disabled', 'disabled');
	};

	loginSuccess = function(response, status, xhr, $form){
		$form.find('button[type="submit"]').html('<span class="spin"><i class="fa fa-arrow-right"></i></span>').removeAttr('disabled');
		if(response.result){
			location.reload();
		}else{
			$form.find('.msg').html('<i class="fa fa-exclamation-triangle"></i> '+response.msg).addClass('error');
		}
	
	};

});