<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jnsangkutan_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jnsangkutan_id), array('view', 'id'=>$data->jnsangkutan_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarifdasar')); ?>:</b>
	<?php echo CHtml::encode($data->tarifdasar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarifbawah')); ?>:</b>
	<?php echo CHtml::encode($data->tarifbawah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarifatas')); ?>:</b>
	<?php echo CHtml::encode($data->tarifatas); ?>
	<br />


</div>