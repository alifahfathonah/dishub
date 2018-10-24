<?php
$this->breadcrumbs=array(
	'Jalantrayeks',
);

$this->menu=array(
	array('label'=>'Create Jalantrayek', 'url'=>array('create')),
	array('label'=>'Manage Jalantrayek', 'url'=>array('admin')),
);
?>

<h1>Jalantrayeks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
