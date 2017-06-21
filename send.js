$('document').ready(function(){
	$('#login').submit(function(e){
		e.preventDefault();
		var data=$(this).serializeArray();
		data.push({name:'tag', value:'login'});
		$.ajax({
			url: 'process.php',
			type: 'post',
			dataType: 'json',
			data: data,
			
		})
		.done(function(){
			window.location='home.html';
		})
		.fail(function(){
			$('#salida').attr('class','alert alert-danger').text("Error").fadeIn('slow').delay(1000);
			setTimeout(function(){
				$('#salida').fadeOut('slow').delay(1000);
			})
		})
		.always(function(){
			setTimeout(function(){
			$('.fa').hide();
			},1000)
		})
	})
})
