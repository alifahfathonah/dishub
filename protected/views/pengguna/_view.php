<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namalengkap')); ?>:</b>
	<?php echo CHtml::encode($data->namalengkap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sandi')); ?>:</b>
	<?php echo CHtml::encode($data->sandi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipepengguna_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipepengguna_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status_id); ?>
	<br />


</div>