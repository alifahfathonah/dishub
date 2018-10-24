<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'provinsi_id'); ?>
		<?php echo $form->textField($model,'provinsi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kabupaten_id'); ?>
		<?php echo $form->textField($model,'kabupaten_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telp'); ?>
		<?php echo $form->textField($model,'telp',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglberdiri'); ?>
		<?php echo $form->textField($model,'tglberdiri'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namapemilik'); ?>
		<?php echo $form->textField($model,'namapemilik',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nowni'); ?>
		<?php echo $form->textField($model,'nowni',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kotawni'); ?>
		<?php echo $form->textField($model,'kotawni',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nogantinama'); ?>
		<?php echo $form->textField($model,'nogantinama',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kotagantinama'); ?>
		<?php echo $form->textField($model,'kotagantinama',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bbh_id'); ?>
		<?php echo $form->textField($model,'bbh_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nonotaris'); ?>
		<?php echo $form->textField($model,'nonotaris',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namanotaris'); ?>
		<?php echo $form->textField($model,'namanotaris',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglakhir'); ?>
		<?php echo $form->textField($model,'tglakhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nosk'); ?>
		<?php echo $form->textField($model,'nosk',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglsk'); ?>
		<?php echo $form->textField($model,'tglsk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglkps'); ?>
		<?php echo $form->textField($model,'tglkps'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->