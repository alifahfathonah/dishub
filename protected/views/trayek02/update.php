<?php
$this->menu=array(
	array('label'=>'Tambah Data Trayek AKAP', 'url'=>array('create')),
	array('label'=>'Lihat Trayek AKAP', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Pengelolaan Trayek AKAP', 'url'=>array('admin')),
);
?>

<h1>Update Data Trayek AKAP </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>