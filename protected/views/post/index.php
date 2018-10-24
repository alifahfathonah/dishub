<?php if(!empty($_GET['tag'])): ?>
<h2>Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h2>
<?php endif; ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
        //'htmlOptions'=>array('class'=>'row-fluid'),
)); ?>
