<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'awal_id'); ?>
		<?php echo $form->textField($model,'awal_id',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'akhir_id'); ?>
		<?php echo $form->textField($model,'akhir_id',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gruptrayekakdp_id'); ?>
		<?php echo $form->textField($model,'gruptrayekakdp_id',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jarak'); ?>
		<?php echo $form->textField($model,'jarak'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tambah'); ?>
		<?php echo $form->textField($model,'tambah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jnslayantrayek_id'); ?>
		<?php echo $form->textField($model,'jnslayantrayek_id',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ket'); ?>
		<?php echo $form->textField($model,'ket',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namafile'); ?>
		<?php echo $form->textField($model,'namafile',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->