<?php
$this->breadcrumbs=array(
	'Externallinks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Externallink', 'url'=>array('index')),
	array('label'=>'Manage Externallink', 'url'=>array('admin')),
);
?>

<h1>Create Externallink</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>