<?php
$this->menu=array(
	
	array('label'=>'Tambah Trayek AKDP', 'url'=>array('create')),
);

?>
<h1>Pengelolaan Trayek Antar Kota Dalam Provinsi (AKDP) tahun <?php $thn= (int) date("Y"); echo $thn;?></h1>

<?php 

    $q = new CDbCriteria( array(
                    'condition' => "jnstrayek_id = :jnstrayek_id",      // DON'T do it this way!
                    'params'    => array(':jnstrayek_id' => 1)
                  ));
				  
    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'trayek-grid',
	'dataProvider'=>$model->search01(),
	'filter'=>$model,
	'columns'=>array(
		array(
	            'name' => 'gruptrayek_id',
	            'filter' => CHtml::listData(Gruptrayek::model()->findAll($q), 'id', 'nama'),
				'value' =>  'Gruptrayek::model()->findByPk($data->gruptrayek_id)->nama',
	        ),
		'id',
		'nama',
		'jarak',
		array( 'header'=>'Tarif Dasar',
		       'type'=>'html',
                'value'=>'number_format($data->gettarif(1,1),0, ",", ".")',
				'htmlOptions'=>array('style'=>'text-align: right'),
				
		      ),
		array( 'header'=>'Tarif Bawah',
		       'type'=>'html',
                'value'=>'number_format($data->gettarif(1,2),0, ",", ".")',
				'htmlOptions'=>array('style'=>'text-align: right'),
				
		      ),
		array( 'header'=>'Tarif Atas',
		       'type'=>'html',
                'value'=>'number_format($data->gettarif(1,3),0, ",", ".")',
				'htmlOptions'=>array('style'=>'text-align: right'),
				
		      ),
		/*
		'tambah',
		'jnslayantrayek_id',
		'ket',
		'namafile',
		'jnstrayek_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
