<?php
$this->menu=array(
	
	array('label'=>'Tambah Trayek AKDP', 'url'=>array('create')),
);

?>
<h1>Pengelolaan Trayek Antar Kota Dalam Provinsi (AKDP) tahun <?php $thn= (int) date("Y"); echo $thn;?></h1>


<?php 
      
     $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'trayekakdp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
	            'name' => 'gruptrayekakdp_id',
	            'filter' => CHtml::listData(Gruptrayekakdp::model()->findAll(), 'id', 'nama'),
				'value' =>  'Gruptrayekakdp::model()->findByPk($data->gruptrayekakdp_id)->nama',
	        ),
		'id',
		'nama',
		array(
	            'name' => 'awal_id',
	            'filter' => CHtml::listData(Terminal::model()->findAll(), 'id', 'nama'),
				'value' =>  'Terminal::model()->findByPk($data->awal_id)->nama',
	        ),
		array(
	            'name' => 'akhir_id',
	            'filter' => CHtml::listData(Terminal::model()->findAll(), 'id', 'nama'),
				'value' =>  'Terminal::model()->findByPk($data->akhir_id)->nama',
	        ),
		'jarak',
		'tambah',
		array( 'header'=>'Tarif Dasar',
		       'type'=>'html',
                'value'=>'number_format($data->gettarifdasar(1),0, ",", ".")',
				'htmlOptions'=>array('style'=>'text-align: right'),
				
		      ),
		array( 'header'=>'Tarif Bawah',
		       'type'=>'html',
                'value'=>'number_format($data->gettarifbawah(1),0, ",", ".")',
				'htmlOptions'=>array('style'=>'text-align: right'),
				
		      ),
		array( 'header'=>'Tarif Atas',
		       'type'=>'html',
                'value'=>'number_format($data->gettarifatas(1),0, ",", ".")',
				'htmlOptions'=>array('style'=>'text-align: right'),
				
		      ),	  
		/*'jnslayantrayek_id',
		'ket',
		'namafile',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
