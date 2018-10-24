<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'balai-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->