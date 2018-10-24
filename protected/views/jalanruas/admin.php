<?php
$this->breadcrumbs=array(
	'Jalanruas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tambah Ruas Jalan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('jalanruas-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Daftar Ruas Jalan</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jalanruas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		'panjang',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
