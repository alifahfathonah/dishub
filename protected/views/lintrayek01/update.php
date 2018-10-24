<?php
$this->menu=array(
	array('label'=>'Kembali', 'url'=>array('trayek01/view', 'id'=>$model->trayek_id)),
);
?>

<h1>Update Lin Trayek Antar Kota Dalam Provinsi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>