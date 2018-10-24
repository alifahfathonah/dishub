<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengguna-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namalengkap'); ?>
		<?php echo $form->textField($model,'namalengkap',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'namalengkap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sandi'); ?>
		<?php echo $form->passwordField($model,'sandi',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sandi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipepengguna_id'); ?>
		<?php echo $form->dropDownList($model,'tipepengguna_id',
		                                     CHtml::listData(Tipepengguna::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'tipepengguna_id'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->