<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trayekakdp_id'); ?>
		<?php echo $form->textField($model,'trayekakdp_id',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terminal_id'); ?>
		<?php echo $form->textField($model,'terminal_id',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'linter_id'); ?>
		<?php echo $form->textField($model,'linter_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nourut'); ?>
		<?php echo $form->textField($model,'nourut'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->