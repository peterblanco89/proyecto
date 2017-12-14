<?php
/* @var $this NotaController */
/* @var $model Nota 

$this->breadcrumbs=array(
	'Notas'=>array('index'),
	$model->idnota,
);

$this->menu=array(
	array('label'=>'List Nota', 'url'=>array('index')),
	array('label'=>'Create Nota', 'url'=>array('create')),
	array('label'=>'Update Nota', 'url'=>array('update', 'id'=>$model->idnota)),
	array('label'=>'Delete Nota', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idnota),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nota', 'url'=>array('admin')),
);*/
?>

<h1>Nota No <?php echo $model->idnota; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idnota',
		'cod_mxe',
		'nota',
		'observacion',
	),
)); ?>
