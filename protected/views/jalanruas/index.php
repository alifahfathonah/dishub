<?php
$this->breadcrumbs=array(
	'Jalanruases',
);

$this->menu=array(
	array('label'=>'Tambah Ruas Jalan', 'url'=>array('create')),
	array('label'=>'Daftar Ruas Jalan', 'url'=>array('admin')),
);
?>

<h1>Ruas Jalan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
