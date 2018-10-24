<?php
$this->breadcrumbs=array(
	'Balai',
);

$this->menu=array(
	array('label'=>'Tambah Balai', 'url'=>array('create')),
	array('label'=>'Daftar Balai', 'url'=>array('admin')),
);
?>

<h1>Daftar Balai</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
