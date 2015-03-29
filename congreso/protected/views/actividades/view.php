<?php
/* @var $this ActividadesController */
/* @var $model Actividades */

$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	$model->id_actividad,
);

$this->menu=array(
	array('label'=>'List Actividades', 'url'=>array('index')),
	array('label'=>'Create Actividades', 'url'=>array('create')),
	array('label'=>'Update Actividades', 'url'=>array('update', 'id'=>$model->id_actividad)),
	array('label'=>'Delete Actividades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_actividad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Actividades', 'url'=>array('admin')),
);
?>

<h1>View Actividades #<?php echo $model->id_actividad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_actividad',
		'id_tipo',
		'id_evento',
		'nombre',
		'fecha_inicio',
		'fecha_fin',
		'lugar',
	),
)); ?>
