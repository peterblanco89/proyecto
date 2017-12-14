<?php
/* @var $this MateriaxestudainteController */
/* @var $model Materiaxestudainte */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_estudiante'); ?>
		<?php echo $form->textField($model,'cod_estudiante',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_materia'); ?>
		<?php echo $form->textField($model,'cod_materia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_matricula'); ?>
		<?php echo $form->textField($model,'fecha_matricula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->