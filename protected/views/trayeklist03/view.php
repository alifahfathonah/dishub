<?php
   $baseUrl = Yii::app()->baseUrl; 
   
   $cs = Yii::app()->getClientScript();
   $cs->registerScriptFile($baseUrl.'/css/mojozoom.js');
   $cs->registerCssFile($baseUrl.'/css/mojozoom.css');
   
?>

<h1>Data Trayek </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		array('name' => 'jnstrayek_id',
		      'value'=> Jnstrayek::model()->findByPk($model->jnstrayek_id)->nama,
			  ),
		array('name' => 'awal_id',
		      'value'=> Terminal::model()->findByPk($model->awal_id)->nama,
			  ),
		array('name' => 'akhir_id',
		      'value'=> Terminal::model()->findByPk($model->akhir_id)->nama,
			  ),
		array('name' => 'gruptrayek_id',
		      'value'=> Gruptrayek::model()->findByPk($model->gruptrayek_id)->nama,
			  ),
		'jarak',
		'tambah',
		array('name' => 'jnslayantrayek_id',
		      'value'=> Jnslayantrayek::model()->findByPk($model->jnslayantrayek_id)->nama,
			  ),
		array('name' => 'tarif_dasar_Rp',
		      'value'=> number_format($model->getTarif(1,1),0, ",", "."),
			  ),
        array('name' => 'tarif_bawah_Rp',
		      'value'=> number_format($model->getTarif(1,2),0, ",", "."),
			  ),
        array('name' => 'tarif_atas_Rp',
		      'value'=> number_format($model->getTarif(1,3),0, ",", "."),
			  ),	  			  
		'ket',
	),
)); 
?>

<div class="span-16">
   <?php $this->beginWidget('application.extensions.jui.ETabs', array('name'=>'tabpanel1')); ?>
       <?php $this->beginWidget('application.extensions.jui.ETab', array('name'=>'tab1', 'title'=>'Peta Trayek AKDP')); ?>
	        <?php //echo CHtml::image('masterpeta/'.$model->namafile,'id="myimage"',array('width'=>800,'height'=>500)); 
			     if ($model->namafile==!'')
				 echo '<img width="720" height="500" id="myimage" src="'.$baseUrl.'/masterpeta/'.$model->namafile.'" data-zoomsrc= "'.$baseUrl.'/masterpeta/'.$model->namafile.'"/>';
			?>
	   
	   <?php $this->endWidget('application.extensions.jui.ETab'); ?>
	   
	   <?php $this->beginWidget('application.extensions.jui.ETab', array('name'=>'tab2', 'title'=>'Data Jalan ')); ?>
	        
			<?php
			   $dataSource=new CActiveDataProvider('Jalantrayek', array(
                 'criteria'=>array(
		         'condition'=>'trayek_id='.$model->id.' AND jnstrayek_id=1',
		        	   'order'=>'nourut ASC',),
                  'pagination'=>array('pageSize'=>60),
                 ));
	 
	          $this->widget('zii.widgets.grid.CGridView', array(
	             'id'=>'nocabor-grid',
	             'dataProvider'=>$dataSource,
	             'columns'=>array(
         		       'nourut',
		                array(
	                           'name' => 'jalan_id',
	                           'value' =>  'Jalan::model()->findByPk($data->jalan_id)->nama',
	                          ),
						array(
	                           'header'=>'Kode Jalan',
							   'name' => 'jalan_id',
	                           
	                          ),
				      
	            ),
              ));					
			?>
			
	   <?php $this->endWidget('application.extensions.jui.ETab'); ?>
	   
	   <?php $this->beginWidget('application.extensions.jui.ETab', array('name'=>'tab3', 'title'=>'Data Angkutan')); ?>
			<?php
			   $dataSource=new CActiveDataProvider('Bus', array(
                 'criteria'=>array(
		         'condition'=>'trayek_id='.$model->id,
		        	   'order'=>'nopolisi ASC',),
                  'pagination'=>array('pageSize'=>60),
                 ));
	 
	          $this->widget('zii.widgets.grid.CGridView', array(
	             'id'=>'bus-grid',
	             'dataProvider'=>$dataSource,
	             'columns'=>array(
         		       'nopolisi',
		                array(
	                           'name' => 'jnsangkutan_id',
	                           'value' =>  'Jnsangkutan::model()->findByPk($data->jnsangkutan_id)->nama',
	                          ),
						array(
	                           'name' => 'po_id',
	                           'value' =>  'Po::model()->findByPk($data->po_id)->nama',
	                          ),
						'nolambung',	  
						'duduk',
						'barang',
						
				      
	            ),
              ));					
			?>	        
	   
	   <?php $this->endWidget('application.extensions.jui.ETab'); ?>   
   <?php $this->endWidget('application.extensions.jui.ETabs'); ?> 	   
   <Br>
</div>