<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/dashboard.css" rel="stylesheet">

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/backg.css" rel="stylesheet">
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container-fluid" >

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php ?> 
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>


	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Navegacion</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?r=site/login">CITEC</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#">Dashboard</a></li>-->
            <?php if(Yii::app()->user->isGuest): ?>
              <li><a href="?r=site/login">Log in</a></li>
            <?php else: ?>
              <li><a href="?r=site/logout">Log out</a></li>
            <?php endif; ?>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="?r=/site/index">Inicio <span class="sr-only">(current)</span></a></li>
            <li><a href="?r=eventos/admin">Eventos</a></li>
            <li><a href="?r=participantes/admin">Participantes</a></li>
            <li><a href="?r=actividades/admin">Actividades</a></li>
            <li><a href="?r=usuarios/admin">Usuarios</a></li>
          </ul>
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          	<?php echo $content; ?>
          <div class="row placeholders">
            
          </div>
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
 
	
</body>
</html>
