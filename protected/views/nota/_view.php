<?php
/* @var $this NotaController */
/* @var $data Nota */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idnota')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idnota), array('view', 'id'=>$data->idnota)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_mxe')); ?>:</b>
	<?php echo CHtml::encode($data->cod_mxe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nota')); ?>:</b>
	<?php echo CHtml::encode($data->nota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />


</div>