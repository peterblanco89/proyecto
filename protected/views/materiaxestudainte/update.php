<?php
/* @var $this MateriaxestudainteController */
/* @var $model Materiaxestudainte 

$this->breadcrumbs=array(
	'Materiaxestudaintes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Materiaxestudainte', 'url'=>array('index')),
	array('label'=>'Create Materiaxestudainte', 'url'=>array('create')),
	array('label'=>'View Materiaxestudainte', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Materiaxestudainte', 'url'=>array('admin')),
);*/
?>

<h1>Editar <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>