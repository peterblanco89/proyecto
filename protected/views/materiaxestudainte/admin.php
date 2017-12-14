<?php
/* @var $this MateriaxestudainteController */
/* @var $model Materiaxestudainte 

$this->breadcrumbs=array(
	'Materiaxestudaintes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#materiaxestudainte-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Matricula</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'materiaxestudainte-grid',
	'dataProvider'=>$model->search($_GET['id_carnet']),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'cod_estudiante',
		//'cod_materia',
		array('name'=>'cod_estudiante',
			   'value'=>'$data->codEstudiante->nombre_completo'), 
		array('name'=>'cod_materia',
			   'value'=>'$data->codMateria->nombre_materia'), 
		'fecha_matricula',
		array(
			'class'=>'CButtonColumn',
			'template'=>"{view}{update}{nota}{vernota}",                  
                    'buttons'=>array(
                    'nota' => array('label'=>'Registrar nota',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/visa.jpg',
                    'url'=>'$this->grid->controller->createUrl("/nota/create?id=$data->id")'),

                    'vernota' => array('label'=>'Ver notas',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/visa.jpg',
                    'url'=>'$this->grid->controller->createUrl("/nota/admin?id=$data->id")'),
		),
                    ),
	),
)); ?>
