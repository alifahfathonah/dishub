
<?php if(!empty($_GET['tag'])): ?>
<h1>Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
<?php endif; ?>

<?php 
$data=$dataProvider->getData();
		if(($n=count($data))>0)
		{
	 $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
'enablePagination'=>false,
		'template'=>"{items}\n{pager}",
		)); 
	}
?>
