<?php
$this->breadcrumbs=array(
	'Penggunas',
);

$this->menu=array(
	array('label'=>'Create Pengguna', 'url'=>array('create')),
	array('label'=>'Manage Pengguna', 'url'=>array('admin')),
);
?>

<h1>Penggunas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
