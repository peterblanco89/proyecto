<?php
/* @var $this MateriaxestudainteController */
/* @var $model Materiaxestudainte 

$this->breadcrumbs=array(
	'Materiaxestudaintes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Materiaxestudainte', 'url'=>array('index')),
	array('label'=>'Create Materiaxestudainte', 'url'=>array('create')),
	array('label'=>'Update Materiaxestudainte', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Materiaxestudainte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Materiaxestudainte', 'url'=>array('admin')),
);*/
?>

<h1>Matricula No <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		//'cod_estudiante',
		//'cod_materia',
		array( 'name'=>'cod_materia',
               'value'=>CHtml::encode(Materia::model()->find("id_materia = $model->cod_materia")->nombre_materia),                        
             ),
		'fecha_matricula',
	),
)); ?>
