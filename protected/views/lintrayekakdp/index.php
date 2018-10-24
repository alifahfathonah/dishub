<?php
$this->breadcrumbs=array(
	'Lintrayekakdps',
);

$this->menu=array(
	array('label'=>'Create Lintrayekakdp', 'url'=>array('create')),
	array('label'=>'Manage Lintrayekakdp', 'url'=>array('admin')),
);
?>

<h1>Lintrayekakdps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
