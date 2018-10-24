<?php
$this->breadcrumbs=array(
	'Gruptrayekakaps',
);

$this->menu=array(
	array('label'=>'Create Gruptrayekakap', 'url'=>array('create')),
	array('label'=>'Manage Gruptrayekakap', 'url'=>array('admin')),
);
?>

<h1>Gruptrayekakaps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
