<?php
$this->menu=array(
	array('label'=>'Kembali', 'url'=>array('trayekakdp/view', 'id'=>$trayekakdp_id)),
);
?>

<h1>Tambah Data Jalan dalam Trayek AKDP</h1>

<?php  
     echo $this->renderPartial('_form', array('model'=>$model,'trayekakdp_id'=>$trayekakdp_id)); ?>