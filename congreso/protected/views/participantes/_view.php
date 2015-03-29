<?php
/* @var $this ParticipantesController */
/* @var $data Participantes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_participante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_participante), array('view', 'id'=>$data->id_participante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($data->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>