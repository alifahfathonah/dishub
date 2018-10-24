<?php
$this->breadcrumbs=array(
	'Gruptrayekakdps',
);

$this->menu=array(
	array('label'=>'Create Gruptrayekakdp', 'url'=>array('create')),
	array('label'=>'Manage Gruptrayekakdp', 'url'=>array('admin')),
);
?>

<h1>Gruptrayekakdps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
