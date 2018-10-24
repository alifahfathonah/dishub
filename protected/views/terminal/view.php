<?php

$this->menu=array(
	array('label'=>'Tambah Terminal', 'url'=>array('create')),
	array('label'=>'Update Terminal', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Daftar Terminal', 'url'=>array('admin')),
);
?>

<h1>Data Terminal </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		array('name' => 'kab_id',
		      'value'=> Kabupaten::model()->findByPk($model->kab_id)->nama,
			  ),
	),
)); ?>
