
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
		url : site_url('comments/showComments/63'),
		beforeSend: function(){
			$('#viewProject .comments').append(preload)
		},
		success: function(data){
			$('#viewProject .comments').html(data);
		}
	});

});

