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
    

	formValidationAjax($('#login form'));

	
    $('.carousel').carousel();


	$('#sectionProjects').on('click', '.show-more', function(e){
		e.preventDefault();
		var projectPage = $(this).data('projectPage');
		$(this).parent().remove();
		$.ajax({
			url : site_url('app/showAllProjects/'+projectPage),
			beforeSend: function(){
				$('#home #sectionProjects').append(preload);
			},
			success: function(data){
				$('#home #sectionProjects .preload').remove();
				$('#home #sectionProjects').append(data);
			}
		});
	});

	
});


formValidationAjax = function($form){
	$form.validate({
		submitHandler : function(form) {
			$(form).ajaxSubmit({
				dataType: 'json',
				beforeSubmit: eval($(form).data('beforeSubmit')),
				success: eval($(form).data('success'))
			});		
		}
	});
};

/**** Login ****/

loginBeforeSubmit = function(formData, $form, options){
	$form.find('.msg').html('');
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

/**** End login ****/