<?php
$this->breadcrumbs=array(
	'Jalantrayekakdps',
);

$this->menu=array(
	array('label'=>'Create Jalantrayekakdp', 'url'=>array('create')),
	array('label'=>'Manage Jalantrayekakdp', 'url'=>array('admin')),
);
?>

<h1>Jalantrayekakdps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
