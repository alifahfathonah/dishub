<?php $this->beginContent('//layouts/main'); ?>
<div class="art-content-layout-row">
	<div class="art-layout-cell art-content">
		<div class="art-post">
			<div class="art-post-body">
				<div class="art-post-inner art-article">
				<?php echo $content;?>
				</div>
			</div>
		</div>
	</div>
	<div class="art-layout-cell art-sidebar2">
		<div class="art-block">
			<div class="art-block-body">
				<div class="art-blockheader">
					<div class="l"></div>
					<div class="r"></div>
					<h3 class="t"><?php $this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));?></h3>
				</div>
				<div class="art-blockcontent">
					<div class="art-blockcontent-tl"></div>
					<div class="art-blockcontent-tr"></div>
					<div class="art-blockcontent-bl"></div>
					<div class="art-blockcontent-br"></div>
					<div class="art-blockcontent-tc"></div>
					<div class="art-blockcontent-bc"></div>
					<div class="art-blockcontent-cl"></div>
					<div class="art-blockcontent-cr"></div>
					<div class="art-blockcontent-cc"></div>
					<div class="art-blockcontent-body">
					<?php 
						$this->Widget('zii.widgets.CMenu', array(
							'items'=>$this->menu,
							'htmlOptions'=>array('class'=>'art-block-body'),
							));
						$this->endWidget(); 
					?>
					<div class="cleared"></div>
					</div>
				</div>
				<div class="cleared"></div>
		  </div>
		</div>
	</div>
</div>
<?php $this->endContent(); ?>