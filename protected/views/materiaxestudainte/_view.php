<?php
/* @var $this MateriaxestudainteController */
/* @var $data Materiaxestudainte */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_estudiante')); ?>:</b>
	<?php echo CHtml::encode($data->cod_estudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_materia')); ?>:</b>
	<?php echo CHtml::encode($data->cod_materia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_matricula')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_matricula); ?>
	<br />


</div>