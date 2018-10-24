<?php
$this->breadcrumbs=array(
	'Balai'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Tambah Balai', 'url'=>array('create')),
	array('label'=>'View Balai', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Daftar Balai', 'url'=>array('admin')),
);
?>

<h1>Update Balai <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>