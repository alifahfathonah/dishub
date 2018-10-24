<h1>Daftar Grup Trayek Antar Kota Dalam Provinsi (AKDP) tahun <?php $thn= (int) date("Y"); echo $thn;?></h1>
<?php
  $q = new CDbCriteria( array(
                    'condition' => "jnstrayek_id = :jnstrayek_id",      // DON'T do it this way!
                    'params'    => array(':jnstrayek_id' => 1)
                  ));
				  
    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'trayek-grid',
	'dataProvider'=>$model->search01(),
	'filter'=>$model,
	'columns'=>array(
		
		'id',
		array(
	                          'name' => 'nama',
				              'type'=>'raw',
				              'value' =>   'CHtml::link($data->nama, array("rpt0004a","id"=>$data->id),array(target=>_blank) )',
	         ),
		
     ),
)); 		
?>	