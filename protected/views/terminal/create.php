<?php


$this->menu=array(
	array('label'=>'Daftar Terminal', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Terminal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>