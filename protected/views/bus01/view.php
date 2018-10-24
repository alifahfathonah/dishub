<?php

$this->menu=array(
	array('label'=>'Tambah Data Bus', 'url'=>array('create')),
	array('label'=>'Update Data Bus', 'url'=>array('update', 'id'=>$model->nopolisi)),
	array('label'=>'Daftar Angkutan Bus Penumpang (AKDP)', 'url'=>array('admin')),
);
?>

<h1>Data Bus AKDP </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nopolisi',
		array('name' => 'po_id',
		      'value'=> Po::model()->findByPk($model->po_id)->nama,
			  ),
		'nokps',
		'nostuk',
		'tgluji',
		'merk',
		'tipe',
		'thnbuat',
		'nochasis',
		'nomesin',
		'nolambung',
		'duduk',
		'barang',
		array('name' => 'trayek_id',
		      'value'=> Trayek::model()->findByPk($model->trayek_id)->nama,
			  ),
		'spk',
		'cetak',
		'tglkps',
		'status',
		'jnsangkutan_id',
		array('name' => 'jnsangkutan_id',
		      'value'=> Jnsangkutan::model()->findByPk($model->jnsangkutan_id)->nama,
			  ),
		'tglupdate',
		'kps',
	),
)); ?>
