<?php

$this->menu=array(
	array('label'=>'Kembali', 'url'=>array('trayek02/view', 'id'=>$model->trayek_id)),
);
?>

<h1>Update Jalan Trayek Antar Kota Antar Provinsi (AKAP)</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'trayek_id'=>$model->trayek_id)); ?>