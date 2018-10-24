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
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jalanruas_id'); ?>
		<?php echo $form->textField($model,'jalanruas_id',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subruas'); ?>
		<?php echo $form->textField($model,'subruas',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'panjang'); ?>
		<?php echo $form->textField($model,'panjang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lebar'); ?>
		<?php echo $form->textField($model,'lebar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kab_id'); ?>
		<?php echo $form->textField($model,'kab_id',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipejalan_id'); ?>
		<?php echo $form->textField($model,'tipejalan_id',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jalur'); ?>
		<?php echo $form->textField($model,'jalur'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lajur'); ?>
		<?php echo $form->textField($model,'lajur'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'median'); ?>
		<?php echo $form->textField($model,'median'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hambatan'); ?>
		<?php echo $form->textField($model,'hambatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kapasitas'); ?>
		<?php echo $form->textField($model,'kapasitas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'palawal'); ?>
		<?php echo $form->textField($model,'palawal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'palakhir'); ?>
		<?php echo $form->textField($model,'palakhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bpjkab_id'); ?>
		<?php echo $form->textField($model,'bpjkab_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fungsijalan_id'); ?>
		<?php echo $form->textField($model,'fungsijalan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jalankelas'); ?>
		<?php echo $form->textField($model,'jalankelas',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alinyemen_id'); ?>
		<?php echo $form->textField($model,'alinyemen_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jnsjalan_id'); ?>
		<?php echo $form->textField($model,'jnsjalan_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->