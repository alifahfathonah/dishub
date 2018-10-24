<?php
$this->menu=array(
	array('label'=>'Tambah Data Bus', 'url'=>array('create')),
	array('label'=>'Data Bus', 'url'=>array('view', 'id'=>$model->nopolisi)),
	array('label'=>'Daftar Angkutan Bus Penumpang (AKDP)', 'url'=>array('admin')),
);
?>

<h1>Update Bus <?php echo $model->nopolisi; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>