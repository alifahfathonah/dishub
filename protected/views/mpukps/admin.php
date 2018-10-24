<h1>Daftar personal trayek Mpu</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mpukps-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		/*'nokps',
		'mb_srtkps1',
		'mb_srtkps2',
		'kodedk',
		'nosrtp2t',*/
		'nama',
		//'npwp',
		//'noinduk',
		'alamat',
		'kodewil',//lookup tbl kodewilayah
		/* array(
		 'name' => 'KODEWIL',
				              'type' =>'raw',
				              'Mpuwilayah::model()->findByPk($data->KODEWIL)->NAMAWIL',
		),*/
		/*'jenisijinp2t',*/
		'kodetra',
		//'jumlahken',
		'sifatpel',
		/*'mb_srtp2t1',
		'mb_srtp2t2',
		'tglterbitp2t',
		'ketp2t',
		'nosrtpit',
		'tglditetapkanpit',*/
		//'nopol',
		//'nouji',
		//'mb_uji1',
		//'mb_uji2',
		//'merk',
		//'thnken',
		//'kaporg',
		//'kapbrg',
		/*
		'idpjbtprop',
		'nokwi',
		'retribusi',
		'pelunasan',
		'tglentry',
		'kodeuser',
		'statusdata',
		'statuscetak',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
