<div class="main-body">
       <!-- start slider -->
    	<div class="slider-wrapper theme-default">
            <div id="slider-nivo" class="nivoSlider">
                 <?php 
                    $data=$dataProvider->getData();
                    foreach ($data as $item) {
                        echo '<img src="'.Yii::app()->baseUrl.'/images/image/artikel/'.$item->image.'" alt="" title="#'.$item->id.'"/>';
                    }
                 ?>
            </div>
            <?php foreach ($data as $item) {?>
            <div id="<?php echo $item->id;?>" class="nivo-html-caption hidden-phone">
                <h2 class="title blog-title"><?php echo CHtml::link(CHtml::encode($item->title), $item->url); ?></h2>
                    <?php
                    $this->beginWidget('CMarkdown', array('purifyOutput'=>true));
                    echo substr(strip_tags($item->content),0,150).' ...';
                    $this->endWidget();
                ?>
            </div>
            <?php }?>
           </div>
 <!-- /slider -->  
        <?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}",
            'itemsCssClass'=>"row-fluid",
            'htmlOptions'=>array('class'=>'row-fluid'),
        )); ?>
</div>
    
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(function() {
        $('#slider-nivo').nivoSlider({
            effect: 'random',               // Specify sets like: 'fold,fade,sliceDown'
            slices: 15,                     // For slice animations
            boxCols: 8,                     // For box animations
            boxRows: 4,                     // For box animations
            animSpeed: 1000,                 // Slide transition speed
            pauseTime: 9000,                // How long each slide will show
            startSlide: 0,                  // Set starting Slide (0 index)
            directionNav: true,             // Next & Prev navigation
            controlNav: true,               // 1,2,3... navigation
            controlNavThumbs: false,        // Use thumbnails for Control Nav
            pauseOnHover: true,             // Stop animation while hovering
            manualAdvance: false,           // Force manual transitions
            prevText: 'Prev',               // Prev directionNav text
            nextText: 'Next',               // Next directionNav text
            randomStart: false,             // Start on a random slide
            beforeChange: function(){
                jQuery(".nivo-caption").animate({left:"1200"}, {duration: 400})
            },     // Triggers before a slide transition
            afterChange: function(){
                jQuery(".nivo-caption").animate({left:"0"}, {duration: 400})
            },      // Triggers after a slide transition
            slideshowEnd: function(){},     // Triggers after all slides have been shown
            lastSlide: function(){},        // Triggers when last slide is shown
            afterLoad: function(){
                jQuery(".nivo-caption").animate({left:"0"}, {duration: 50})
            }  
         });
    });
</script> 