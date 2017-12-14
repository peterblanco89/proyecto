<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estudiante-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_carnet'); ?>
		<?php echo $form->textField($model,'id_carnet',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'id_carnet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo_doc'); ?>
		<?php echo $form->dropDownList($model,'Tipo_doc',array(
		'CC'=>'CC','TI'=>'TI','RC'=>'RC','CE'=>'CE','NIT'=>'NIT',
		'RUT'=>'RUT'),
		array('empty'=> Yii::t('default', '--Seleccionar--'))); ?>
		<?php echo $form->error($model,'Tipo_doc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documento'); ?>
		<?php echo $form->textField($model,'documento',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'documento'); ?>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'Tipo_doc'); ?>
		<?php //echo $form->textField($model,'Tipo_doc',array('size'=>10,'maxlength'=>10)); ?>
		<?php //echo $form->error($model,'Tipo_doc'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->dropDownList($model,'sexo',array('M'=>'M','F'=>'F'),
		array('empty'=> Yii::t('default', '--Seleccionar--'))); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->