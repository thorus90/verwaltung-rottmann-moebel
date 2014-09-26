<?php
echo $this->Html->link(
	'Referenz hinzufuegen',
	array(
		'controller' => 'References',
		'action' => 'add'
	)
);

echo '<table class="table">';
echo '<tr>';
echo '<th>Cmds</th> <th>ID</th> <th>Landkreis</th> <th>Jahr</th> <th>Name</th> <th>Strasse</th> <th>Hnr</th> <th>PLZ</th> <th>Ort</th> <th>link</th> <th>text link</th> <th>essen</th>';
echo '</tr>';
foreach ($references as $reference) {

	echo '<tr>';
	echo '<td>' . $this->Html->link('del', array(
		'controller' => 'References',
		'action' => 'delete',
		$reference['Reference']['id']
		)
	) . '</td>';
	echo '<td>' . $reference['Reference']['id'] . '</td>';
	echo '<td>' . $reference['Reference']['lk'] . '</td>';
	echo '<td>' . $reference['Reference']['Y'] . '</td>';
	echo '<td>' . $reference['Reference']['name'] . '</td>';
	echo '<td>' . $reference['Reference']['strasse'] . '</td>';
	echo '<td>' . $reference['Reference']['hausnr'] . '</td>';
	echo '<td>' . $reference['Reference']['plz'] . '</td>';
	echo '<td>' . $reference['Reference']['ort'] . '</td>';
	echo '<td>' . $reference['Reference']['link'] . '</td>';
	echo '<td>' . $reference['Reference']['text_link'] . '</td>';
	echo '<td>' . $reference['Reference']['essen'] . '</td>';
	echo '</tr>';
}
echo '</table>';
?>