<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionUsuarioRegistrado(){
		$this->layout='//layouts/public/column1';

		$this->menu=array(
			//array('label'=>'Inicio', 'url'=>"ddddddd"),
		);

		$this->render('usuarioRegistrado',array(
			
		));
	}
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout='//layouts/public/column1';
		$evento = Eventos::model()->findByPk('1');

		$criteria= new CDbCriteria(); 
		$taller= new CDbCriteria(); 
		$visita= new CDbCriteria(); 
		$social= new CDbCriteria(); 
	      $participantes  = Participantes::model()->tablename();
          $participantestipo = ParticipantesTipos::model()->tablename();
          $tiposparticipante = TiposDeParticipantes::model()->tablename();
          $eventosTaller = Actividades::model()->tablename();

        $criteria->select = 't.nombres,t.apellidos,t.email';
        $criteria->join =
           'inner join '.$participantestipo.' pt on t.id_participante=pt.id_participante
            inner join '.$tiposparticipante.' tp on tp.id_tipo=pt.id_tipo';
        $criteria->compare('tp.tipo','congresista',true);

        $taller->select='t.nombre,t.fecha_inicio,t.fecha_fin,t.lugar,t.costo';
        $taller->compare('t.id_tipo','1',true);

        $visita->select='t.nombre,t.fecha_inicio,t.fecha_fin,t.lugar,t.costo';
        $visita->compare('t.id_tipo','2',true);

        $social->select='t.nombre,t.fecha_inicio,t.fecha_fin,t.lugar,t.costo';
        $social->compare('t.id_tipo','3',true);

        $talleres = Actividades::model()->findAll($taller);
        $industrial = Actividades::model()->findAll($visita);
        $eventoSocial = Actividades::model()->findAll($social);

		$participante = Participantes::model()->findAll($criteria);

		$model=new Participantes;

		if(isset($_POST['Participantes']))
		{
			$model->attributes=$_POST['Participantes'];
			if($model->save())
				$this->redirect(array('usuarioRegistrado','id'=>$model->id_participante));
		}

		$this->menu=array(
			array('label'=>'Información', 'url'=>"#ourServices"),
			array('label'=>'Especificaciones', 'url'=>"#portfolioSection"),
			array('label'=>'Ponentes', 'url'=>"#meetourteamSection"),
			array('label'=>'Registro', 'url'=>"#contactSection"),
			
		);


		$this->render('index',array(
			'evento'=>$evento,
			'model'=>$model,
			'participante'=>$participante,
			'talleres'=>$talleres,
			'industrial'=>$industrial,
			'eventoSocial'=>$eventoSocial,
		));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}