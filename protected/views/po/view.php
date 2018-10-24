<?php
$this->menu=array(
	array('label'=>'Tambah Data Perusahaan Angkutan (PO)', 'url'=>array('create')),
	array('label'=>'Update Data Perusahaan Angkutan (PO)', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Daftar Perusahaan Angkutan (PO)', 'url'=>array('admin')),
);
?>

<h1>Data Perusahaan Angkutan (PO)</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'alamat',
		array('name' => 'provinsi_id',
		      'value'=> Provinsi::model()->findByPk($model->provinsi_id)->nama,
			  ),
		array('name' => 'kabupaten_id',
		      'value'=> Kabupaten::model()->findByPk($model->kabupaten_id)->nama,
			  ),	  
		'telp',
		'tglberdiri',
		'namapemilik',
		'nowni',
		'kotawni',
		'nogantinama',
		'kotagantinama',
		array('name' => 'bbh_id',
		      'value'=> Bbh::model()->findByPk($model->bbh_id)->nama,
			  ),
		'nonotaris',
		'namanotaris',
		'tglakhir',
		'nosk',
		'tglsk',
		'tglkps',
	),
)); ?>
