$(function($){
	$('select[name="categorie"]').on('change',function(){
		if ($(this).val() == 'team') {
			$('#User').removeClass('hide');
		}
		else {
			$('#User').addClass('hide').find('select').val('null');
		}
	})

  $('#subBtn').on('click',function(event){// on capture l'évennement click sur le boutton
		event.preventDefault();// on dit au navigateur de ne pas utiliser la méthodce par défaut
    //ici recherger la page pour l'envoyer au formulaire
    //var myData = $('#form').serialize();//on prépare les données avant l'envoie du formulaire
		var form = $('#form');//on selectionne notre formulaire
		var formData = (window.FormData)? new FormData(form[0]) : null;
		var data = (formData !==null) ? formData : form.serialize();//on prepare les données avant l'envoie du formulaire

    $.ajax({//on envoie la requete ajax
        method:'POST',
        url: $('#form').data('url'),// où les données sont envoyés
        data: data,
				contentType: false,
				processData: false,
    })
    .done(function(msg){
      alert('data saved');
    })
		//success(function(data){})
	})

});
