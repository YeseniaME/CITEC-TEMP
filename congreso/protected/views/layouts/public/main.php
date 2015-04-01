<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CITEC | ITC</title>

  <link href="img/itc.png" rel="icon" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link id="callCss" rel="stylesheet" href="themes/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />

  <link id="callCss"rel="stylesheet" href="themes/css/style.css" type="text/css" media="screen" charset="utf-8" />
  <link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet">

  <!-- CSS Modal -->
  <link rel="stylesheet" type="text/css" href="css/modal.css">

</head>
<body>
  <div id="headerSection">
    <div class="container">
      <div class="span3 logo">
        <a href="#">
          <img src="themes/img/super_logo2.png" alt="" />
        </a>
      </div>
      
      <div class="navbar">
        <div class="nav-collapse">
          <ul class="nav">
            <?php 
            foreach ($this->menu as $key => $value) {
            ?>
            <li>
              <a href="<?php echo $value['url']; ?>"><?php echo $value['label']; ?></a>
            </li>
            <?php } ?>
          </ul>
        </div>

      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  </div>
</div>
<!--Header Ends================================================ -->

<div id="carouselSection" class="cntr"> 
      <div class="carousel-inner">
        <div class="item active">
          <a class="cntr" href="#"><img src="themes/img/citec_logo.png" alt=""></a>
        </div>
      </div>   
</div>
<!-- Sectionone block ends======================================== -->

<?php 
  echo $content; ?>
  
<!-- Our Services======================================== -->

<!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<script src="themes/js/jquery-1.9.1.min.js"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
<script src="themes/js/jquery.easing-1.3.min.js"></script>
<script src="themes/js/default.js"></script>

<script type="text/javascript">

  $(document).ready(function() {
  $('#myCarousel').carousel({
    interval: 7000
  });
  
  }); 
</script>

<!-- JQUERY MODAL -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>$.fn.expose = function(options) {
  
  var $modal = $(this), $trigger = $("a[href=" + this.selector + "]");
      
  $modal.on("expose:open", function() {
    
  $modal.addClass("is-visible");
  $modal.trigger("expose:opened");
  });

  $modal.on("expose:close", function() {
  $modal.removeClass("is-visible");
  $modal.trigger("expose:closed");
  });
  
  $trigger.on("click", function(e) {
    e.preventDefault();
    $modal.trigger("expose:open");
  });
  
  $modal.add( $modal.find(".close") ).on("click", function(e) {
    e.preventDefault();
    // if it isn't the background or close button, bail
    if( e.target !== this )
      return;
    
    $modal.trigger("expose:close");
  });
  return;
}

$("#Popup_lugar").expose();
$("#Popup_fecha").expose();
</script>

</body>
</html>