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
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namalengkap'); ?>
		<?php echo $form->textField($model,'namalengkap',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sandi'); ?>
		<?php echo $form->textField($model,'sandi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipepengguna_id'); ?>
		<?php echo $form->textField($model,'tipepengguna_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_id'); ?>
		<?php echo $form->textField($model,'status_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->