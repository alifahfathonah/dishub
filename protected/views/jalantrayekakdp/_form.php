<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jalantrayekakdp-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>
    <?php $model->trayekakdp_id=$trayekakdp_id ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'trayekakdp_id'); ?>
		<?php echo $form->hiddenField($model,'trayekakdp_id');?>
		<?php echo Trayekakdp::model()->findByPk($model->trayekakdp_id)->nama; ?>
		<?php echo $form->error($model,'trayekakdp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jalan_id'); ?>
		<?php echo $form->textField($model,'jalan_id',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'jalan_id'); ?>
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