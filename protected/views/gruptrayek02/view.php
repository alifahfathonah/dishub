<?php
$this->breadcrumbs=array(
	'Gruptrayekakdps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Tambah Grup Trayek AKAP', 'url'=>array('create')),
	array('label'=>'Update Grup Trayek AKAP', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Daftar Grup Trayek AKAP', 'url'=>array('admin')),
);
?>

<h1>Grup Trayek AKAP </h1>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
