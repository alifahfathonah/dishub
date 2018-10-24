<?php
$this->breadcrumbs=array(
	'Externallinks'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Externallink', 'url'=>array('index')),
	array('label'=>'Create Externallink', 'url'=>array('create')),
	array('label'=>'Update Externallink', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Externallink', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Externallink', 'url'=>array('admin')),
);
?>

<h1>View Externallink #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'keterangan',
	),
)); ?>
