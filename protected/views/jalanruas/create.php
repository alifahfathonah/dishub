<?php
$this->breadcrumbs=array(
	'Jalanruases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Daftar Ruas Jalan', 'url'=>array('admin')),
);
?>

<h1>Tambah Ruas Jalan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>