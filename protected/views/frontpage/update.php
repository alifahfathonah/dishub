<?php
$this->breadcrumbs=array(
	'Frontpages'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Frontpage', 'url'=>array('index')),
	array('label'=>'Create Frontpage', 'url'=>array('create')),
	array('label'=>'View Frontpage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Frontpage', 'url'=>array('admin')),
);
?>

<h1>Update Frontpage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>