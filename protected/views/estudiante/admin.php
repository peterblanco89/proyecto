<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Estudiante', 'url'=>array('index')),
	array('label'=>'Nuevo Estudiante', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estudiante-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Estudiantes</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estudiante-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_carnet',
		'documento',
		//'Tipo_doc',
		//'nombre',
		//'apellido',
		'nombre_completo',
		//'sexo',
		array(
			'class'=>'CButtonColumn',
			'template'=>"{view}{update}{materia}{matricula}",                  
                    'buttons'=>array(
                    'materia' => array('label'=>'Adiciona rmateria',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/visa.jpg',
                    'url'=>'$this->grid->controller->createUrl("/materiaxestudainte/create?id_carnet=$data->id_carnet")'),

                    'matricula' => array('label'=>'materias',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/visa.jpg',
                    'url'=>'$this->grid->controller->createUrl("/materiaxestudainte/admin?id_carnet=$data->id_carnet")'),
		),
                    ),
	),
)); ?>
