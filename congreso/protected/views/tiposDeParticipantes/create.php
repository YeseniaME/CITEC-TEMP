<?php
/* @var $this TiposDeParticipantesController */
/* @var $model TiposDeParticipantes */

$this->breadcrumbs=array(
	'Tipos De Participantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TiposDeParticipantes', 'url'=>array('index')),
	array('label'=>'Manage TiposDeParticipantes', 'url'=>array('admin')),
);
?>

<h1>Create TiposDeParticipantes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>