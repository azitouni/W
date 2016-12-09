$(function($){
	$('select[name="categorie"]').on('change',function(){
		if ($(this).val() == 'team') {
			$('#select_user').removeClass('hide');
		}
		else {
			$('#select_user').addClass('hide').find('select').val('null');
		}
	})

  $('#subBtn').on('click',function(event){
		event.preventDefault();
    console.log(event);
    var myData = $('#form').serialize();
    $.ajax({
        method:'POST',
        url: $('#form').data('url'),
        data: myData
    })
    .done(function(msg){
      alert('data saved');
    })
	})

});
