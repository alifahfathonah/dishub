<?php $this->beginContent('//layouts/main'); ?>
<div class="art-content-layout-row">
	<div class="art-layout-cell art-sidebar1">
		<div class="art-block">
			<div class="art-block-body">
				<div class="art-blockheader">
					<div class="l"></div>
					<div class="r"></div>
					<h3 class="t">Operator</h3>
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
						$this->beginWidget('zii.widgets.CMenu', array(
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
						  <h3 class="t">Advertisement</h3>
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
									  <div class="bannergroup_text">
									   <div class="bannerheader">Featured Links:</div>
									   <div class="banneritem_text"><a href="/Joomla-1.5/index.php?option=com_banners&amp;task=click&amp;bid=3" target="_blank">Joomla!</a><br />
									   Joomla! The most popular and widely used Open Source CMS Project in the world.<div class="clr"></div></div>
									   <div class="banneritem_text"><a href="/Joomla-1.5/index.php?option=com_banners&amp;task=click&amp;bid=4" target="_blank">JoomlaCode</a><br />
									   JoomlaCode, development and distribution made easy.<div class="clr"></div></div>
									   <div class="banneritem_text"><a href="/Joomla-1.5/index.php?option=com_banners&amp;task=click&amp;bid=5" target="_blank">Joomla! Extensions</a><br />
									   Joomla! Components, Modules, Plugins and Languages by the bucket load.<div class="clr"></div></div>
									   <div class="banneritem_text"><a href="/Joomla-1.5/index.php?option=com_banners&amp;task=click&amp;bid=6" target="_blank">Joomla! Shop</a><br />
									   For all your Joomla! merchandise.<div class="clr"></div></div>
									   <div class="bannerfooter_text"><a href="http://www.joomla.org">Ads by Joomla!</a></div>
									  </div>
					  
							<div class="cleared"></div>
						  </div>
					  </div>
			<div class="cleared"></div>
		  </div>
		</div>
	</div>
</div>
<?php $this->endContent(); ?>