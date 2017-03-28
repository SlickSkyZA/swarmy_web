<?php include 'header.php';?>
<body>
  <div class="container bg">
    <div class="col-md-10">
      <img width="100" src="logo.png" style="margin-top: -10px;" />
      <span class="brand">SWARMY LIMITED</span>
    </div>
    <div class="col-md-2 pull-right">
      <i class="social fa fa-facebook fa-2x" style="color: rgb(100, 100, 246);"></i>
      <i class="social fa fa-google-plus fa-2x" style="color: rgb(252, 49, 49);"></i>
      <i class="social fa fa-twitter fa-2x" style="color: rgb(47, 188, 255);"></i>
    </div>    
  </div> 

  <br>

  <div class="container">
    <?php include 'navigation.php';?>
    <div class="col-md-12">
      <div id="carousel-example-generic" class="carousel slide carousel-holder" data-ride="carousel" style="">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="sw1.jpeg" width="100%" height="200px"  alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
          <div class="item">
            <img src="sw1.jpeg" width="100%" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
          <div class="item">
            <img src="sw1.jpeg" width="100%"  alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
        </div>
      
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <!-- ======================================================================= --> 
     <?php include 'home-section.php';?> 
    <!-- ======================================================================= -->  
    
    <?php include 'footer.php';?>

