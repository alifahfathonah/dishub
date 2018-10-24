<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lintrayek-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda  <span class="required">*</span> harus diisi.</p>
	<?php echo $form->errorSummary($model); ?>
	<?php if($this->getAction()->getId()=='create'){$trayek_id=$_GET['id'];} if($this->getAction()->getId()=='update'){$trayek_id=$_GET['trayek_id'];}
		$model->trayek_id=$trayek_id;
          $model->jnstrayek_id=1;	?>

	<div class="row">
		<?php echo $form->labelEx($model,'trayek_id'); ?>
		<?php echo $form->hiddenField($model,'trayek_id');?>
		<?php echo $form->hiddenField($model,'jnstrayek_id');?>
		<?php echo Trayek::model()->findByPk($model->trayek_id)->nama; ?>
		<?php echo $form->error($model,'trayek_id'); ?>
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