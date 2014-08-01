$(document).ready(function(){
	$('#ReferenceTmp').keyup(function(event){ //wenn taste losgelassen wird
		var count = $('#ReferenceTmp').val();
		if(count && parseInt(count)){
			$.post(
				"/verwaltung/referencePictures/renderInputFields/",
				{
					quantity: $('#ReferenceTmp').val()
				},
				function(data)
				{
					$("#pictures").html(data);
				}
			);
		}
	});
});
