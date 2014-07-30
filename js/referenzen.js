$(document).ready(function(){
	$('#referenzenTmp').keyup(function(event){ //wenn taste losgelassen wird
		var count = $('#referenzenTmp').val();
		if(count && parseInt(count)){
			$('#pictures').empty();
			for(var i = count;i >= 1; i--){
				$('#pictures').prepend(
                   '<div class="input-group input-group-lg">' +
                    '<span class="input-group-addon">Bild' + i + ':</span>' +
                    '<input type="file" name="bild' + i + '" class="bild" value="notnull">' +
                    '<input type="hidden" name="bild_' + i + '" value="notnull">' +
                    '</div>' +
                    '<div class="input-group input-group-lg">' +
                    '<span class="input-group-addon">Bild' + i + ':</span>' +
                    '<input type="text" class="form-control input-lg" name="alt' + i + '">' + 
                    '</div>');
			}
		}
	});
});
