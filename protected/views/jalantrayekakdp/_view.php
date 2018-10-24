<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jalan_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jalan_id), array('view', 'id'=>$data->jalan_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trayekakdp_id')); ?>:</b>
	<?php echo CHtml::encode($data->trayekakdp_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nourut')); ?>:</b>
	<?php echo CHtml::encode($data->nourut); ?>
	<br />


</div>