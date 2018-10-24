<?php

$this->menu=array(
	array('label'=>'Kembali', 'url'=>array('trayekakdp/view', 'id'=>$model->trayekakdp_id)),
);
?>

<h1>Update Jalan Trayek Antar Kota Dalam Provinsi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'trayekakdp_id'=>$model->trayekakdp_id)); ?>