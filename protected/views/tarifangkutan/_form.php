<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tarifangkutan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jnstrayek_id'); ?>
		<?php echo $form->dropDownList($model,'jnstrayek_id',
		                                     CHtml::listData(Jnstrayek::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'jnstrayek_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun'); ?>
		<?php echo $form->error($model,'tahun'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarifdasar'); ?>
		<?php echo $form->textField($model,'tarifdasar',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tarifdasar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarifbawah'); ?>
		<?php echo $form->textField($model,'tarifbawah',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tarifbawah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarifatas'); ?>
		<?php echo $form->textField($model,'tarifatas',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tarifatas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->