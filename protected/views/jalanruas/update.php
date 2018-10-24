<?php
$this->breadcrumbs=array(
	'Jalanruases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Tambah Ruas Jalan', 'url'=>array('create')),
	array('label'=>'View Ruas Jalan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Daftar Ruas Jalan', 'url'=>array('admin')),
);
?>

<h1>Update Ruas Jalan <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>