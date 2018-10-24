<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bus-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nopolisi'); ?>
		<?php echo $form->textField($model,'nopolisi',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nopolisi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'po_id'); ?>
		<?php echo $form->dropDownList($model,'po_id',
		                                     CHtml::listData(Po::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'po_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nokps'); ?>
		<?php echo $form->textField($model,'nokps',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nokps'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nostuk'); ?>
		<?php echo $form->textField($model,'nostuk',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'nostuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgluji'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		       'model'=>$model,
			'attribute'=>'tgluji',
			'value'=>$model->tgluji,
		      'options'=>array(
		          'showAnim'=>'fold',
			'dateFormat'=>'yy-mm-dd',
 			'defaultDate'=>$model->tgluji,
		      ),
	      'htmlOptions'=>array(
             'style'=>'height:20px;'
	      ),
	));?>
		<?php echo $form->error($model,'tgluji'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'merk'); ?>
		<?php echo $form->textField($model,'merk',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'merk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipe'); ?>
		<?php echo $form->textField($model,'tipe',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'tipe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thnbuat'); ?>
		<?php echo $form->textField($model,'thnbuat',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'thnbuat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nochasis'); ?>
		<?php echo $form->textField($model,'nochasis',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nochasis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomesin'); ?>
		<?php echo $form->textField($model,'nomesin',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nomesin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nolambung'); ?>
		<?php echo $form->textField($model,'nolambung',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'nolambung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duduk'); ?>
		<?php echo $form->textField($model,'duduk'); ?>
		<?php echo $form->error($model,'duduk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barang'); ?>
		<?php echo $form->textField($model,'barang'); ?>
		<?php echo $form->error($model,'barang'); ?>
	</div>

	<div class="row">
		<?php $q = new CDbCriteria( array(
                    'condition' => "jnstrayek_id = :jnstrayek_id",      // DON'T do it this way!
                    'params'    => array(':jnstrayek_id' => 1)
                  ));
		?>		  
		<?php echo $form->labelEx($model,'trayek_id'); ?> <BR>
		<?php echo $form->dropDownList($model,'trayek_id',
		                                     CHtml::listData(Trayek::model()->findAll($q), 'id', 'nama'),
											 NULL,null); ?> 
		<?php echo $form->error($model,'trayek_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spk'); ?>
		<?php echo $form->textField($model,'spk',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'spk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cetak'); ?>
		<?php echo $form->textField($model,'cetak',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'cetak'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jnsangkutan_id'); ?>
		<?php echo $form->dropDownList($model,'jnsangkutan_id',
		                                     CHtml::listData(Jnsangkutan::model()->findAll(), 'id', 'nama'),
											 NULL,NULL); ?> 
		<?php echo $form->error($model,'jnsangkutan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tglupdate'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		       'model'=>$model,
			'attribute'=>'tglupdate',
			'value'=>$model->tglupdate,
		      'options'=>array(
		          'showAnim'=>'fold',
			'dateFormat'=>'yy-mm-dd',
 			'defaultDate'=>$model->tglupdate,
		      ),
	      'htmlOptions'=>array(
             'style'=>'height:20px;'
	      ),
	));?>
		<?php echo $form->error($model,'tglupdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kps'); ?>
		<?php echo $form->textField($model,'kps',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'kps'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->