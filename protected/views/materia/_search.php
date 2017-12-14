<?php
/* @var $this MateriaController */
/* @var $model Materia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_materia'); ?>
		<?php echo $form->textField($model,'id_materia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_materia'); ?>
		<?php echo $form->textField($model,'nombre_materia',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intensidad_horaria'); ?>
		<?php echo $form->textField($model,'intensidad_horaria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->