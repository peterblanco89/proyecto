<?php
/* @var $this MateriaController */
/* @var $data Materia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_materia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_materia), array('view', 'id'=>$data->id_materia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_materia')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_materia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intensidad_horaria')); ?>:</b>
	<?php echo CHtml::encode($data->intensidad_horaria); ?>
	<br />


</div>