<?php
$this->breadcrumbs=array(
	'Externallinks'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Externallink', 'url'=>array('index')),
	array('label'=>'Create Externallink', 'url'=>array('create')),
	array('label'=>'View Externallink', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Externallink', 'url'=>array('admin')),
);
?>

<h1>Update Externallink <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>