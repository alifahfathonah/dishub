<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jalantrayek-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>
    <?php $model->trayek_id=$trayek_id;
          $model->jnstrayek_id=2; 	
	?>

	<div class="row">
		<?php echo $form->labelEx($model,'trayek_id'); ?>
		<?php echo $form->hiddenField($model,'trayek_id');?>
		<?php echo $form->hiddenField($model,'jnstrayek_id');?>
		<?php echo Trayek::model()->findByAttributes(array('id'=>$trayek_id,'jnstrayek_id'=>2))->nama; ?>
		<?php echo $form->error($model,'trayek_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jalan_id'); ?>
		<?php echo $form->dropDownList($model,'jalan_id',
		                                     CHtml::listData(Jalan::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?>
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