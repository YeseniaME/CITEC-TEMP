<h1>Bienvenido al generador de c&oacute;digo de Yii!</h1>

<p>
	Usted puede utilizar los siguientes generadores para crear rápidamente su aplicación Yii:
</p>
<ul>
	<?php foreach($this->module->controllerMap as $name=>$config): ?>
	<li><?php echo CHtml::link(ucwords(CHtml::encode($name).' generator'),array($name.'/index'));?></li>
	<?php endforeach; ?>
</ul>

