<?php
$this->menu=array(
	array('label'=>'Tambah Data Tarif Angkutan', 'url'=>array('create')),
	array('label'=>'Data Tarif Angkutan', 'url'=>array('view', 'id'=>$model->jnstrayek_id)),
	array('label'=>'Daftar Tarif Angkutan', 'url'=>array('admin')),
);
?>

<h1>Update Data Tarif Angkutan </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>