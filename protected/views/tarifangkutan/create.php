<?php

$this->menu=array(
	
	array('label'=>'Daftar Tarif Angkutan', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Tarif Angkutan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>