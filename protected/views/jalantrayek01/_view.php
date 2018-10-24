<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('trayek_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->trayek_id), array('view', 'id'=>$data->trayek_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jalan_id')); ?>:</b>
	<?php echo CHtml::encode($data->jalan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nourut')); ?>:</b>
	<?php echo CHtml::encode($data->nourut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jnstrayek_id')); ?>:</b>
	<?php echo CHtml::encode($data->jnstrayek_id); ?>
	<br />


</div>