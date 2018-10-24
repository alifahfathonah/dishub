<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trayek_id')); ?>:</b>
	<?php echo CHtml::encode($data->trayek_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jnstrayek_id')); ?>:</b>
	<?php echo CHtml::encode($data->jnstrayek_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminal_id')); ?>:</b>
	<?php echo CHtml::encode($data->terminal_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linter_id')); ?>:</b>
	<?php echo CHtml::encode($data->linter_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nourut')); ?>:</b>
	<?php echo CHtml::encode($data->nourut); ?>
	<br />


</div>