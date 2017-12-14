<?php
/* @var $this MateriaController */
/* @var $model Materia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'materia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_materia'); ?>
		<?php echo $form->textField($model,'nombre_materia',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nombre_materia'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'intensidad_horaria'); ?>
		<?php echo $form->dropDownList($model,'intensidad_horaria',array(
		'1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5',
		'6'=>'6','7'=>'7','8'=>'8'),
		array('empty'=> Yii::t('default', '--Seleccionar--'))); ?>
		<?php echo $form->error($model,'intensidad_horaria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->