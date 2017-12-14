<?php
/* @var $this MateriaxestudainteController */
/* @var $dataProvider CActiveDataProvider 

$this->breadcrumbs=array(
	'Materiaxestudaintes',
);

$this->menu=array(
	array('label'=>'Create Materiaxestudainte', 'url'=>array('create')),
	array('label'=>'Manage Materiaxestudainte', 'url'=>array('admin')),
);*/
?>

<h1>Materias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
