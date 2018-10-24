
<div class="post">
	<h2 class="art-postheader">
		<?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
	</h2>
	<div class="art-postmetadataheader">
		posted by <?php echo $data->userid . ' on ' . date('F j, Y',$data->create_time); ?>
	</div>
	<div class="art-postcontent">
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->content;
			$this->endWidget();
		?>
	</div>
	<div class="nav">
		<b>Tags:</b>
		<?php echo implode(', ', $data->tagLinks); ?>
		<br/>
		<?php echo CHtml::link('Permalink', $data->url); ?> |
		<?php echo CHtml::link("Comments ({$data->commentCount})",$data->url.'#comments'); ?> |
		Last updated on <?php echo date('F j, Y',$data->update_time); ?>
	</div><br>
	<div class="cleared"></div>
</div>
