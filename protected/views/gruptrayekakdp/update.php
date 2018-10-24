<?php
$this->menu=array(
	array('label'=>'Tambah Grup', 'url'=>array('create')),
	array('label'=>'Grup Trayek AKDP', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Daftar Grup Trayek AKDP', 'url'=>array('admin')),
);
?>

<h1>Update Grup Trayek AKDP </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>