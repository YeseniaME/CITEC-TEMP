<?php
/* @var $this ArticulosController */
/* @var $model Articulos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articulos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_participante'); ?>
		<?php echo $form->textField($model,'id_participante',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'id_participante'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'id_evento'); ?>
		<?php echo $form->textField($model,'id_evento',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'id_evento'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'resumen'); ?>
		<?php echo $form->textArea($model,'resumen',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'resumen'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'articulo_pdf'); ?>
		<?php echo $form->textField($model,'articulo_pdf',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'articulo_pdf'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'aceptado'); ?>
		<?php echo $form->textField($model,'aceptado',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'aceptado'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'resultado'); ?>
		<?php echo $form->textArea($model,'resultado',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'resultado'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->