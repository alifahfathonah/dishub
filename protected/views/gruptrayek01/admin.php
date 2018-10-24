<?php

$this->menu=array(
	
	array('label'=>'Tambah Grup Trayek AKDP', 'url'=>array('create')),
);


?>

<h1>Daftar Grup Trayek Antar Kota Dalam Provinsi (AKDP)</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gruptrayek-grid',
	'dataProvider'=>$model->search01(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
