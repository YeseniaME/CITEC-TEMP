<?php
/* @var $this ParticipantesController */
/* @var $model Participantes */

$this->breadcrumbs=array(
	'Participantes'=>array('index'),
	$model->id_participante,
);

$this->menu=array(
	array('label'=>'List Participantes', 'url'=>array('index')),
	array('label'=>'Create Participantes', 'url'=>array('create')),
	array('label'=>'Update Participantes', 'url'=>array('update', 'id'=>$model->id_participante)),
	array('label'=>'Delete Participantes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_participante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Participantes', 'url'=>array('admin')),
);
?>

<h1>View Participantes #<?php echo $model->id_participante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_participante',
		'nombres',
		'apellidos',
		'email',
	),
)); ?>
