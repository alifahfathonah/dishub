<?php
$this->menu=array(
	array('label'=>'Tambah Terminal', 'url'=>array('create')),
);

?>

<h1>Daftar Terminal</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'terminal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		array(
	            'name' => 'kab_id',
	            'filter' => CHtml::listData(Kabupaten::model()->findAll(), 'id', 'nama'),
				'value' =>  'Kabupaten::model()->findByPk($data->kab_id)->nama',
	        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
