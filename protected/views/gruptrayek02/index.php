<?php
$this->breadcrumbs=array(
	'Gruptrayeks',
);

$this->menu=array(
	array('label'=>'Create Gruptrayek', 'url'=>array('create')),
	array('label'=>'Manage Gruptrayek', 'url'=>array('admin')),
);
?>

<h1>Gruptrayeks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
