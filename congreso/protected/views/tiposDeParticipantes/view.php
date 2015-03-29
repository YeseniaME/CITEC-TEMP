<?php
/* @var $this TiposDeParticipantesController */
/* @var $model TiposDeParticipantes */

$this->breadcrumbs=array(
	'Tipos De Participantes'=>array('index'),
	$model->id_tipo,
);

$this->menu=array(
	array('label'=>'List TiposDeParticipantes', 'url'=>array('index')),
	array('label'=>'Create TiposDeParticipantes', 'url'=>array('create')),
	array('label'=>'Update TiposDeParticipantes', 'url'=>array('update', 'id'=>$model->id_tipo)),
	array('label'=>'Delete TiposDeParticipantes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TiposDeParticipantes', 'url'=>array('admin')),
);
?>

<h1>View TiposDeParticipantes #<?php echo $model->id_tipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo',
		'tipo',
	),
)); ?>
