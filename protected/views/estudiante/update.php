<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->id_carnet=>array('view','id'=>$model->id_carnet),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Estudiante', 'url'=>array('index')),
	array('label'=>'Nuevo Estudiante', 'url'=>array('create')),
	array('label'=>'Ver Estudiante', 'url'=>array('view', 'id'=>$model->id_carnet)),
	array('label'=>'Administrar Estudiante', 'url'=>array('admin')),
);
?>

<h1>Editar Estudiante <?php echo $model->id_carnet; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>