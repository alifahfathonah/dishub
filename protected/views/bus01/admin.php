<?php
$this->menu=array(
	array('label'=>'Tambah Data Bus AKDP', 'url'=>array('create')),
);


?>

<h1>Daftar Angkutan Bus Penumpang Antar Kota Dalam Provinsi (AKDP)</h1>



<?php 
   
    $q = new CDbCriteria( array(
                    'condition' => "jnstrayek_id = :jnstrayek_id",      // DON'T do it this way!
                    'params'    => array(':jnstrayek_id' => 1)
                  ));


    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bus-grid',
	'dataProvider'=>$model->search01(),
	'filter'=>$model,
	'columns'=>array(
		'nopolisi',
		array(
	            'name' => 'po_id',
	            'filter' => CHtml::listData(Po::model()->findAll(), 'id', 'nama'),
				'value' =>  'Po::model()->findByPk($data->po_id)->nama',
	        ),
		'merk',
		'nolambung',
		'duduk',
		'barang',
		array(
	            'name' => 'trayek_id',
	            'filter' => CHtml::listData(Trayek::model()->findAll($q), 'id', 'nama'),
				'value' =>  'Trayek::model()->findByPk($data->trayek_id)->nama',
	        ),
		array(
	            'name' => 'jnsangkutan_id',
	            'filter' => CHtml::listData(Jnsangkutan::model()->findAll(), 'id', 'nama'),
				'value' =>  'Jnsangkutan::model()->findByPk($data->jnsangkutan_id)->nama',
	        ),
		'tglupdate',
		
		/*
		'tipe',
		'thnbuat',
		'nochasis',
		'nomesin',
		'nolambung',
		'duduk',
		'barang',
		'trayek_id',
		'spk',
		'cetak',
		'tglkps',
		'status',
		'jnsangkutan_id',
		'tglupdate',
		'kps',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
