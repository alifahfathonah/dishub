<h1 align="center">Daftar Trayek MPU</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mputrayek-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'KODETRA',
		//'NAMATRA',
		array(
			'name' => 'NAMATRA',
			'type' =>'raw',
			'value' => 'CHtml::link($data->NAMATRA, array("view","id"=>$data->KODETRA))',
	    ),
		//'KODEWIL',

	),
)); ?>
