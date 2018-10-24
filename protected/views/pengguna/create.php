<?php
$this->menu=array(
	array('label'=>'Daftar Pengguna', 'url'=>array('admin')),
);
?>

<h1>Tambah Pengguna</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>