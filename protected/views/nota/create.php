<?php
/* @var $this NotaController */
/* @var $model Nota */

$this->breadcrumbs=array(
	'Notas'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List Nota', 'url'=>array('index')),
	array('label'=>'Manage Nota', 'url'=>array('admin')),
);*/
?>

<h1>Registar Nota</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>