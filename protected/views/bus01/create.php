<?php
$this->menu=array(
	array('label'=>'Daftar Angkutan Bus Penumpang (AKDP)', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Angkutan Bus Penumpang AKDP</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>