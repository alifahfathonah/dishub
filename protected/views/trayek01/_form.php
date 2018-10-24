<div class="wide form">
<?php 

     $q = new CDbCriteria( array(
                    'condition' => "jnstrayek_id = :jnstrayek_id",      // DON'T do it this way!
                    'params'    => array(':jnstrayek_id' => 1)
                  ));
     $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trayek-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php $model->tmpnamafile = $model->namafile; 
	      $model->jnstrayek_id=1; ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>12,'maxlength'=>12)); ?>
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
		<?php echo $form->labelEx($model,'gruptrayek_id'); ?>
		<?php echo $form->dropDownList($model,'gruptrayek_id',
		                                     CHtml::listData(Gruptrayek::model()->findAll($q), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'gruptrayek_id'); ?>
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
		<?php echo $form->hiddenField($model,'jnstrayek_id');?>
		<?php echo $form->labelEx($model,'namafile'); //echo '<img src="../masterpeta/'.$model->namafile.'" width="200px"/>';?>
		<?php echo CHtml::activeFileField($model, 'namafile'); ?>
		<?php echo $form->error($model,'namafile'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->