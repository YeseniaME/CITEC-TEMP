<?php
/* @var $this TiposDeParticipantesController */
/* @var $model TiposDeParticipantes */

$this->breadcrumbs=array(
	'Tipos De Participantes'=>array('index'),
	$model->id_tipo=>array('view','id'=>$model->id_tipo),
	'Update',
);

$this->menu=array(
	array('label'=>'List TiposDeParticipantes', 'url'=>array('index')),
	array('label'=>'Create TiposDeParticipantes', 'url'=>array('create')),
	array('label'=>'View TiposDeParticipantes', 'url'=>array('view', 'id'=>$model->id_tipo)),
	array('label'=>'Manage TiposDeParticipantes', 'url'=>array('admin')),
);
?>

<h1>Update TiposDeParticipantes <?php echo $model->id_tipo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>