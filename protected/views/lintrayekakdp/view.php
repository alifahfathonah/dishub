<?php
$this->breadcrumbs=array(
	'Lintrayekakdps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Lintrayekakdp', 'url'=>array('index')),
	array('label'=>'Create Lintrayekakdp', 'url'=>array('create')),
	array('label'=>'Update Lintrayekakdp', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Lintrayekakdp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lintrayekakdp', 'url'=>array('admin')),
);
?>

<h1>View Lintrayekakdp #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'trayekakdp_id',
		'terminal_id',
		'linter_id',
		'nourut',
	),
)); ?>
