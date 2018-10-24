<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<section class="main-body">
  <div class="row-fluid">
    <div class="span8">
        <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
                'homeLink'=>CHtml::link('Home',array('/site/index')),
                'htmlOptions'=>array('class'=>'breadcrumb')
            )); ?>
        <?php endif?>
        <?php echo $content; ?>
	</div>
    <div class="span4 sidebar">
        <?php include_once('tpl_sidebar.php');?>
    </div>
  </div>
</section>
<?php $this->endContent(); ?>