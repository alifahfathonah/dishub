<?php

$this->menu=array(
	array('label'=>'Pengelolaan Trayek AKDP', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Trayek AKDP</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>