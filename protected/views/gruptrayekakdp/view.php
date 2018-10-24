<?php
$this->breadcrumbs=array(
	'Gruptrayekakdps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Tambah Grup Trayek AKDP', 'url'=>array('create')),
	array('label'=>'Update Grup Trayek AKDP', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Daftar Grup Trayek AKDP', 'url'=>array('admin')),
);
?>

<h1>Grup Trayek AKDP </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
