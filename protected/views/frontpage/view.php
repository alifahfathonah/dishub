<?php
$this->breadcrumbs=array(
	'Frontpages'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Frontpage', 'url'=>array('index')),
	array('label'=>'Create Frontpage', 'url'=>array('create')),
	array('label'=>'Update Frontpage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Frontpage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Frontpage', 'url'=>array('admin')),
);
?>

<h1>View Frontpage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'tags',
		'status',
		'create_time',
		'update_time',
		'author_id',
		'ordering',
		'userid',
	),
)); ?>
