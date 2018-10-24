<?php

$this->menu=array(
	
	array('label'=>'Tambah Grup Trayek', 'url'=>array('create')),
);


?>

<h1>Daftar Grup Trayek Antar Kota Dalam Provinsi (AKDP)</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gruptrayekakdp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
