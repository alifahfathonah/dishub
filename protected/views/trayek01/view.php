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
$baseScriptUrl=Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('zii.widgets.assets')).'/detailview';
	$cssFile=$baseScriptUrl.'/styles.css';
	Yii::app()->getClientScript()->registerCssFile($cssFile);
?>
<h1>Trayek AKDP</h1>
<table width="100%" border="0" cellpadding="1" cellspacing="2" class="detail-view">
  <tr class="odd">
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('id')); ?></b></td>
    <td><?php echo CHtml::encode($model->id); ?></td>
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('gruptrayek_id')); ?></b></td>
    <td><?php echo CHtml::encode(Gruptrayek::model()->findByPk($model->gruptrayek_id)->nama);?></td>
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('tarif_dasar_Rp')); ?></b></td>
    <td><?php echo number_format($model->getTarif(1,1),0, ",", ".");?></td>
    <td align="center"><b><?php echo CHtml::encode($model->getAttributeLabel('nama')); ?></b></td>
  </tr>
  <tr class="even">
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('jnstrayek_id')); ?></b></td>
    <td><?php echo CHtml::encode(Jnstrayek::model()->findByPk($model->jnstrayek_id)->nama);?></td>
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('jarak')); ?></b></td>
    <td><?php echo $model->jarak;?></td>
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('tarif_bawah_Rp')); ?></b></td>
    <td><?php echo number_format($model->getTarif(1,2),0, ",", ".");?></td>
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
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('tambah')); ?></b></td>
    <td><?php echo $model->tambah;?></td>
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('tarif_atas_Rp')); ?></b></td>
    <td><?php echo number_format($model->getTarif(1,3),0, ",", ".");?></td>
  </tr>
  <tr class="even">
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('akhir_id')); ?></b></td>
    <td><?php echo CHtml::encode(Terminal::model()->findByPk($model->akhir_id)->nama);?></td>
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('jnslayantrayek_id')); ?></b></td>
    <td><?php echo CHtml::encode(Jnslayantrayek::model()->findByPk($model->jnslayantrayek_id)->nama);?></td>
    <td align="right"><b><?php echo CHtml::encode($model->getAttributeLabel('ket')); ?></b></td>
    <td><?php echo $model->ket;?></td>
  </tr>
</table>

<div class="span-16">
   <?php $this->beginWidget('application.extensions.jui.ETabs', array('name'=>'tabpanel1')); ?>
       <?php $this->beginWidget('application.extensions.jui.ETab', array('name'=>'tab1', 'title'=>'Peta Trayek AKDP')); ?>
	        <?php //echo CHtml::image('masterpeta/'.$model->namafile,'id="myimage"',array('width'=>800,'height'=>500)); 
			     if ($model->namafile==!'')
				 echo '<img width="760" height="360" id="myimage" src="'.$baseUrl.'/masterpeta/'.$model->namafile.'" data-zoomsrc= "'.$baseUrl.'/masterpeta/'.$model->namafile.'"/>';
			?>
	   
	   <?php $this->endWidget('application.extensions.jui.ETab'); ?>
	   
	   <?php $this->beginWidget('application.extensions.jui.ETab', array('name'=>'tab2', 'title'=>'Data Jalan AKDP')); ?>
	        <?php 
			       //echo CHtml::button('Tambah Jalan', array('submit' => array('jalantrayekakdp/create','id1'=>$model->id))); 
				  echo CHtml::link('Tambah Data Jalan',array('jalantrayek01/create','id'=>$model->id)); 
		    ?>
			<?php
			   $dataSource=new CActiveDataProvider('Jalantrayek', array(
                 'criteria'=>array(
		         'condition'=>'trayek_id='.$model->id.' AND jnstrayek_id=1',
		        	   'order'=>'nourut ASC',),
                  'pagination'=>array('pageSize'=>10),
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
                                                   'url'=>'Yii::app()->createUrl("jalantrayek01/delete", array("id1"=>$data->trayek_id,"id2"=>$data->jalan_id))',
								  
                                                ),
						                'update' => array
                                               (
                                                   'label'=>'Update Jalan',
                                                   'url'=>'Yii::app()->createUrl("jalantrayek01/update", array("id1"=>$data->trayek_id,"id2"=>$data->jalan_id))',
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
				  echo CHtml::link('Tambah Data Perjalanan',array('lintrayek01/create','id'=>$model->id)); 
		    ?>
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
						array(
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
		            ),	  		  
	            ),
              ));					
			?>
	   <?php $this->endWidget('application.extensions.jui.ETab'); ?>
   <?php $this->endWidget('application.extensions.jui.ETabs'); ?> 	   
   <Br>
</div>