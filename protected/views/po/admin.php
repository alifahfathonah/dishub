<?php
$this->menu=array(
	
	array('label'=>'Tambah Data PO', 'url'=>array('create')),
);

?>

<h1>Daftar Perusahaan Angkutan (PO)</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'po-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		'alamat',
		array(
	            'name' => 'provinsi_id',
	            'filter' => CHtml::listData(Provinsi::model()->findAll(), 'id', 'nama'),
				'value' =>  'Provinsi::model()->findByPk($data->provinsi_id)->nama',
	        ),
		array(
	            'name' => 'kabupaten_id',
	            'filter' => CHtml::listData(Kabupaten::model()->findAll(), 'id', 'nama'),
				'value' =>  'Kabupaten::model()->findByPk($data->kabupaten_id)->nama',
	        ),
		'namapemilik',
		array(
	            'name' => 'bbh_id',
	            'filter' => CHtml::listData(Bbh::model()->findAll(), 'id', 'nama'),
				'value' =>  'Bbh::model()->findByPk($data->bbh_id)->nama',
	        ),
		'tglakhir',
		'tglkps',	
		/*
		'tglberdiri',
		
		'nowni',
		'kotawni',
		'nogantinama',
		'kotagantinama',
		
		'nonotaris',
		'namanotaris',
		'tglakhir',
		'nosk',
		'tglsk',
		'tglkps',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
