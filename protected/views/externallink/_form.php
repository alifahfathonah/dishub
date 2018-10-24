<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'externallink-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php $this->widget('application.extensions.fckeditor.FCKEditorWidget',array(
    "model"=>$model,                # Data-Model
    "attribute"=>'content',         # Attribute in the Data-Model
    "height"=>'400px',
    "width"=>'100%',
	"skin"=>'office2003',
    "toolbarSet"=>'Default',          # EXISTING(!) Toolbar (see: fckeditor.js)
    "fckeditor"=>Yii::app()->basePath."/../fckeditor/fckeditor.php",
                                    # Path to fckeditor.php
    "fckBasePath"=>Yii::app()->baseUrl."/fckeditor/",
                                    # Realtive Path to the Editor (from Web-Root)
    "config" => array(
        "EditorAreaCSS"=>Yii::app()->baseUrl.'/css/index.css',),
                                    # http://docs.fckeditor.net/FCKeditor_2.x/Developers_Guide/Configuration/Configuration_Options
                                    # Additional Parameter (Can't configure a Toolbar dynamicly)
    ) ); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->