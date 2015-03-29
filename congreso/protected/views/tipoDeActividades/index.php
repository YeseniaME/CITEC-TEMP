<?php
/* @var $this TipoDeActividadesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo De Actividades',
);

$this->menu=array(
	array('label'=>'Create TipoDeActividades', 'url'=>array('create')),
	array('label'=>'Manage TipoDeActividades', 'url'=>array('admin')),
);
?>

<h1>Tipo De Actividades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
