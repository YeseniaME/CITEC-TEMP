<?php
/* @var $this TipoDeActividadesController */
/* @var $model TipoDeActividades */

$this->breadcrumbs=array(
	'Tipo De Actividades'=>array('index'),
	$model->id_tipo=>array('view','id'=>$model->id_tipo),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoDeActividades', 'url'=>array('index')),
	array('label'=>'Create TipoDeActividades', 'url'=>array('create')),
	array('label'=>'View TipoDeActividades', 'url'=>array('view', 'id'=>$model->id_tipo)),
	array('label'=>'Manage TipoDeActividades', 'url'=>array('admin')),
);
?>

<h1>Update TipoDeActividades <?php echo $model->id_tipo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>