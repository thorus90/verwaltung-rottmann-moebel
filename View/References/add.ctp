<?php
	echo $this->Html->script("reference.js");
	$inputs = array (
		'Landkreis' => 'lk',
		'Jahr' => 'Y',
		'Name' => 'name',
		'Inhaber' => 'owner',
		'Strasse' => 'strasse',
		'Hausnummer' => 'hausnr',
		'PLZ' => 'plz',
		'Ort' => 'ort',
		'Link' => 'link',
		'Text_Link' => 'text_link',
		'Essen' => 'essen'
	);
?>
<div class="container">
	<?php
		echo $this->Form->create('Reference', array(
				'type' => 'file'
			)
		);
		foreach ( $inputs as $display => $variable )
		{
			echo $this->Form->input('Reference.' . $variable);
		}
		echo $this->Form->input("tmp", array('label' => __('Anzahl Bild-felder hinzufuegen:')));
		echo $this->Form->input('Reference.thumbnail', array('label' => __('Thumbnail:')));
		echo '<div id="pictures"></div>';
		echo $this->Form->end(array('label' => __('Referenz hinzufuegen')));
	?>

</div>
