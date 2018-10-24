<?php
$this->breadcrumbs=array(
	'Balai'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tambah Balai', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('balai-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Daftar Balai</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'balai-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>