<?php
$this->menu=array(
	array('label'=>'Tambah Pengguna', 'url'=>array('create')),
	array('label'=>'Koreksi Data ini', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Daftar Pengguna', 'url'=>array('admin')),
);
?>

<h1>Rincian Pengguna </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'namalengkap',
		array('name' => 'tipepengguna_id',
		      'value'=> Tipepengguna::model()->findByPk($model->tipepengguna_id)->nama,
			  ),
	),
)); ?>
