<?php
   $baseUrl = Yii::app()->baseUrl; 
   
   $cs = Yii::app()->getClientScript();
   $cs->registerScriptFile($baseUrl.'/css/mojozoom.js');
   $cs->registerCssFile($baseUrl.'/css/mojozoom.css');
   
	$baseScriptUrl=Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('zii.widgets.assets')).'/detailview';
	$cssFile=$baseScriptUrl.'/styles.css';
	Yii::app()->getClientScript()->registerCssFile($cssFile);
	
	$sttrayekid1= $model->id;
	$sttrayekid2= substr($sttrayekid1,3,3).substr($sttrayekid1,0,3).substr($sttrayekid1,6,2);
	$stfilename1='./pdf/akdp'.$sttrayekid1.'.pdf';
	$stfilename2='./pdf/akdp'.$sttrayekid2.'.pdf';
?>

<h1>Data Trayek </h1>
<table width="100%" border="0" cellpadding="1" cellspacing="2" class="detail-view">
  <tr class="odd">
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('id')); ?></b></td>
    <td><?php echo CHtml::encode($model->id); ?></td>
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('gruptrayek_id')); ?></b></td>
    <td><?php echo CHtml::encode(Gruptrayek::model()->findByPk($model->gruptrayek_id)->nama);?></td>
    <td align="right"><b><?php echo 'Tarif'; ?></b></td>
    <td><?php
	   
	   if (file_exists($stfilename1)) echo CHtml::link('Lihat Tarif', $baseUrl.'/pdf/akdp'.$sttrayekid1.'.pdf',array('target'=>'_blank'));
	   else if (file_exists($stfilename2)) echo CHtml::link('Lihat Tarif', $baseUrl.'/pdf/akdp'.$sttrayekid2.'.pdf',array('target'=>'_blank'));
	
	?>
	
	</td>
    <td align="center"><b><?php echo CHtml::encode($model->getAttributeLabel('nama')); ?></b></td>
  </tr>
  <tr class="even">
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('jnstrayek_id')); ?></b></td>
    <td><?php echo CHtml::encode(Jnstrayek::model()->findByPk($model->jnstrayek_id)->nama);?></td>
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('jarak')); ?></b></td>
    <td><?php echo $model->jarak;?></td>
    <td align="right"><b><?php //echo CHtml::encode($model->getAttributeLabel('tarif_bawah_Rp')); ?></b></td>
    <td><?php //echo number_format($model->getTarif(1,2),0, ",", ".");?></td>
    <td rowspan="3" align="center" valign="top"><?php $arTrayek=explode('-',$model->nama);
$jml=count($arTrayek);
for($i=0;$i<$jml;$i++){ 
	if($i==3){
		echo '<br>';
	}
		elseif($i==6){
			echo '<br>';
		}elseif($i==9){
			echo '<br>';
		}else{
			$isi=$arTrayek[$i];
		}
	if($i==$jml-1){$isi=$arTrayek[$i];}else{$isi .=" - ";}
	echo $isi;
} 
 ?></td>
  </tr>
  <tr class="odd">
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('awal_id')); ?></b></td>
    <td><?php echo CHtml::encode(Terminal::model()->findByPk($model->awal_id)->nama);?></td>
    
	<td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('ket')); ?></b></td>
    <td><?php echo $model->ket;?></td>
	
    <td align="right"><b><?php //echo CHtml::encode($model->getAttributeLabel('tarif_atas_Rp')); ?></b></td>
    <td><?php //echo number_format($model->getTarif(1,3),0, ",", ".");?></td>
  </tr>
  <tr class="even">
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('akhir_id')); ?></b></td>
    <td><?php echo CHtml::encode(Terminal::model()->findByPk($model->akhir_id)->nama);?></td>
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('jnslayantrayek_id')); ?></b></td>
    <td><?php echo CHtml::encode(Jnslayantrayek::model()->findByPk($model->jnslayantrayek_id)->nama);?></td>
    
	<td align="right"><b><?php //echo CHtml::encode($model->getAttributeLabel('ket')); ?></b></td>
    <td><?php //echo $model->ket;?></td>
  </tr>
</table>

<div class="span-16">
   <?php $this->beginWidget('application.extensions.jui.ETabs', array('name'=>'tabpanel1')); ?>
       <?php $this->beginWidget('application.extensions.jui.ETab', array('name'=>'tab1', 'title'=>'Peta Trayek AKDP')); ?>
	        <?php //echo CHtml::image('masterpeta/'.$model->namafile,'id="myimage"',array('width'=>800,'height'=>500)); 
			     if ($model->namafile==!'')
				 echo '<img width="600" height="300" id="myimage" src="'.$baseUrl.'/masterpeta/'.$model->namafile.'" data-zoomsrc= "'.$baseUrl.'/masterpeta/'.$model->namafile.'"/>';
			?>
	   
	   <?php $this->endWidget('application.extensions.jui.ETab'); ?>
	   
	   <?php $this->beginWidget('application.extensions.jui.ETab', array('name'=>'tab2', 'title'=>'Data Jalan ')); ?>
	        
			<?php
			   $dataSource=new CActiveDataProvider('Jalantrayek', array(
                 'criteria'=>array(
		         'condition'=>'trayek_id='.$model->id.' AND jnstrayek_id=1',
		        	   'order'=>'nourut ASC',),
                  
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
	<?php $this->beginWidget('application.extensions.jui.ETab', array('name'=>'tab4', 'title'=>'Data Perjalanan')); ?>
			<?php
			   $dataProvider1=new CActiveDataProvider('Lintrayekdaftar', array(
                 'criteria'=>array(
		         'condition'=>'trayek_id='.$model->id.' and jnstrayek_id=1',
		        	   'order'=>'nourut ASC',),
                  'pagination'=>array('pageSize'=>10),
                 ));
	 
	          $this->widget('zii.widgets.grid.CGridView', array(
	             'id'=>'linter-grid',
	             'dataProvider'=>$dataProvider1,
	             'columns'=>array(
         		       'nourut',
				'terminal',
				'linter',

				/*	array(
	                           'name' => 'linter_id',
	                           'value' =>  'Linter::model()->findByPk($data->linter_id)->nama',
	                          	),
				*/
						/*array(
			              'class'=>'CButtonColumn',
						  'template'=>'{delete} {update}',
			              'buttons'=>array(
                                   	'delete' => array(
                                                   'label'=>'Hapus Lin Trayek',
                                                   'url'=>'Yii::app()->createUrl("lintrayek01/delete", array("id"=>$data->id))',
							),
						'update' => array(
                                                   'label'=>'Update Lin Trayek',
                                                   'url'=>'Yii::app()->createUrl("lintrayek01/update", array("id"=>$data->id,"trayek_id"=>$data->trayek_id))',
                                          	),
					 ),		   
		            ),*/	  		  
	            ),
              ));					
			?>
	   <?php $this->endWidget('application.extensions.jui.ETab'); ?>

   <?php $this->endWidget('application.extensions.jui.ETabs'); ?> 	   
   
</div>