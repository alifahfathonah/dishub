<?php
$this->breadcrumbs=array(
	'Lintrayeks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Lintrayek', 'url'=>array('index')),
	array('label'=>'Create Lintrayek', 'url'=>array('create')),
	array('label'=>'Update Lintrayek', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Lintrayek', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lintrayek', 'url'=>array('admin')),
);
?>

<h1>View Lintrayek #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'trayek_id',
		'jnstrayek_id',
		'terminal_id',
		'linter_id',
		'nourut',
	),
)); ?>
