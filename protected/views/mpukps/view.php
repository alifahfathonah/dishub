<h1 align="center">MPU <?php echo $model->nama; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		/*'nokps',
		'mb_srtkps1',
		'mb_srtkps2',
		'kodedk',
		'nosrtp2t',
		*/
		'nama',
		/*'npwp',
		'noinduk',*/
		'alamat',
    array('name'=>'NAMAWIL','label'=>'Wilayah',),
		/*
		'jenisijinp2t',*/
		array('name'=>'kodetra','label'=>'Kode Trayek',
			'value'=>$model->kodetra.' - '.$model->NAMATRA,
    ),
		array('name'=>'jumlahken','label'=>'Jumlah Kendaraan'),
		'sifatpel',
		/*
		'mb_srtp2t1',
		'mb_srtp2t2',
		'tglterbitp2t',
		'ketp2t',
		'nosrtpit',
		'tglditetapkanpit',*/
		array('name'=>'nopol','label'=>'Nomor Polisi',),
		/*'nouji',*/
		array('name'=>'mb_uji1','label'=>'Tanggal Uji ke-1'),
		array('name'=>'mb_uji2','label'=>'Tanggal Uji ke-2'),
		array('name'=>'merk','label'=>'Merk'),
		array('name'=>'thnken','label'=>'Tahun Kendaraan'),
		array('name'=>'kaporg','label'=>'Kapasitas Penumpang'),
		array('name'=>'kapbrg', 'label'=>'Kapasitas Barang'),
		/*
		'idpjbtprop',
		'nokwi',
		'retribusi',
		'pelunasan',
		'tglentry',
		'kodeuser',
		'statusdata',
		'statuscetak',*/
	),
)); ?>
