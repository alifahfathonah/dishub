<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lintrayekakdp-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda  <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php $model->trayekakdp_id=$trayekakdp_id ?>

	<div class="row">
		
		<?php echo $form->labelEx($model,'trayekakdp_id'); ?>
		<?php echo $form->hiddenField($model,'trayekakdp_id');?>
		<?php echo Trayekakdp::model()->findByPk($model->trayekakdp_id)->nama; ?>
		<?php echo $form->error($model,'trayekakdp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terminal_id'); ?>
		<?php echo $form->dropDownList($model,'terminal_id',
		                                     CHtml::listData(Terminal::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'terminal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linter_id'); ?>
		<?php echo $form->dropDownList($model,'linter_id',
		                                     CHtml::listData(Linter::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'linter_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nourut'); ?>
		<?php echo $form->textField($model,'nourut'); ?>
		<?php echo $form->error($model,'nourut'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->