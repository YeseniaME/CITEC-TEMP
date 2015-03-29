<?php
/* @var $this ArticulosController */
/* @var $model Articulos */

$this->breadcrumbs=array(
	'Articuloses'=>array('index'),
	$model->id_articulo,
);

$this->menu=array(
	array('label'=>'List Articulos', 'url'=>array('index')),
	array('label'=>'Create Articulos', 'url'=>array('create')),
	array('label'=>'Update Articulos', 'url'=>array('update', 'id'=>$model->id_articulo)),
	array('label'=>'Delete Articulos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_articulo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Articulos', 'url'=>array('admin')),
);
?>

<h1>View Articulos #<?php echo $model->id_articulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_articulo',
		'id_participante',
		'id_evento',
		'titulo',
		'resumen',
		'articulo_pdf',
		'aceptado',
		'resultado',
	),
)); ?>
