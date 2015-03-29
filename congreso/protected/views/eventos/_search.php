<?php
/* @var $this EventosController */
/* @var $model Eventos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_evento'); ?>
		<?php echo $form->textField($model,'id_evento',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'logotipo'); ?>
		<?php echo $form->textField($model,'logotipo',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'convocatoria'); ?>
		<?php echo $form->textField($model,'convocatoria',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo'); ?>
		<?php echo $form->textArea($model,'costo',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_inicio'); ?>
		<?php echo $form->textField($model,'fecha_inicio',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_fin'); ?>
		<?php echo $form->textField($model,'fecha_fin',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mas_informacion'); ?>
		<?php echo $form->textArea($model,'mas_informacion',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->