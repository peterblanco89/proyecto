<?php
/* @var $this MateriaxestudainteController */
/* @var $model Materiaxestudainte */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'materiaxestudainte-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id'); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div>-->

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'cod_estudiante'); ?>
		<?php //echo $form->textField($model,'cod_estudiante',array('size'=>12,'maxlength'=>12)); ?>
		<?php //echo $form->error($model,'cod_estudiante'); ?>
	</div>-->

	<div class="row">
		
		<?php  $form->labelEx($model,'cod_estudiante'); ?>		
		<?php  $e=$_GET['id_carnet']; ?>
		<?php //echo Yii::app()->user->getId(); ?>
		<?php echo $form->hiddenField($model,'cod_estudiante',array('value'=>$e, 'readonly'=>'false')); ?>
		<?php echo $form->error($model,'cod_estudiante'); ?>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'cod_materia'); ?>
		<?php //echo $form->textField($model,'cod_materia'); ?>
		<?php //echo $form->error($model,'cod_materia'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'cod_materia'); ?>
		<?php echo $form->dropDownList($model, 'cod_materia', 
		CHtml::listData(Materia::model()->findAll(
		array('order'=>'nombre_materia')), 'id_materia', 'nombre_materia'), 
		array('empty'=> Yii::t('default', '--Seleccionar--')));  ?>		
		<?php echo $form->error($model,'cod_materia'); ?>
	</div>


	<div class="row">
		<?php
		 date_default_timezone_set('America/Bogota');
                 $fecha = Date('Y-m-d'); ?>
		<?php echo $form->hiddenField($model,'fecha_matricula', array('value'=>$fecha, 'readonly'=>'false')); ?>
		<?php echo $form->error($model,'fecha_matricula'); ?>
	</div> 

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->