<?php

$this->menu=array(
	array('label'=>'Tambah Data Jalan', 'url'=>array('create')),
	array('label'=>'Update Data Jalan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Daftar Jalan', 'url'=>array('admin')),
);
?>

<h1>Data Jalan </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		array('name' => 'jalanruas_id',
		      'value'=> Jalanruas::model()->findByPk($model->jalanruas_id)->nama,
			  ),
		'subruas',
		'panjang',
		'lebar',
		array('name' => 'kab_id',
		      'value'=> Kabupaten::model()->findByPk($model->kab_id)->nama,
			  ),
		array('name' => 'tipejalan_id',
		      'value'=> Tipejalan::model()->findByPk($model->tipejalan_id)->nama,
			  ),
		'jalur',
		'lajur',
		'median',
		'hambatan',
		'kapasitas',
		'palawal',
		'palakhir',
		array('name' => 'bpjkab_id',
		      'value'=> Kabupaten::model()->findByPk($model->bpjkab_id)->nama,
			  ),
		'fungsijalan_id',
		array('name' => 'fungsijalan_id',
		      'value'=> Fungsijalan::model()->findByPk($model->fungsijalan_id)->nama,
			  ),
		'jalankelas',
		array('name' => 'alinyemen_id',
		      'value'=> Alinyemen::model()->findByPk($model->alinyemen_id)->nama,
			  ),
		array('name' => 'jnsjalan_id',
		      'value'=> Jnsjalan::model()->findByPk($model->jnsjalan_id)->nama,
			  ),
	),
)); ?>
<BR>
<div class="span-20">
<?php
    echo '<BR>';
	echo '<h2>TRAYEK </h2>';
	 $q = new CDbCriteria( array(
                    'condition' => "jalan_id = ".$model->id,      // DON'T do it this way!
                    'order'=>'trayek_id',
                  ));
			 
	$jalantrayeks = Jalantrayek::model()->findAll($q);
?>	
	
	<div id="jalan-grid" class="grid-view">
	<table class="detail-view" width="600">
	  <thead>
	     <tr>
		 <th width="5%"><div align="center">No.</th>
		 <th width="10%"><div align="center">Kode Trayek</div></th>
		 <th width="33%"><div align="center">Nama Trayek</div></th>
		 <th width="8%"><div align="center">Jns Trayek</div></th>
		 <th width="12%"><div align="center">No. Polisi</div></th>
		 <th width="22%"><div align="center">PO</div></th>
		 <th width="10%"><div align="center">No. Lambung</div></th>
	     </tr>
	  </thead>
	  <tbody>
	 
<?php    
	$nourut = 0;
	$even=1;
	foreach ($jalantrayeks as $jalantrayek)
         {
		    $nourut = $nourut+1;
			$trayek = Trayekme::model()->findByPk($jalantrayek["trayek_id"]);
			$jnstrayek = Jnstrayek::model()->findByPk($trayek->jnstrayek_id);
			
			$k = new CDbCriteria( array(
                    'condition' => "trayek_id = ".$jalantrayek["trayek_id"],      // DON'T do it this way!
                    'order'=>'nolambung',
                  ));
					
			$buses = Bus::model()->findAll($k);
			
			if ($even=="1")
			   {
			      echo '<tr class="even">';
            	  $even=2;
               }
            else
           		{
			      echo '<tr class="odd">';
            	  $even=1;
               }	
			echo '<td><div align="right">'.$nourut.'</div></td>';
			echo '<td>'.$jalantrayek["trayek_id"].'</td>';
			echo '<td>'.$trayek->nama.'</td>';
			echo '<td>'.$jnstrayek->nama.'</td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '</tr>';
			$nourutbus=0;
			
			foreach ($buses as $bus)
			   {
			      $po = Po::model()->findByPk($bus->po_id);
				  $nourutbus=$nourutbus+1;
				  if ($even=="1")
			         {
			            echo '<tr class="even">';
            	        $even=2;
                     }
                  else
           		     {
			           echo '<tr class="odd">';
            	       $even=1;
                     }	
				  echo '<td colspan="3"></td>';
				  echo '<td>'.$nourutbus.'</td>';
                  echo '<td>'.$bus->nopolisi.'</td>';
                  echo '<td>'.$po->nama.'</td>';
				  echo '<td>'.$bus->nolambung.'</td>';
				  echo '</tr>' ;   				  
			   }
			
			
         }		 

?>
      </tbody>
   </table> 
   
   </div>
</div>
