<?php
/* @var $this EventosController */
/* @var $model Eventos */

$this->breadcrumbs=array(
	'Eventoses'=>array('index'),
	$model->id_evento=>array('view','id'=>$model->id_evento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Eventos', 'url'=>array('index')),
	array('label'=>'Create Eventos', 'url'=>array('create')),
	array('label'=>'View Eventos', 'url'=>array('view', 'id'=>$model->id_evento)),
	array('label'=>'Manage Eventos', 'url'=>array('admin')),
);
?>

<h1>Update Eventos <?php echo $model->id_evento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>