<?php
$this->breadcrumbs=array(
	'Frontpages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Frontpage', 'url'=>array('index')),
	array('label'=>'Manage Frontpage', 'url'=>array('admin')),
);
?>

<h1>Create Frontpage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>