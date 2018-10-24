<?php
$this->breadcrumbs=array(
	'Tarifangkutans'=>array('index'),
	'Manage',
);

$this->menu=array(
	
	array('label'=>'Tambah Data Tarif Angkutan', 'url'=>array('create')),
);


?>

<h1>Daftar Tarif Angkutan</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tarifangkutan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
	            'name' => 'jnstrayek_id',
	            'filter' => CHtml::listData(Jnstrayek::model()->findAll(), 'id', 'nama'),
				'value' =>  'Jnstrayek::model()->findByPk($data->jnstrayek_id)->nama',
	        ),
		'tahun',
		'tarifdasar',
		'tarifbawah',
		'tarifatas',
		array(
			              'class'=>'CButtonColumn',
						  'template'=>'{view} {delete} {update}',
			              'buttons'=>array
                                     (
                                        'view' => array
                                                (
                                                   'label'=>'Lihat',
                                                   'url'=>'Yii::app()->createUrl("tarifangkutan/view", array("id1"=>$data->jnstrayek_id,"id2"=>$data->tahun))',
								  
                                                ),
										'delete' => array
                                                (
                                                   'label'=>'Hapus Tarif',
                                                   'url'=>'Yii::app()->createUrl("tarifangkutan/delete", array("id1"=>$data->jnstrayek_id,"id2"=>$data->tahun))',
								  
                                                ),
						                'update' => array
                                               (
                                                   'label'=>'Update Jalan',
                                                   'url'=>'Yii::app()->createUrl("tarifangkutan/update", array("id1"=>$data->jnstrayek_id,"id2"=>$data->tahun))',
                                               ),
					               ),
			              		   
		            ),
	),
)); ?>
