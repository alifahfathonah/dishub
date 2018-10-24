<?php
$this->breadcrumbs=array(
	'Trayeks',
);

$this->menu=array(
	array('label'=>'Create Trayek', 'url'=>array('create')),
	array('label'=>'Manage Trayek', 'url'=>array('admin')),
);
?>

<h1>Trayeks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
