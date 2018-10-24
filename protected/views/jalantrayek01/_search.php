<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'trayek_id'); ?>
		<?php echo $form->textField($model,'trayek_id',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jalan_id'); ?>
		<?php echo $form->textField($model,'jalan_id',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nourut'); ?>
		<?php echo $form->textField($model,'nourut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jnstrayek_id'); ?>
		<?php echo $form->textField($model,'jnstrayek_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->