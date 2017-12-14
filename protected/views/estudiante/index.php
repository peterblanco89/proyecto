<?php
/* @var $this EstudianteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estudiantes',
);

$this->menu=array(
	array('label'=>'Nuevo Estudiante', 'url'=>array('create')),
	array('label'=>'Administrar Estudiante', 'url'=>array('admin')),
);
?>

<h1>Estudiantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
