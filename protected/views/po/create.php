<?php
$this->menu=array(
	array('label'=>'Daftar Perusahaan Angkutan (PO)', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Perusahaan Angkutan (PO)</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>