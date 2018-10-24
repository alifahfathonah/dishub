<?php

$this->menu=array(
	array('label'=>'Tambah Data Jalan', 'url'=>array('create')),
);

?>

<h1>Daftar Data Jalan</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jalan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		array(
	            'name' => 'jalanruas_id',
	            'filter' => CHtml::listData(Jalanruas::model()->findAll(), 'id', 'nama'),
				'value' =>  'Jalanruas::model()->findByPk($data->jalanruas_id)->nama',
	        ),
		'panjang',
		'lebar',
		array(
	            'name' => 'kab_id',
	            'filter' => CHtml::listData(Kabupaten::model()->findAll(), 'id', 'nama'),
				'value' =>  'Kabupaten::model()->findByPk($data->kab_id)->nama',
	        ),
		array(
	            'name' => 'tipejalan_id',
	            'filter' => CHtml::listData(Tipejalan::model()->findAll(), 'id', 'nama'),
				'value' =>  'Tipejalan::model()->findByPk($data->tipejalan_id)->nama',
	        ),
		array(
	            'name' => 'alinyemen_id',
	            'filter' => CHtml::listData(Alinyemen::model()->findAll(), 'id', 'nama'),
				'value' =>  'Alinyemen::model()->findByPk($data->alinyemen_id)->nama',
	        ),			
		/*
		'kab_id',
		'tipejalan_id',
		'jalur',
		'lajur',
		'median',
		'hambatan',
		'kapasitas',
		'palawal',
		'palakhir',
		'bpjkab_id',
		'fungsijalan_id',
		'jalankelas',
		'alinyemen_id',
		'jnsjalan_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
