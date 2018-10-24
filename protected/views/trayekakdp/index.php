<?php
$this->breadcrumbs=array(
	'Trayekakdps',
);

$this->menu=array(
	array('label'=>'Create Trayekakdp', 'url'=>array('create')),
	array('label'=>'Manage Trayekakdp', 'url'=>array('admin')),
);
?>

<h1>Trayekakdps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
