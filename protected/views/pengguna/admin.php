<?php

$this->menu=array(
	array('label'=>'Tambah Pengguna', 'url'=>array('create')),
);

?>

<h1>Pengguna Sistem</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pengguna-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nama',
		'namalengkap',
		array(
	            'name' => 'tipepengguna_id',
	            'filter' => CHtml::listData(Tipepengguna::model()->findAll(), 'id', 'nama'),
				'value' =>  'Tipepengguna::model()->findByPk($data->tipepengguna_id)->nama',
	        ),
		/*
		'status_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
