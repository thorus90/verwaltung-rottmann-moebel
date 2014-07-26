$(document).ready(function(){
	$('#referenzen_add_bilder').click(function(){
		var count = $('#referenzen_anzahl_bilder').val();
		if(!count || !parseInt(count)){
			alert("Bitte geben Sie eine Zahl bei Anzahl Bilder-felder an!");
		}
		else{
			for(var i = count;i >= 1; i--){
				$('#pasteafter').after('<li>Bild' + i + ': <input class="bild" name="bild'
									+ i + '" type="file"><input type="hidden" name="bild_' + i + '"></li>' +
									'<li>Bild' + i + '-alt: <input name="alt' + i + '" type="text"></li>');
			}
		}
	});
});