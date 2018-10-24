<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'jnsangkutan_id'); ?>
		<?php echo $form->textField($model,'jnsangkutan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarifdasar'); ?>
		<?php echo $form->textField($model,'tarifdasar',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarifbawah'); ?>
		<?php echo $form->textField($model,'tarifbawah',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarifatas'); ?>
		<?php echo $form->textField($model,'tarifatas',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->