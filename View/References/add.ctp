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
			$inputoptions = array(
					'class' => 'form-control input-lg',
					'required' => 'true',
					'label' => ''
			);
			echo '<div class="input-group input-group-lg">';
				echo '<span class="input-group-addon">' . $display . ':</span>';
				echo $this->Form->input($variable, $inputoptions);
			echo '</div>';
		}
		echo '<div class="input-group input-group-lg">';
			echo '<span class="input-group-addon">Anzahl Bild-felder hinzufuegen:</span>';
			echo $this->Form->input("tmp", array(
				'class' => 'form-control input-lg'
				)
			);
		echo '</div>';
		echo '<div class="input-group input-group-lg">';
			echo '<span class="input-group-addon">Thumbnail:</span>';
			echo $this->Form->input("Reference.thumbnail",array('type' => 'file', 'label' => ''));
		echo '</div>';
		echo '<div id="pictures"></div>';
		echo $this->Form->button('Referenz hinzufuegen', array(
			'class' => 'btn btn-default submit',
			'type' => 'submit')
		);
		echo $this->Form->end();
	?>

</div>
