<?php
$this->breadcrumbs=array(
	'Gruptrayekakaps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gruptrayekakap', 'url'=>array('index')),
	array('label'=>'Create Gruptrayekakap', 'url'=>array('create')),
	array('label'=>'View Gruptrayekakap', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Gruptrayekakap', 'url'=>array('admin')),
);
?>

<h1>Update Gruptrayekakap <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>