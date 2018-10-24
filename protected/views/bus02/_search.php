<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nopolisi'); ?>
		<?php echo $form->textField($model,'nopolisi',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'po_id'); ?>
		<?php echo $form->textField($model,'po_id',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nokps'); ?>
		<?php echo $form->textField($model,'nokps',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nostuk'); ?>
		<?php echo $form->textField($model,'nostuk',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgluji'); ?>
		<?php echo $form->textField($model,'tgluji'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'merk'); ?>
		<?php echo $form->textField($model,'merk',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipe'); ?>
		<?php echo $form->textField($model,'tipe',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thnbuat'); ?>
		<?php echo $form->textField($model,'thnbuat',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nochasis'); ?>
		<?php echo $form->textField($model,'nochasis',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomesin'); ?>
		<?php echo $form->textField($model,'nomesin',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nolambung'); ?>
		<?php echo $form->textField($model,'nolambung',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duduk'); ?>
		<?php echo $form->textField($model,'duduk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barang'); ?>
		<?php echo $form->textField($model,'barang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trayek_id'); ?>
		<?php echo $form->textField($model,'trayek_id',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spk'); ?>
		<?php echo $form->textField($model,'spk',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cetak'); ?>
		<?php echo $form->textField($model,'cetak',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglkps'); ?>
		<?php echo $form->textField($model,'tglkps'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jnsangkutan_id'); ?>
		<?php echo $form->textField($model,'jnsangkutan_id',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglupdate'); ?>
		<?php echo $form->textField($model,'tglupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kps'); ?>
		<?php echo $form->textField($model,'kps',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->