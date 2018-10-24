<?php

$this->menu=array(
	
	array('label'=>'Daftar Grup Trayek AKAP', 'url'=>array('admin')),
);
?>

<h1>Tambah Grup Trayek</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>