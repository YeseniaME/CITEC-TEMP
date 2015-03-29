<?php
/* @var $this TipoDeActividadesController */
/* @var $model TipoDeActividades */

$this->breadcrumbs=array(
	'Tipo De Actividades'=>array('index'),
	$model->id_tipo,
);

$this->menu=array(
	array('label'=>'List TipoDeActividades', 'url'=>array('index')),
	array('label'=>'Create TipoDeActividades', 'url'=>array('create')),
	array('label'=>'Update TipoDeActividades', 'url'=>array('update', 'id'=>$model->id_tipo)),
	array('label'=>'Delete TipoDeActividades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoDeActividades', 'url'=>array('admin')),
);
?>

<h1>View TipoDeActividades #<?php echo $model->id_tipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo',
		'tipo',
	),
)); ?>
