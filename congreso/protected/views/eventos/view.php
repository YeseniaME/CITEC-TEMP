<?php
/* @var $this EventosController */
/* @var $model Eventos */

$this->breadcrumbs=array(
	'Eventoses'=>array('index'),
	$model->id_evento,
);

$this->menu=array(
	array('label'=>'List Eventos', 'url'=>array('index')),
	array('label'=>'Create Eventos', 'url'=>array('create')),
	array('label'=>'Update Eventos', 'url'=>array('update', 'id'=>$model->id_evento)),
	array('label'=>'Delete Eventos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_evento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Eventos', 'url'=>array('admin')),
);
?>

<h1>View Eventos #<?php echo $model->id_evento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_evento',
		'nombre',
		'logotipo',
		'convocatoria',
		'costo',
		'fecha_inicio',
		'fecha_fin',
		'lugar',
		'mas_informacion',
	),
)); ?>
