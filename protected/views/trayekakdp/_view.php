<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('awal_id')); ?>:</b>
	<?php echo CHtml::encode($data->awal_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('akhir_id')); ?>:</b>
	<?php echo CHtml::encode($data->akhir_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gruptrayekakdp_id')); ?>:</b>
	<?php echo CHtml::encode($data->gruptrayekakdp_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jarak')); ?>:</b>
	<?php echo CHtml::encode($data->jarak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tambah')); ?>:</b>
	<?php echo CHtml::encode($data->tambah); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jnslayantrayek_id')); ?>:</b>
	<?php echo CHtml::encode($data->jnslayantrayek_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ket')); ?>:</b>
	<?php echo CHtml::encode($data->ket); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namafile')); ?>:</b>
	<?php echo CHtml::encode($data->namafile); ?>
	<br />

	*/ ?>

</div>