<?php

$this->menu=array(
	array('label'=>'Tambah Terminal', 'url'=>array('create')),
	array('label'=>'Data Terminal', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Daftar Terminal', 'url'=>array('admin')),
);
?>

<h1>Update Data Terminal </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>