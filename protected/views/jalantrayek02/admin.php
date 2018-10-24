
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jalantrayek-grid',
	'dataProvider'=>$model->search01(),
	'filter'=>$model,
	'columns'=>array(
		'trayek_id',
		'jalan_id',
		'nourut',
		'jnstrayek_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
