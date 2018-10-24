<?php
$this->menu=array(
	array('label'=>'Tambah Pengguna', 'url'=>array('create')),
	array('label'=>'Pengguna', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Daftar Pengguna', 'url'=>array('admin')),
);
?>

<h1>Update Pengguna </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>