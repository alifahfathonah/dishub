<?php
$this->breadcrumbs=array(
	'Tarifangkutans',
);

$this->menu=array(
	array('label'=>'Create Tarifangkutan', 'url'=>array('create')),
	array('label'=>'Manage Tarifangkutan', 'url'=>array('admin')),
);
?>

<h1>Tarifangkutans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
