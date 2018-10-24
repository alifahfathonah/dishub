<?php

$this->menu=array(
	
	array('label'=>'Tambah Grup Trayek AKAP', 'url'=>array('create')),
);


?>

<h1>Daftar Grup Trayek Antar Kota Antar Provinsi (AKAP)</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gruptrayek-grid',
	'dataProvider'=>$model->search02(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
