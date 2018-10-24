<?php
   $baseUrl = Yii::app()->baseUrl; 
   
   $cs = Yii::app()->getClientScript();
   $cs->registerScriptFile($baseUrl.'/css/mojozoom.js');
   $cs->registerCssFile($baseUrl.'/css/mojozoom.css');
   
$this->menu=array(
	array('label'=>'Tambah Data Trayek AKDP', 'url'=>array('create')),
	array('label'=>'Update Data Trayek AKDP', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Pengelolaan Trayek AKDP', 'url'=>array('admin')),
);
?>

<h1>Trayek AKDP</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		array('name' => 'awal_id',
		      'value'=> Terminal::model()->findByPk($model->awal_id)->nama,
			  ),
		array('name' => 'akhir_id',
		      'value'=> Terminal::model()->findByPk($model->akhir_id)->nama,
			  ),
		array('name' => 'gruptrayekakdp_id',
		      'value'=> Gruptrayekakdp::model()->findByPk($model->gruptrayekakdp_id)->nama,
			  ),
		'jarak',
		'tambah',
		'jnslayantrayek_id',
		array('name' => 'jnslayantrayek_id',
		      'value'=> Jnslayantrayek::model()->findByPk($model->jnslayantrayek_id)->nama,
			  ),
		array('name' => 'tarif_dasar_Rp',
		      'value'=> number_format($model->getTarifdasar(1),0, ",", "."),
			  ),
        array('name' => 'tarif_bawah_Rp',
		      'value'=> number_format($model->getTarifbawah(1),0, ",", "."),
			  ),
        array('name' => 'tarif_atas_Rp',
		      'value'=> number_format($model->getTarifatas(1),0, ",", "."),
			  ),	  			  
		'ket',
		'namafile',
	),
)); 
   
   ?>
<div class="span-24">
   <?php $this->beginWidget('application.extensions.jui.ETabs', array('name'=>'tabpanel1')); ?>
       <?php $this->beginWidget('application.extensions.jui.ETab', array('name'=>'tab1', 'title'=>'Peta Trayek AKDP')); ?>
	        <?php //echo CHtml::image('masterpeta/'.$model->namafile,'id="myimage"',array('width'=>800,'height'=>500)); 
			     if ($model->namafile==!'')
				 echo '<img width="720" height="500" id="myimage" src="'.$baseUrl.'/masterpeta/'.$model->namafile.'" data-zoomsrc= "'.$baseUrl.'/masterpeta/'.$model->namafile.'"/>';
			?>
	   
	   <?php $this->endWidget('application.extensions.jui.ETab'); ?>
	   
	   <?php $this->beginWidget('application.extensions.jui.ETab', array('name'=>'tab2', 'title'=>'Data Jalan AKDP')); ?>
	        <?php 
			       //echo CHtml::button('Tambah Jalan', array('submit' => array('jalantrayekakdp/create','id1'=>$model->id))); 
				  echo CHtml::link('Tambah Data Jalan',array('jalantrayekakdp/create','id'=>$model->id)); 
		    ?>
			<?php
			   $dataSource=new CActiveDataProvider('Jalantrayekakdp', array(
                 'criteria'=>array(
		         'condition'=>'trayekakdp_id='.$model->id,
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
				        array(
			              'class'=>'CButtonColumn',
						  'template'=>'{delete} {update}',
			              'buttons'=>array
                                     (
                                        'delete' => array
                                                (
                                                   'label'=>'Hapus Jalan',
                                                   'url'=>'Yii::app()->createUrl("jalantrayekakdp/delete", array("id1"=>$data->trayekakdp_id,"id2"=>$data->jalan_id))',
								  
                                                ),
						                'update' => array
                                               (
                                                   'label'=>'Update Jalan',
                                                   'url'=>'Yii::app()->createUrl("jalantrayekakdp/update", array("id1"=>$data->trayekakdp_id,"id2"=>$data->jalan_id))',
                                               ),
					               ),
			              		   
		            ),
	            ),
              ));					
			?>
			
	   <?php $this->endWidget('application.extensions.jui.ETab'); ?>
	   
	   <?php $this->beginWidget('application.extensions.jui.ETab', array('name'=>'tab3', 'title'=>'Data Perjalanan')); ?>
	        <?php 
			       //echo CHtml::button('Tambah Jalan', array('submit' => array('jalantrayekakdp/create','id1'=>$model->id))); 
				  echo CHtml::link('Tambah Data Perjalanan',array('lintrayekakdp/create','id'=>$model->id)); 
		    ?>
			<?php
			   $dataSource1=new CActiveDataProvider('Lintrayekakdp', array(
                 'criteria'=>array(
		         'condition'=>'trayekakdp_id='.$model->id,
		        	   'order'=>'nourut ASC',),
                  'pagination'=>array('pageSize'=>60),
                 ));
	 
	          $this->widget('zii.widgets.grid.CGridView', array(
	             'id'=>'linter-grid',
	             'dataProvider'=>$dataSource1,
	             'columns'=>array(
         		       'nourut',
		                array(
	                           'name' => 'terminal_id',
	                           'value' =>  'Terminal::model()->findByPk($data->terminal_id)->nama',
	                          ),
					    array(
	                           'name' => 'linter_id',
	                           'value' =>  'Linter::model()->findByPk($data->linter_id)->nama',
	                          ),
						array(
			              'class'=>'CButtonColumn',
						  'template'=>'{delete} {update}',
			              'buttons'=>array
                                     (
                                        'delete' => array
                                                (
                                                   'label'=>'Hapus Lin Trayek',
                                                   'url'=>'Yii::app()->createUrl("lintrayekakdp/delete", array("id"=>$data->id))',
								  
                                                ),
						                'update' => array
                                               (
                                                   'label'=>'Update Lin Trayek',
                                                   'url'=>'Yii::app()->createUrl("lintrayekakdp/update", array("id"=>$data->id,"trayekakdp_id"=>$data->trayekakdp_id))',
                                               ),
					               ),
			              		   
		            ),	  
							  
	            ),
				
              ));					
			?>
			
	   <?php $this->endWidget('application.extensions.jui.ETab'); ?>

	   
   <?php $this->endWidget('application.extensions.jui.ETabs'); ?> 	   
   <Br>
</div>