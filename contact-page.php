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
     
    </div>
    <!-- ======================================================================= --> 
      <section id="contact">
        <div class="container">           
                <div class="row text-center" data-scroll-reveal="enter from the bottom after .5s">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <h2 class="">CONTACT US</h2>
                        <p> </p>
                        <br />
                    </div>
                  
                </div>
             <div class="row ">
                  <div class="col-lg-6  col-md-6  col-sm-6 cont-div">
                    <form>
                        <div class="form-group" data-scroll-reveal="enter from the left after .6s">
                            <input type="text" class="form-control" required="required" placeholder="Your Name">
                        </div>
                        <div class="form-group" data-scroll-reveal="enter from the left after .7s">
                            <input type="text" class="form-control" required="required" placeholder="Your Email">
                        </div>
                        <div class="form-group" data-scroll-reveal="enter from the left after .8s">
                            <textarea name="message" id="message" required="required" class="form-control" style="min-height: 100px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group" data-scroll-reveal="enter from the left after .9s">
                            <button type="submit" class="btn btn-style-2 ">Submit Request</button>
                        </div>

                    </form>
                </div>
                      <div class="col-lg-4 col-lg-offset-1  col-md-4  col-md-offset-1 col-sm-4 col-sm-offset-1" data-scroll-reveal="enter from the right after .8s">
                    <h3><strong>OUR LOCATION </strong></h3>
                    <p>Utumishi Co-op House, Mamlaka Rd. off Nyerere Rd. Fifth Floor </p>
                    <p><strong>ADDRESS :</strong> P.O. Box 433-020518 Nairobi</p>
                    <p><strong>TEL. No, :</strong> 0710411014, 0722565601</p>
                    <p><strong>Email:</strong> swarmylimited@gmail.com</p>
                    <br />
                </div>
              
            </div>
        </div>
    </section>
    <!-- ======================================================================= -->  
    
    <?php include 'footer.php';?>