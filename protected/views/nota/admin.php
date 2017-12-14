<?php
/* @var $this NotaController */
/* @var $model Nota 

$this->breadcrumbs=array(
	'Notas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Nota', 'url'=>array('index')),
	array('label'=>'Create Nota', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#nota-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Notas</h1>


<?php echo CHtml::link('Busuqeda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'nota-grid',
	'dataProvider'=>$model->search($_GET['id']),
	'filter'=>$model,
	'columns'=>array(
		'idnota',
		//'cod_mxe',
		'nota',
		'observacion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
