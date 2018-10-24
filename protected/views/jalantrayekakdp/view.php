<?php
$this->breadcrumbs=array(
	'Jalantrayekakdps'=>array('index'),
	$model->jalan_id,
);

$this->menu=array(
	array('label'=>'List Jalantrayekakdp', 'url'=>array('index')),
	array('label'=>'Create Jalantrayekakdp', 'url'=>array('create')),
	array('label'=>'Update Jalantrayekakdp', 'url'=>array('update', 'id'=>$model->jalan_id)),
	array('label'=>'Delete Jalantrayekakdp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jalan_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jalantrayekakdp', 'url'=>array('admin')),
);
?>

<h1>View Jalantrayekakdp #<?php echo $model->jalan_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'trayekakdp_id',
		'jalan_id',
		'nourut',
	),
)); ?>
