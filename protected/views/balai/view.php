<?php
$this->breadcrumbs=array(
	'Balai'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Tambah Balai', 'url'=>array('create')),
	array('label'=>'Update Balai', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Balai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Daftar Balai', 'url'=>array('admin')),
);
?>

<h1>View Balai #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
