<?php
$this->menu=array(
	array('label'=>'Tambah Grup Trayek AKAP', 'url'=>array('create')),
	array('label'=>'Grup Trayek AKAP', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Daftar Grup Trayek AKAP', 'url'=>array('admin')),
);
?>

<h1>Update Grup Trayek AKAP </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>