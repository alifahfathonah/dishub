<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jalan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jalanruas_id'); ?>
		<?php echo $form->dropDownList($model,'jalanruas_id',
		                                     CHtml::listData(Jalanruas::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'jalanruas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subruas'); ?>
		<?php echo $form->textField($model,'subruas',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'subruas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'panjang'); ?>
		<?php echo $form->textField($model,'panjang'); ?>
		<?php echo $form->error($model,'panjang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lebar'); ?>
		<?php echo $form->textField($model,'lebar'); ?>
		<?php echo $form->error($model,'lebar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kab_id'); ?>
		<?php echo $form->dropDownList($model,'kab_id',
		                                     CHtml::listData(Kabupaten::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'kab_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipejalan_id'); ?>
		<?php echo $form->dropDownList($model,'tipejalan_id',
		                                     CHtml::listData(Tipejalan::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'tipejalan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jalur'); ?>
		<?php echo $form->textField($model,'jalur'); ?>
		<?php echo $form->error($model,'jalur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lajur'); ?>
		<?php echo $form->textField($model,'lajur'); ?>
		<?php echo $form->error($model,'lajur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'median'); ?>
		<?php echo $form->textField($model,'median'); ?>
		<?php echo $form->error($model,'median'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hambatan'); ?>
		<?php echo $form->textField($model,'hambatan'); ?>
		<?php echo $form->error($model,'hambatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kapasitas'); ?>
		<?php echo $form->textField($model,'kapasitas'); ?>
		<?php echo $form->error($model,'kapasitas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'palawal'); ?>
		<?php echo $form->textField($model,'palawal'); ?>
		<?php echo $form->error($model,'palawal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'palakhir'); ?>
		<?php echo $form->textField($model,'palakhir'); ?>
		<?php echo $form->error($model,'palakhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bpjkab_id'); ?>
		<?php echo $form->dropDownList($model,'bpjkab_id',
		                                     CHtml::listData(Kabupaten::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'bpjkab_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fungsijalan_id'); ?>
		<?php echo $form->dropDownList($model,'fungsijalan_id',
		                                     CHtml::listData(Fungsijalan::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'fungsijalan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jalankelas'); ?>
		<?php echo $form->textField($model,'jalankelas',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'jalankelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alinyemen_id'); ?>
		<?php echo $form->dropDownList($model,'alinyemen_id',
		                                     CHtml::listData(Alinyemen::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'alinyemen_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jnsjalan_id'); ?>
		<?php echo $form->dropDownList($model,'jnsjalan_id',
		                                     CHtml::listData(Jnsjalan::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'jnsjalan_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->