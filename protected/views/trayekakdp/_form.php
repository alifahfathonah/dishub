<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trayekakdp-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>
    <?php $model->tmpnamafile = $model->namafile;
	      
    ?>
	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'awal_id'); ?>
		<?php echo $form->dropDownList($model,'awal_id',
		                                     CHtml::listData(Terminal::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'awal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'akhir_id'); ?>
		<?php echo $form->dropDownList($model,'akhir_id',
		                                     CHtml::listData(Terminal::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'akhir_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gruptrayekakdp_id'); ?>
		<?php echo $form->dropDownList($model,'gruptrayekakdp_id',
		                                     CHtml::listData(Gruptrayekakdp::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'gruptrayekakdp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jarak'); ?>
		<?php echo $form->textField($model,'jarak'); ?>
		<?php echo $form->error($model,'jarak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tambah'); ?>
		<?php echo $form->textField($model,'tambah'); ?>
		<?php echo $form->error($model,'tambah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jnslayantrayek_id'); ?>
		<?php echo $form->dropDownList($model,'jnslayantrayek_id',
		                                     CHtml::listData(Jnslayantrayek::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'jnslayantrayek_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ket'); ?>
		<?php echo $form->textField($model,'ket',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ket'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'tmpnamafile');?>
		<?php echo $form->labelEx($model,'namafile'); ?>
		<?php echo CHtml::activeFileField($model, 'namafile'); ?>
		<?php echo $form->error($model,'namafile'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->