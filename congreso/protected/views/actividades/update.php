<?php
/* @var $this ActividadesController */
/* @var $model Actividades */

$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	$model->id_actividad=>array('view','id'=>$model->id_actividad),
	'Update',
);

$this->menu=array(
	array('label'=>'List Actividades', 'url'=>array('index')),
	array('label'=>'Create Actividades', 'url'=>array('create')),
	array('label'=>'View Actividades', 'url'=>array('view', 'id'=>$model->id_actividad)),
	array('label'=>'Manage Actividades', 'url'=>array('admin')),
);
?>

<h1>Update Actividades <?php echo $model->id_actividad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>