<?php
/* @var $this ArticulosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articuloses',
);

$this->menu=array(
	array('label'=>'Create Articulos', 'url'=>array('create')),
	array('label'=>'Manage Articulos', 'url'=>array('admin')),
);
?>

<h1>Articuloses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
