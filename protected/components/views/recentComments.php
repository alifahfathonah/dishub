<ul class="list-blog-roll">
	<?php foreach($this->getRecentComments() as $comment): ?>
	<li>
		<?php echo CHtml::link(CHtml::encode($comment->post->title), $comment->getUrl()); ?>
	</li>
	<?php endforeach; ?>
</ul>