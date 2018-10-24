<?php
$this->menu=array(
	
	array('label'=>'Tambah Data Jalan', 'url'=>array('create')),
	array('label'=>'Data Jalan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Daftar Jalan', 'url'=>array('admin')),
);
?>

<h1>Update Data Jalan </h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>