<?php

for ( $x = 0; $x < $quantity; $x++) {
	echo '<div class="input-group input-group-lg">';
	    echo '<span class="input-group-addon">Bild '. $x . ':</span>';
	    echo $this->Form->input('ReferencePicture.'. $x . '.name', array('type' => 'file', 'label' => ''));
	echo '</div>';
	echo '<div class="input-group input-group-lg">';
	    echo '<span class="input-group-addon">Alt Text Bild '. $x . ':</span>';
	    echo $this->Form->input('ReferencePicture.'. $x . '.alt', array('type' => 'text', 'label' => ''));
	echo '</div>';
}

?>
