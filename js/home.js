$(document).ready(function() {
	
	$('#orderLast').click(function(e){
		e.preventDefault();

		$('#orderLast, #orderCategory').removeClass('active');
		$(this).addClass('active');
		$.ajax({
			url : site_url('app/showAllProjects/1/date'),
			beforeSend: function(){
				$('#home #sectionProjects').html(preload);
			},
			success: function(data){
				$('#home #sectionProjects').html(data);
			}
		});		
	});

	$('#orderCategory').click(function(e){
		e.preventDefault();

		$('#orderLast, #orderRank').removeClass('active');
		$(this).addClass('active');
		$.ajax({
			url : site_url('app/showAllProjects/1/category'),
			beforeSend: function(){
				$('#home #sectionProjects').html(preload);
			},
			success: function(data){
				$('#home #sectionProjects').html(data);
			}
		});		
	});

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