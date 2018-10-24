<?php
$this->breadcrumbs=array(
	'Manage Posts',
);
$this->layout='main';
?>
<h1>Manage Posts</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'title',
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->title), $data->url)'
		),
		array(
			'name'=>'status',
			'value'=>'Lookup::item("PostStatus",$data->status)',
			'filter'=>Lookup::items('PostStatus'),
		),
		array(
			'name'=>'create_time',
			'type'=>'datetime',
			'filter'=>false,
		),
		array(
		'class'=>'CButtonColumn',
		'template'=>'{update}{delete}',
		'buttons'=>array(
			'update'=>array(
                                'url'=>'$this->grid->controller->createUrl("/post/update", array("id"=>$data->id))',
                                //'click'=>'function(){$("#cru-frame").attr("src",$(this).attr("href")); $("#cru-dialog").dialog("open");  return false;}',
                                //'visible'=>'($data->id===null)?false:true;'
                                ),
			
			'delete'=>array(
                                'url'=>'$this->grid->controller->createUrl("/post/delete", array("id"=>$data->primaryKey))',
                                ),
		),
	),

	),
)); ?>
