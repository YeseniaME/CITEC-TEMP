<?php
/* @var $this TipoDeActividadesController */
/* @var $model TipoDeActividades */

$this->breadcrumbs=array(
	'Tipo De Actividades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoDeActividades', 'url'=>array('index')),
	array('label'=>'Manage TipoDeActividades', 'url'=>array('admin')),
);
?>

<h1>Create TipoDeActividades</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>