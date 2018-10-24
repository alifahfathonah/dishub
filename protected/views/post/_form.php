<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo CHtml::errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>80,'maxlength'=>128)); ?>
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
<?php /* $this->widget('application.extensions.tinymce.ETinyMce',
  array(
	'model'=>$model,
	'attribute'=>'content',
                    'useSwitch' => true,
                    'editorTemplate'=>'full')); */?>
	
	<div class="row">
		<?php if(!empty($model->image)) {?><img src="<?php echo Yii::app()->baseUrl.'/images/image/artikel/'.$model->image;?>" width="200px"><?php } ?>
		<?php $model->tmpimage = $model->image;
		echo $form->hiddenField($model,'tmpimage');?>
		<?php echo $form->labelEx($model, 'image');
		echo $form->fileField($model, 'image');
		echo $form->error($model, 'image');
		?>
	</div>
<div class="row">
<?php echo $form->labelEx($model,'create_time'); ?>
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model'=>$model,
    'attribute'=>'create_time',
    'name'=>'Post[create_time]',
    'options'=>array(
        'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
        'showOn'=>'button', // 'focus', 'button', 'both'
         'dateFormat'=>'yy-mm-dd',

    ),
));
?>
<?php //echo $form->textField($model,'create_time'); ?>
</div>
<div class="row">
<?php echo $form->labelEx($model,'update_time'); ?>
    <?php
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model'=>$model,
    'attribute'=>'update_time',
    'name'=>'Post[update_time]',
    'options'=>array(
        'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
        'showOn'=>'button', // 'focus', 'button', 'both'
         'dateFormat'=>'yy-mm-dd',

    ),
));
?>
<?php //echo $form->textField($model,'update_time'); ?>
</div>
	<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php $this->widget('CAutoComplete', array(
			'model'=>$model,
			'attribute'=>'tags',
			'url'=>array('suggestTags'),
			'multiple'=>true,
			'htmlOptions'=>array('size'=>50),
		)); ?>
		<p class="hint">Please separate different tags with commas.</p>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',Lookup::items('PostStatus')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Frontpage ?'); ?>
		<?php echo $form->checkBox($model,'frontpage'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->