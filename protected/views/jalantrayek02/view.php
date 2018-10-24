<?php
$this->breadcrumbs=array(
	'Jalantrayeks'=>array('index'),
	$model->trayek_id,
);

$this->menu=array(
	array('label'=>'List Jalantrayek', 'url'=>array('index')),
	array('label'=>'Create Jalantrayek', 'url'=>array('create')),
	array('label'=>'Update Jalantrayek', 'url'=>array('update', 'id'=>$model->trayek_id)),
	array('label'=>'Delete Jalantrayek', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->trayek_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jalantrayek', 'url'=>array('admin')),
);
?>

<h1>View Jalantrayek #<?php echo $model->trayek_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'trayek_id',
		'jalan_id',
		'nourut',
		'jnstrayek_id',
	),
)); ?>
