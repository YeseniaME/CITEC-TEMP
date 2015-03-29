<h1>Generador de controlador</h1>

<p>Este generador le ayuda a generar rápidamente una nueva clase controlador,
una o varias acciones del controlador y sus correspondientes puntos de vista.</p>

<?php $form=$this->beginWidget('CCodeForm', array('model'=>$model)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'controller'); ?>
		<?php echo $form->textField($model,'controller',array('size'=>65)); ?>
		<div class="tooltip">
			El ID del controlador es sensible a mayúsculas y minúsculas. A continuación se presentan algunos ejemplos::
			<ul>
				<li><code>post</code> generates <code>PostController.php</code></li>
				<li><code>postTag</code> generates <code>PostTagController.php</code></li>
				<li><code>admin/user</code> generates <code>admin/UserController.php</code>.
					If the application has an <code>admin</code> module enabled,
					it will generate <code>UserController</code> within the module instead.
					Make sure to write module name in the correct case if it has a camelCase name.
				</li>
			</ul>
		</div>
		<?php echo $form->error($model,'controller'); ?>
	</div>

	<div class="row sticky">
		<?php echo $form->labelEx($model,'baseClass'); ?>
		<?php echo $form->textField($model,'baseClass',array('size'=>65)); ?>
		<div class="tooltip">
			This is the class that the new controller class will extend from.
			Please make sure the class exists and can be autoloaded.
		</div>
		<?php echo $form->error($model,'baseClass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actions'); ?>
		<?php echo $form->textField($model,'actions',array('size'=>65)); ?>
		<div class="tooltip">
			Action IDs are case-insensitive. Separate multiple action IDs with commas or spaces.
		</div>
		<?php echo $form->error($model,'actions'); ?>
	</div>

<?php $this->endWidget(); ?>
