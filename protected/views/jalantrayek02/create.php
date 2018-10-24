<?php
$this->menu=array(
	array('label'=>'Kembali', 'url'=>array('trayek02/view', 'id'=>$trayek_id)),
);
?>

<h1>Tambah Data Jalan Trayek Antar Kota Antar Provinsi (AKAP)</h1>

<?php  
     echo $this->renderPartial('_form', array('model'=>$model,'trayek_id'=>$trayek_id)); ?>