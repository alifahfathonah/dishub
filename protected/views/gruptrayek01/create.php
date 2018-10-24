<?php
$this->menu=array(
	array('label'=>'Daftar Grup Trayek AKDP', 'url'=>array('admin')),
);
?>

<h1>Tambah Grup Trayek AKDP</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>