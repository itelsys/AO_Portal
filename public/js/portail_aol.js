function checkBox(box) {
  $(box).toggleClass("glyphicon-unchecked glyphicon-check");
   var stat = $(box).attr('class');
   if (stat === "glyphicon glyphicon-check") {
   		$.ajax({
   			type : 'post',
   			url : '/',
   			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			data : {
				'id' : $('input[name = IdAO]').val(),
				'user_id' : $('input[name = UserId]').val(),
			},
			success : function(data){
			}
		})
   	}else if(stat === "glyphicon glyphicon-unchecked"){
   		$.ajax({
   			type : 'post',
   			url : 'Abonnement/destroy',
   			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			data : {
				'id' : $('input[name = IdAO]').val(),
				'user_id' : $('input[name = UserId]').val(),
				_method: 'delete'
			},
		});
   } 	
}
