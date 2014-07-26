$(document).ready(function(){
	$('#referenzen_add_bilder').click(function(){
		var count = $('#referenzen_anzahl_bilder').val();
		if(!count || !parseInt(count)){
			alert("Bitte geben Sie eine Zahl bei Anzahl Bilder-felder an!");
		}
		else{
			for(var i = count;i >= 1; i--){
				$('#pictures').after(
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
