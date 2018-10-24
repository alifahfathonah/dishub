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
        <?php 
            if(!empty($data->image)){echo '<img src="'.Yii::app()->baseUrl.'/images/image/artikel/'.$data->image.'"/>';}?>
        </div>
    <div class="row-fluid">
    
        <?php
            $this->beginWidget('CMarkdown', array('purifyOutput'=>true));
            echo $data->content;
            $this->endWidget();
    ?>

	<div class="blog-details">
            	<ul>
                  <li><a href="#"><i class="icon-user"></i>
                       <?php echo $data->userid;?></a>
                  </li>
                  <li><i class="icon-comment"></i><?php echo CHtml::link("Comments ({$data->commentCount})",$data->url.'#comments'); ?> replies</li>
                  <li>
                      <i class="icon-tags"></i> tags : <?php echo implode(', ', $data->tagLinks); ?>
                  </li>
                  <li>
                      <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style pull-right clearfix" style="text-align: right;">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52946a146ce1796f"></script>
<!-- AddThis Button END -->
                  </li>
                </ul>
            </div>
	<div class="cleared"><hr></div>
</div>
</div>
