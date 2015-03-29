<?php

class FormCode extends CCodeModel
{
	public $model;
	public $viewPath='application.views';
	public $viewName;
	public $scenario;

	private $_modelClass;

	public function rules()
	{
		return array_merge(parent::rules(), array(
			array('model, viewName, scenario', 'filter', 'filter'=>'trim'),
			array('model, viewName, viewPath', 'required'),
			array('model, viewPath', 'match', 'pattern'=>'/^\w+[\.\w+]*$/', 'message'=>'{attribute} should only contain word characters and dots.'),
			array('viewName', 'match', 'pattern'=>'/^\w+[\\/\w+]*$/', 'message'=>'{attribute} should only contain word characters and slashes.'),
			array('model', 'validateModel'),
			array('viewPath', 'validateViewPath'),
			array('scenario', 'match', 'pattern'=>'/^\w+$/', 'message'=>'{attribute} should only contain word characters.'),
			array('viewPath', 'sticky'),
		));
	}

	public function attributeLabels()
	{
		return array_merge(parent::attributeLabels(), array(
			'model'=>'Model Class',
			'viewName'=>'View Name',
			'viewPath'=>'View Path',
			'scenario'=>'Scenario',
		));
	}

	public function requiredTemplates()
	{
		return array(
			'form.php',
			'action.php',
		);
	}

	public function successMessage()
	{
		$output=<<<EOD
<p>El formulario ha sido generado correctamente.</p>
<p>Usted puede añadir el siguiente código en una clase de controlador adecuado para invocar la vista:</p>
EOD;
		$code="<?php\n".$this->render($this->templatePath.'/action.php');
		return $output.highlight_string($code,true);
	}

	public function validateModel($attribute,$params)
	{
		if($this->hasErrors('model'))
			return;
		$class=@Yii::import($this->model,true);
		if(!is_string($class) || !$this->classExists($class))
			$this->addError('model', "Class '{$this->model}' no existe o tiene errores de sintaxis.");
		elseif(!is_subclass_of($class,'CModel'))
			$this->addError('model', "'{$this->model}' debe extenderse desde CModel.");
		else
			$this->_modelClass=$class;
	}

	public function validateViewPath($attribute,$params)
	{
		if($this->hasErrors('viewPath'))
			return;
		if(Yii::getPathOfAlias($this->viewPath)===false)
			$this->addError('viewPath','View Path debe ser un alias de ruta válida.');
	}

	public function prepare()
	{
		$templatePath=$this->templatePath;
		$this->files[]=new CCodeFile(
			Yii::getPathOfAlias($this->viewPath).'/'.$this->viewName.'.php',
			$this->render($templatePath.'/form.php')
		);
	}

	public function getModelClass()
	{
		return $this->_modelClass;
	}

	public function getModelAttributes()
	{
		$model=new $this->_modelClass($this->scenario);
		return $model->getSafeAttributeNames();
	}
}