<?php

$this->menu=array(
	array('label'=>'Pengelolaan Trayek AKAP', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Trayek AKAP</h1>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>