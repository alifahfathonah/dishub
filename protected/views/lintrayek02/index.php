<?php
$this->breadcrumbs=array(
	'Lintrayeks',
);

$this->menu=array(
	array('label'=>'Create Lintrayek', 'url'=>array('create')),
	array('label'=>'Manage Lintrayek', 'url'=>array('admin')),
);
?>

<h1>Lintrayeks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
