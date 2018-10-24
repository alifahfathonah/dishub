<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl('/trayekme/admin'),
	'method'=>'get',
	'enableAjaxValidation'=>true,
)); ?>
		<?php echo $form->errorSummary($model); ?>

	<div class="span12">
		<?php echo $form->label($model,'dari',array('class'=>'span3')); ?>
		<?php echo $form->textField($model,'dari',array('size'=>16,'class'=>'span7')); ?>
		<?php echo $form->error($model,'dari'); ?>
	</div>

	<div class="span12">
		<?php echo $form->label($model,'tujuan',array('class'=>'span3')); ?>
		<?php echo $form->textField($model,'tujuan',array('size'=>16,'class'=>'span7')); ?>
		<?php echo $form->error($model,'tujuan'); ?>
	</div>

	<div class="row-fluid buttons">
		<?php echo CHtml::submitButton('Cari',array('class'=>'btn btn-pencarian')); ?>
	</div>

<?php $this->endWidget(); ?>


