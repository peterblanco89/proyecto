<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Estudiante', 'url'=>array('index')),
	array('label'=>'Administrar Estudiante', 'url'=>array('admin')),
);
?>

<h1>Nuevo Estudiante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>