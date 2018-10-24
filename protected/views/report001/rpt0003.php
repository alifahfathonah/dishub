<h1>Daftar Trayek Antar Kota Dalam Provinsi (AKDP) tahun <?php $thn= (int) date("Y"); echo $thn;?></h1>
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
		array(
	                          'name' => 'nama',
				              'type'=>'raw',
				              'value' =>   'CHtml::link($data->nama, array("rpt0003a","id"=>$data->id),array(target=>_blank) )',
	         ),
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
     ),
)); 		
?>	