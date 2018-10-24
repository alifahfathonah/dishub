<?php

$this->menu=array(
	array('label'=>'Tambah Data Tarif Angkutan', 'url'=>array('create')),
	array('label'=>'Update Data Tarif Angkutan', 'url'=>array('update', 'id1'=>$model->jnstrayek_id,'id2'=>$model->tahun)),
	array('label'=>'Daftar Tarif Angkutan', 'url'=>array('admin')),
);
?>

<h1>Data Tarif Angkutan </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name' => 'jnstrayek_id',
		      'value'=> Jnstrayek::model()->findByPk($model->jnstrayek_id)->nama,
			  ),
		'tahun',
		'tarifdasar',
		'tarifbawah',
		'tarifatas',
	),
)); ?>
