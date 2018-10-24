
<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('trayekme-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="form" >
<?php //$this->renderPartial('application.views.trayekme._search',array('model'=>$model,)); ?>
</div><!-- search-form -->
<div height="100px">
<?php 
    $mydata = $model->search()->getData();
	$jml = count($mydata);
	
    if ($jml>=1)
       {	
        	$this->widget('zii.widgets.grid.CGridView', array(
	                  'id'=>'trayekme-grid',
	                  'dataProvider'=>$model->search(),
	                  'columns'=>array(
		                 'id',
		                 array(
	                          'name' => 'nama',
				              'type'=>'raw',
				              'value' =>   'CHtml::link($data->nama, array("trayekme/view","id"=>$data->id),array("target=>_blank") )',
	                          ),
		                'jarak',
		                'ket',
		                array(
	                          'name' => 'jnstrayek_id',
				             'value' =>  'Jnstrayek::model()->findByPk($data->jnstrayek_id)->nama',
	                         ),
	                     ),
               )); 
        }
?>
</div>
	
	<div class="span-24" align="center">
   
	</div>
