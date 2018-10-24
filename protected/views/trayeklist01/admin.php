<h1 align="center">DAFTAR TRAYEK AKDP</h1>

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
		array(
	                          'name' => 'nama',
				              'type' =>'raw',
				              'value' => 'CHtml::link($data->nama, array("view","id"=>$data->id),array("target"=>"_blank"))',
	                          ),
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
	),
)); ?>
