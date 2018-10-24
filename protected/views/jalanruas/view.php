<?php
$this->breadcrumbs=array(
	'Jalanruases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Tambah Ruas Jalan', 'url'=>array('create')),
	array('label'=>'Update Ruas Jalan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ruas Jalan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Daftar Ruas Jalan', 'url'=>array('admin')),
);
?>

<h1>View Ruas Jalan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'panjang',
	),
)); ?>
