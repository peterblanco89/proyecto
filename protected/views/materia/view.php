<?php
/* @var $this MateriaController */
/* @var $model Materia */

$this->breadcrumbs=array(
	'Materias'=>array('index'),
	$model->id_materia,
);

$this->menu=array(
	array('label'=>'Listar Materia', 'url'=>array('index')),
	array('label'=>'Crear Materia', 'url'=>array('create')),
	array('label'=>'Editar Materia', 'url'=>array('update', 'id'=>$model->id_materia)),
	array('label'=>'Eliminar Materia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_materia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Materia', 'url'=>array('admin')),
);
?>

<h1>Materia No <?php echo $model->id_materia; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_materia',
		'nombre_materia',
		'intensidad_horaria',
	),
)); ?>
