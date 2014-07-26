<?php
	echo $this->Html->script("referenzen.js");
?>
<div class="container">
    <form method="post" action="/verwaltungneu/refernzen/add.php" enctype="multipart/form-data">
        <div class="input-group input-group-lg">
			<span class="input-group-addon"><?php echo __("Landkreis:"); ?></span>
			<input class="form-control input-lg" <?php if(isset($post)) echo 'value="' . $post['lk'] . '" ' ?> name="lk">
		</div>
		<div class="input-group input-group-lg">
			<span class="input-group-addon"><?php echo __("Jahr:"); ?></span>
			<input class="form-control input-lg" <?php if(isset($post)) echo 'value="' . $post['Y'] . '" ' ?> name="Y">
		</div>
		<div class="input-group input-group-lg">
			<span class="input-group-addon"><?php echo __("Name:"); ?></span>
			<input class="form-control input-lg" <?php if(isset($post)) echo 'value="' . $post['name'] . '" ' ?> name="name">
		</div>
        <div class="input-group input-group-lg">
			<span class="input-group-addon"><?php echo __("Inhaber:"); ?></span>
			<input class="form-control input-lg" <?php if(isset($post)) echo 'value="' . $post['owner'] . '" ' ?> name="owner">
		</div>
		<div class="input-group input-group-lg">
			<span class="input-group-addon"><?php echo __("Strasse:"); ?></span>
			<input class="form-control input-lg" <?php if(isset($post)) echo 'value="' . $post['strasse'] . '" ' ?> name="strasse">
		</div>
		<div class="input-group input-group-lg">
			<span class="input-group-addon"><?php echo __("Hausnummer:"); ?></span>
			<input class="form-control input-lg" <?php if(isset($post)) echo 'value="' . $post['hausnr'] . '" ' ?> name="hausnr">
		</div>
		<div class="input-group input-group-lg">
			<span class="input-group-addon"><?php echo __("PLZ:"); ?></span>
			<input class="form-control input-lg" <?php if(isset($post)) echo 'value="' . $post['plz'] . '" ' ?> name="plz">
		</div>
		<div class="input-group input-group-lg">
			<span class="input-group-addon"><?php echo __("Ort:"); ?></span>
			<input class="form-control input-lg" <?php if(isset($post)) echo 'value="' . $post['ort'] . '" ' ?> name="ort">
		</div>
		<div class="input-group input-group-lg">
			<span class="input-group-addon"><?php echo __("Link:"); ?></span>
			<input class="form-control input-lg" <?php if(isset($post)) echo 'value="' . $post['link'] . '" ' ?> name="link">
		</div>
		<div class="input-group input-group-lg">
			<span class="input-group-addon"><?php echo __("Text_link:"); ?></span>
			<input class="form-control input-lg" <?php if(isset($post)) echo 'value="' . $post['text_link'] . '" ' ?> name="text_link">
		</div>
		<div class="input-group input-group-lg">
			<span class="input-group-addon"><?php echo __("Essen:"); ?></span>
			<input class="form-control input-lg" <?php if(isset($post)) echo 'value="' . $post['essen'] . '" ' ?> name="essen">
		</div>
		<div class="input-group input-group-lg">
			<span class="input-group-addon"><?php echo __("Anzahl Bild-felder hinzufuegen:"); ?></span>
			<input class="form-control input-lg" id="referenzen_anzahl_bilder">
		</div>
		<div class="input-group input-group-lg" id="pasteafter">
			<span class="input-group-addon"><?php echo __("Thumbnail:"); ?></span>
			<input type="file" name="thumbnail" class="bild" value="notnull"> <input type="hidden" name="thumbnail" value="notnull">
		</div>

		<button class="btn btn-default submit" type="submit" id="referenzen_add_bilder">
				<?php echo __("bild-felder hinzufuegen"); ?>
		</button>
		<button class="btn btn-default submit" type="submit" id="submit">
				<?php echo __("Referenz hinzufuegen"); ?>
		</button>
    </form>
</div>