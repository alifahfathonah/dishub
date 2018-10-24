<h1 align="center">Trayek MPU - <?php echo $models->NAMATRA; ?></h1>

<?php

$dataProvider1=new CActiveDataProvider('Mpukpsdaftar', array(
                 'criteria'=>array(
		         'condition'=>'kodetra='.$model->kodetra,
		        	   'order'=>'kodetra ASC',),
                  'pagination'=>array('pageSize'=>20),
                 ));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mpukps-grid',
	'dataProvider'=>$dataProvider1,
	//'filter'=>$model,
	'columns'=>array(
		//'nama',
    array(
			'name' => 'nama',
			'type' =>'raw',
			'value' => 'CHtml::link($data->nama, array("/mpukps/view","id"=>$data->id))',
	    ),
		'alamat',
		array(
    'header'=>'Wilayah'  ,
		'name'=>'NAMAWIL',
		),
    //'NAMAWIL',//lookup tbl kodewilayah
		//'NAMATRA',
		'sifatpel',
	),
)); ?>
