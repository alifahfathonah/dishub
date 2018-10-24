<div class="post blog-item-container">
    <div class="row-fluid">
    <div class="span2 metadate hidden-phone">
        <div class="span6 date">
            <?php echo date('j',$data->create_time);?>
        </div>
        <div class="span6 month">
            <?php echo date('M Y',$data->create_time); ?>
        </div>
    </div>
    <div class="span10">
        <h3><?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?></h3>
    </div>
    </div>
    <div class="separator"></div>
<div class="row-fluid">
        <div class="<?php if(!empty($data->image)){ echo 'span4';}else{echo '';};?>"><?php 
            if(!empty($data->image)){echo '<img src="'.Yii::app()->baseUrl.'/images/image/artikel/'.$data->image.'"/>';}?>
        </div>
    <div class="<?php if(!empty($data->image)){ echo 'span8';}else{echo 'span12';};?>">
        <?php
            $this->beginWidget('CMarkdown', array('purifyOutput'=>true));
            echo substr(strip_tags($data->content),0,300).' ...';
            $this->endWidget();
    ?></div>
    <div class="blog-details">
            	<ul>
                  <li><a href="#"><i class="icon-user"></i>
                       <?php echo $data->userid;?></a>
                  </li>
                  <li><i class="icon-comment"></i><?php echo CHtml::link("Comments ({$data->commentCount})",$data->url.'#comments'); ?> replies</li>
                  <li>
                      <i class="icon-tags"></i> tags : <?php echo implode(', ', $data->tagLinks); ?>
                  </li>
                </ul>
            </div>
</div>
	<div class="cleared"></div>
        <hr>
</div>
