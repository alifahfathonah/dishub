<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'po-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provinsi_id'); ?>
		<?php echo $form->dropDownList($model,'provinsi_id',
		                                     CHtml::listData(Provinsi::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'provinsi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kabupaten_id'); ?>
		<?php echo $form->dropDownList($model,'kabupaten_id',
		                                     CHtml::listData(Kabupaten::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'kabupaten_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telp'); ?>
		<?php echo $form->textField($model,'telp',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tglberdiri'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		      'model'=>$model,
			'attribute'=>'tglberdiri',
			'value'=>$model->tglberdiri,
		      'options'=>array(
		          'showAnim'=>'fold',
			'dateFormat'=>'yy-mm-dd',
 			'defaultDate'=>$model->tglberdiri,
		      ),
	      'htmlOptions'=>array(
             'style'=>'height:20px;'
	      ),
	));?>
		<?php echo $form->error($model,'tglberdiri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namapemilik'); ?>
		<?php echo $form->textField($model,'namapemilik',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'namapemilik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nowni'); ?>
		<?php echo $form->textField($model,'nowni',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nowni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kotawni'); ?>
		<?php echo $form->textField($model,'kotawni',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'kotawni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nogantinama'); ?>
		<?php echo $form->textField($model,'nogantinama',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nogantinama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kotagantinama'); ?>
		<?php echo $form->textField($model,'kotagantinama',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'kotagantinama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bbh_id'); ?>
		<?php echo $form->dropDownList($model,'bbh_id',
		                                     CHtml::listData(Bbh::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'bbh_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nonotaris'); ?>
		<?php echo $form->textField($model,'nonotaris',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nonotaris'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namanotaris'); ?>
		<?php echo $form->textField($model,'namanotaris',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'namanotaris'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tglakhir'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		       'model'=>$model,
			'attribute'=>'tglakhir',
			'value'=>$model->tglakhir,
		      'options'=>array(
		          'showAnim'=>'fold',
			'dateFormat'=>'yy-mm-dd',
 			'defaultDate'=>$model->tglakhir,
		      ),
	      'htmlOptions'=>array(
             'style'=>'height:20px;'
	      ),
	));?>
		<?php echo $form->error($model,'tglakhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nosk'); ?>
		<?php echo $form->textField($model,'nosk',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nosk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tglsk'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		       'model'=>$model,
			'attribute'=>'tglsk',
			'value'=>$model->tglsk,
		      'options'=>array(
		          'showAnim'=>'fold',
			'dateFormat'=>'yy-mm-dd',
 			'defaultDate'=>$model->tglsk,

		      ),
	      'htmlOptions'=>array(
             'style'=>'height:20px;'
	      ),
	));?>
		<?php echo $form->error($model,'tglsk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tglkps'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		       'model'=>$model,
			'attribute'=>'tglkps',
			'value'=>$model->tglkps,
		      'options'=>array(
		          'showAnim'=>'fold',
			'dateFormat'=>'yy-mm-dd',
 			'defaultDate'=>$model->tglkps,
		      ),
	      'htmlOptions'=>array(
             'style'=>'height:20px;'
	      ),
	));?>
		<?php echo $form->error($model,'tglkps'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->