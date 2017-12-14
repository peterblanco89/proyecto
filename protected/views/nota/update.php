<?php
/* @var $this NotaController */
/* @var $model Nota *

$this->breadcrumbs=array(
	'Notas'=>array('index'),
	$model->idnota=>array('view','id'=>$model->idnota),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nota', 'url'=>array('index')),
	array('label'=>'Create Nota', 'url'=>array('create')),
	array('label'=>'View Nota', 'url'=>array('view', 'id'=>$model->idnota)),
	array('label'=>'Manage Nota', 'url'=>array('admin')),
);*/
?>

<h1>Editar Nota <?php echo $model->idnota; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>