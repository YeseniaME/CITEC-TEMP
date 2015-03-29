<?php
/* @var $this ArticulosController */
/* @var $model Articulos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_articulo'); ?>
		<?php echo $form->textField($model,'id_articulo',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_participante'); ?>
		<?php echo $form->textField($model,'id_participante',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_evento'); ?>
		<?php echo $form->textField($model,'id_evento',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resumen'); ?>
		<?php echo $form->textArea($model,'resumen',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'articulo_pdf'); ?>
		<?php echo $form->textField($model,'articulo_pdf',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aceptado'); ?>
		<?php echo $form->textField($model,'aceptado',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resultado'); ?>
		<?php echo $form->textArea($model,'resultado',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->