<?php
$this->breadcrumbs=array(
	'Externallinks',
);

$this->menu=array(
	array('label'=>'Create Externallink', 'url'=>array('create')),
	array('label'=>'Manage Externallink', 'url'=>array('admin')),
);
?>

<h1>Externallinks</h1>

<?php 
$criteria2=new CDbCriteria(array(
			//'condition'=>'status='.Post::STATUS_PUBLISHED,
			//'condition'=>'frontpage=1',
			'order'=>'id DESC',
			//'with'=>'commentCount',
		));
		$dataProvider2=new CActiveDataProvider('Post', array(
			'criteria'=>$criteria2,
		)); 
	$datax=$dataProvider2->getData();
	print_r($datax->content);
	
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
