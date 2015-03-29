<?php
/* @var $this ArticulosController */
/* @var $data Articulos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_articulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_articulo), array('view', 'id'=>$data->id_articulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_participante')); ?>:</b>
	<?php echo CHtml::encode($data->id_participante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_evento')); ?>:</b>
	<?php echo CHtml::encode($data->id_evento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resumen')); ?>:</b>
	<?php echo CHtml::encode($data->resumen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('articulo_pdf')); ?>:</b>
	<?php echo CHtml::encode($data->articulo_pdf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aceptado')); ?>:</b>
	<?php echo CHtml::encode($data->aceptado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('resultado')); ?>:</b>
	<?php echo CHtml::encode($data->resultado); ?>
	<br />

	*/ ?>

</div>