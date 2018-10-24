<?php

$this->menu=array(

	array('label'=>'Create Gruptrayekakap', 'url'=>array('create')),
);

?>

<h1>Daftar Grup  Trayek Antar Kota Antar Provinsi (AKAP)</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gruptrayekakap-grid',
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
