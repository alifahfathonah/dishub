<div class="span4">
        <?php echo '<img src="'.Yii::app()->baseUrl.'/images/image/artikel/'.$data->image.'"/>';?>
   
    <h3 class="title">
        <?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
    </h3>
    <?php
                    $this->beginWidget('CMarkdown', array('purifyOutput'=>true));
                    echo substr(strip_tags($data->content),0,200).' ...';
                    $this->endWidget();
            ?>
</div>