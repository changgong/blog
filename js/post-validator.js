$(function(){

	$('#Post_title').bind('blur',function(){
		validate_post_tile($(this).val());
	});

	function validate_post_tile(title){
		var title_length = title.length;
		var post_title_em = $('#Post_title_em');
		post_title_em.text('');
		if(title_length <= 0){
			post_title_em.text('Title cannot be blank.');
		}else{
			console.log(title_length);
		}
	}
});