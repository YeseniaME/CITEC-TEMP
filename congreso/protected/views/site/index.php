<!-- GOOGLE MAPS -->
<div id="Popup_lugar" class="Modal">
  <div class="content">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.138410769463!2d-100.81252!3d20.541517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cbabd3c2cd0ab%3A0x655a93bfa763b7ce!2sTecnologico+de+celaya+Campus+2!5e0!3m2!1ses!2s!4v1427825045855" 
    width="600" height="450" frameborder="0" style="border:0">
    </iframe>
    <span class="close"></span>
  </div>
</div>

<div id="Popup_fecha" class="Modal">
  <div class="content">
    <p><b>
      <?php echo $evento->nombre; ?>
    </b></p>
    <center>
      <?php echo $evento->mas_informacion; ?>
      <br><br>
      <p><?php echo $evento->lugar; ?></p>
      <br>
      <img src="<?php echo $evento->logotipo; ?>">
    </center>
    <span class="close"></span>
  </div>
</div>

<!-- CONTENEDOR: INFORMACION -->
<div id="ourServices">  
  <div class="container"> 
    <div class="row">
      <div class="row-fluid">

        <!--fecha de evento-->
        <div class="span4">
          <a href="#Popup_fecha">
            <div class="info-img">
              <img src="themes/img/calendar.png" >
            </div>
            <h4>¿Cu&aacute;ndo?</h4>
          </a>
        </div>

        <!--lugar de evento-->
        <div class="span4">
          <a href="#Popup_lugar">
            <div class="info-img">
              <img src="themes/img/where.png">
            </div>
            <h4>¿D&oacute;nde?</h4>
          </a>
        </div>

        <!--redes sociales-->
        <div class="span4">
          <div class="info-img">
            <a href="https://www.facebook.com/events/1420970331536992/">
              <img src="themes/img/facebook.png" height="112" width="112">
            </a>
            <a href="http://www.twitter.com/xtendify">
              <img src="themes/img/twitter.png" height="112" width="112">
            </a>
          </div>
          <br>
          <h4>Siguenos en</h4>
        </div>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- CONTENEDOR: ESPECIFICACIONES -->
<div id="portfolioSection">
  <div class="cntr">
    <h1>Especificaciones</h1>
    <p>En esta sección ecnontrarás todo lo que necesitas saber acerca del evento. Haz clic sobre la opción que desees ver en el menú de abajo.</p>
  </div>
  <div class="container"> 
    <ul class="nav nav-pills">
      <a class="btn btn-large btn-success" href="#all" data-toggle="tab">Talleres</a></li>
      <a class="btn btn-large btn-success" href="#web" data-toggle="tab">Visitas Industriales</a></li>
      <a class="btn btn-large btn-success" href="#mobile" data-toggle="tab">Eventos Sociales</a></li>
      <!--<a class="btn btn-large btn-success" href="#photo" data-toggle="tab" >Más Información</a></li>-->
    </ul>
  <div class="clr"></div>
  <div class="tabbable tabs">
    <div class="tab-content label-primary">
      <!-- costos -->
      <div class="tab-pane active" id="all">
        <ul class="thumbnails">
         <?php 
                   foreach ($talleres as $key => $value) {
                ?>
          <li class="span3">
            <div class="thumbnail">
              <div class="blockDtl">
               
                    <h4><?php echo $value->nombre; ?></h4>
                    <h5><?php echo $value->fecha_inicio; ?></h5>
                    <h5><?php echo $value->fecha_fin; ?></h5>
                    <h5><?php echo $value->lugar; ?></h5>
                    <h5><?php echo $value->costo; ?></h5>
                   <a href="#" class="btn btn-large btn-default">Detalles</a>
             
              </div>
            </div>
          </li> 
           <?php } ?>
        </ul>
      </div>

      <!-- calenario -->
      <div class="tab-pane" id="web">
        <ul class="thumbnails">
          <?php 
                   foreach ($industrial as $key => $value) {
                ?>
          <li class="span3">
            <div class="thumbnail">
              <div class="blockDtl">
              <h4><?php echo $value->nombre; ?></h4>
                    <h5><?php echo $value->fecha_inicio; ?></h5>
                    <h5><?php echo $value->fecha_fin; ?></h5>
                    <h5><?php echo $value->lugar; ?></h5>
                    <h5><?php echo $value->costo; ?></h5>
                   <a href="#" class="btn btn-large btn-default">Detalles</a>
              </div>
            </div>
          </li>  
            <?php } ?> 
        </ul>
      </div>

      <!-- convocatoria -->
      <div class="tab-pane" id="mobile">
        <ul class="thumbnails">
         <?php 
                   foreach ($eventoSocial as $key => $value) {
                ?>
          <li class="span3">
            <div class="thumbnail">
              <div class="blockDtl">
               <h4><?php echo $value->nombre; ?></h4>
                    <h5><?php echo $value->fecha_inicio; ?></h5>
                    <h5><?php echo $value->fecha_fin; ?></h5>
                    <h5><?php echo $value->lugar; ?></h5>
                    <h5><?php echo $value->costo; ?></h5>
                   <a href="#" class="btn btn-large btn-default">Detalles</a>
              </div>
            </div>
          </li>
            <?php } ?> 
        </ul>
      </div>
      <!-- mas informacion -->
      <div class="tab-pane" id="photo">
        <ul class="thumbnails">
          <li class="span3">
            <div class="thumbnail">
              <div class="blockDtl">
              aqui metelas las cosas<a href="#myModal1" role="button" data-toggle="modal"><img src="themes/img/img-7.png" alt=""></a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>

<!-- CONTENEDOR: LINEAMIENTOS -->
<div id="blogSection">
  <div class="container">
    <div class="row span12">
      <div class="span2">
        <img src="themes/img/lineamientos.png" alt="" />
      </div>
      <div class="span8">
        <div class="inner">
          <h1>Lineamientos</h1>
          <p>Eespecificación de lineamientos necesarios para la publicación de artículos</p>
          <a href="#" class="btn btn-large btn-success">Ver Documento</a>
        </div>
      </div>
    </div>
    <hr class="soften clear"/>
    <div class="row span12">
      <div class="span2">
        <img src="themes/img/formato.png" alt="" />
      </div>
      <div class="span8">
        <div class="inner">
          <h1>Formato</h1>
          <p>Conozca y descargue el formato para el artículo final.</p>
          <a href="#" class="btn btn-large btn-success">Ver Documento</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CONTENEDOR: PONENTES -->
<div id="meetourteamSection">
  <div class="span6">
    <h1 class="cntr">Ponentes</h1>
    <p>Estos serán los ponentes (y sus proyectos) con los que contaremos durante el evento. </p></div>
    <div class="container"> 
      <div class="tabbable tabs">
        <div class="tab-content label-primary">
          <div class="tab-pane active" id="all">
            <ul class="thumbnails">
            <?php 
            foreach ($participante as $key => $value) {
            ?>
              <li class="span4">
                <div class="thumbnail">
                  <div class="blockDtl">
                    <a href="#" ><img src="themes/img/img-11.png" alt=""></a>
                    <h4><?php echo $value->nombres; ?></h4>
                    <h5><?php echo $value->apellidos; ?></h5>
                    <p><?php echo $value->email; ?></p>
                    <a class="facebook" href="#"></a>
                    <a class="twitter" href="#"></a>
                    <a class="pin" href="#"></a>
                  </div>
                </div>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>


<!-- CONTENEDOR: REGISTRO -->
<div id="contactSection">
  <div class="span8">
    <h1 class="cntr">Registro</h1>
    <p><b>No te quedes fuera!</b> Inscribete para ser parte de los eventos de <b>CITEC 2015</b></p></div>
    <div class="container"> 
      <div class="row"> 
        <div class="span8">
      
          <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'participantes-form','enableAjaxValidation'=>false,
            )
          ); ?>
          
          <!--campos de registro-->
          <fieldset>
            <!--nombre-->
            <div class="form-group">
              <div class="controls">
                <?php echo $form->labelEx($model,'nombres',array('class'=>'form-control')); ?>
                <?php echo $form->textField($model,'nombres',
                  array('size'=>60,'maxlength'=>250,'class'=>'form-control','style'=>'height:40px;font-size:20px;width:800px;','placeholder'=>'Nombre(s)')); ?>
                <?php echo $form->error($model,'nombres'); ?>
              </div>
            </div>

            <!--apellidos-->
            <div class="form-group">
              <div class="controls">
                <?php echo $form->labelEx($model,'apellidos'); ?>
                <?php echo $form->textField($model,'apellidos',
                array('size'=>60,'maxlength'=>250,'class'=>'form-control','style'=>'height:40px;font-size:20px;width:800px;','placeholder'=>'Apellido(s)')); ?>
                <?php echo $form->error($model,'apellidos'); ?>
              </div>
            </div>

            <!--email-->
            <div class="form-group">
              <div class="controls">
                <?php echo $form->labelEx($model,'email'); ?>
                <?php echo $form->textField($model,'email',
                array('size'=>60,'maxlength'=>250,'class'=>'form-control','style'=>'height:40px;font-size:20px;width:800px;','placeholder'=>'example@correo.com')); ?>
                <?php echo $form->error($model,'email'); ?>
              </div>
            </div>

            <div class="form-group">
             <div class="controls">
              <?php echo $form->labelEx($model,'contraseña'); ?>
              <?php echo $form->passwordField($model,'contraseña',
              array('size'=>60,'maxlength'=>250,'class'=>'form-control','style'=>'height:40px;font-size:20px;width:800px;','placeholder'=>'Contraseña')); ?>
              <?php echo $form->error($model,'contraseña'); ?>
             </div>
          </div>

            <div class="form-group">
              <div class="controls">
              <?php echo $form->labelEx($model,'veri_contraseña'); ?>
              <?php echo $form->passwordField($model,'veri_contraseña',
              array('size'=>60,'maxlength'=>250,'class'=>'form-control','style'=>'height:40px;font-size:20px;width:800px;','placeholder'=>'Contraseña')); ?>
              <?php echo $form->error($model,'veri_contraseña'); ?>           
            </div>
          </div>
            <button type="submit" class="btn btn-large btn-success">Registrar</button>
          </fieldset>

          <?php $this->endWidget(); ?>
        </div>
      </div>
    </div>

    <!-- CONTENEDOR: FOOTER -->
    <div class="footerSection container">
      <div class=" span4 socialicon">
        <a class="facebook" href="http://www.facebook.com/xtendify"></a>
        <a class="twitter" href="http://www.twitter.com/xtendify"></a>
        <!--<a class="html5" href="#"></a>
        <a class="icon2" href="#"></a>-->
      </div>
      <div class="span8 copyright"> 
        <img src="img/itc.png" height='50' width='50'>
        <span style="font-weight: bold; color:#000;">  Instituto Tecnol&oacute;gico de Celaya | CITEC 2015 </span>
      </div>
    </div>
  </div> 

<a href="#" class="go-top" ><i class="icon-arrow-up"></i></a>