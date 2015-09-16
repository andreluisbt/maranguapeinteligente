
$(document).ready(function() {
		
	$('body').on('click', '.project-item .actions a', function(e){
		e.preventDefault();
		
		var $this = $(this);
		var oldContent = $(this).html();
		$(this).html(preload);
		
		$.ajax({
			dataType: 'json',
			url: $this.attr('href'),
			success: function(data){
				$this.parents('.actions').find('a').removeClass('active');
				$this.html(oldContent).addClass(data.class);								
			}
		});
	});

	$.ajax({
		url : site_url('comments/showComments'),
		beforeSend: function(){
			$('#viewProject .comments').append(preload)
		},
		success: function(data){
			$('#viewProject .comments').html(data);
		}
	});

	$('#sectionViewProject .comments').on('click', '.show-more', function(e){
		e.preventDefault();
		var commentPage = $(this).data('comment-page');
		$(this).parent().remove();
		$.ajax({
			url : site_url('comments/showComments/'+commentPage),
			beforeSend: function(){
				$('#sectionViewProject #wrapShowMore').html(preload);
			},
			success: function(data){
				$('#sectionViewProject #wrapShowMore .preload').remove();
				$('#sectionViewProject .comments').append(data);
			}
		});
	});

	/*
	$('#sectionViewProject').on('click', '#btnSendComment', function(e){
		e.preventDefault();
		var projectId = $(this).data('projectId');
		//$(this).parent().remove();
		$.ajax({
			url : site_url('comments/addComment/'+projectId),
			type: 'post',
			dataType: 'json',
			data: {comment: $('#textComment').val()},
			beforeSend: function(){
				$('#textComment').attr('disabled', 'disabled');
				$('#btnSendComment').html(preload).attr('disabled', 'disabled');
			},
			success: function(data){
				//$('#sectionViewProject #wrapShowMore .preload').remove();
				//$('#sectionViewProject .comments').append(data);
			}
		});
	});
	*/

	formValidationAjax($('#formComment'));
});

commentBeforeSubmit = function(formData, $form, options){
	$form.find('.msgs').removeClass('success error')
							.html('');

	$form.find('textarea').attr('disabled', 'disabled');
	$form.find('button[type="submit"]').html(preload).attr('disabled', 'disabled');
};

commentSuccess = function(response, status, xhr, $form){
	$form.find('button[type="submit"]').html('Enviar contribuição').removeAttr('disabled');
	$form.find('textarea').removeAttr('disabled');
	
	if(response.result){
		$form.find('.msgs').html(response.msg).addClass('success');
	}else{
		$form.find('.msgs').html(response.msg).addClass('error');
	}
};