<?php
$this->breadcrumbs=array(
	'Trayekakdps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Tambah Data Trayek AKDP', 'url'=>array('create')),
	array('label'=>'Lihat Trayek AKDP', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Pengelolaan Trayek AKDP', 'url'=>array('admin')),
);
?>

<h1>Update Data Trayek AKDP </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>