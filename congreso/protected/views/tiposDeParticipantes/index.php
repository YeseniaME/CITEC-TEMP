<?php
/* @var $this TiposDeParticipantesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipos De Participantes',
);

$this->menu=array(
	array('label'=>'Create TiposDeParticipantes', 'url'=>array('create')),
	array('label'=>'Manage TiposDeParticipantes', 'url'=>array('admin')),
);
?>

<h1>Tipos De Participantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
