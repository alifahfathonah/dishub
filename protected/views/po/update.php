<?php
$this->breadcrumbs=array(
	'Pos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Tambah Data Perusahaan Angkutan (PO)', 'url'=>array('create')),
	array('label'=>'Data Perusahaan Angkutan (PO)', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Daftar Perusahaan Angkutan (PO)', 'url'=>array('admin')),
);
?>

<h1>Update Data Perusahaan Angkutan (PO)</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>