<?php
$this->menu=array(
	array('label'=>'Daftar Angkutan Bus Penumpang (AKAP)', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Angkutan Bus Penumpang AKAP</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>