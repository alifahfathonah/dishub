<?php
$this->menu=array(
	array('label'=>'Daftar Jalan', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Jalan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>