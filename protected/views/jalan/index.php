<?php
$this->breadcrumbs=array(
	'Jalans',
);

$this->menu=array(
	array('label'=>'Create Jalan', 'url'=>array('create')),
	array('label'=>'Manage Jalan', 'url'=>array('admin')),
);
?>

<h1>Jalans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
