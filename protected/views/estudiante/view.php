<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->id_carnet,
);

$this->menu=array(
	array('label'=>'Listar Estudiante', 'url'=>array('index')),
	array('label'=>'Nuevo Estudiante', 'url'=>array('create')),
	array('label'=>'Editar Estudiante', 'url'=>array('update', 'id'=>$model->id_carnet)),
	array('label'=>'Eliminar Estudiante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_carnet),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Estudiante', 'url'=>array('admin')),
);
?>

<h1>Estudiante No <?php echo $model->id_carnet; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_carnet',
		'documento',
		'Tipo_doc',
		'nombre',
		'apellido',
		'sexo',
	),
)); ?>
