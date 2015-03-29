<?php
/* @var $this EventosController */
/* @var $data Eventos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_evento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_evento), array('view', 'id'=>$data->id_evento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logotipo')); ?>:</b>
	<?php echo CHtml::encode($data->logotipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convocatoria')); ?>:</b>
	<?php echo CHtml::encode($data->convocatoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo')); ?>:</b>
	<?php echo CHtml::encode($data->costo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_fin')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_fin); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar')); ?>:</b>
	<?php echo CHtml::encode($data->lugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mas_informacion')); ?>:</b>
	<?php echo CHtml::encode($data->mas_informacion); ?>
	<br />

	*/ ?>

</div>