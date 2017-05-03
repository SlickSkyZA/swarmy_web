<?php 
    include 'header.php';
    include 'top-header.php';
    include 'navigation.php';

    if(isset($_POST['send'])){
        $to = "swarmylimited@gmail.com";  // Your email here
        $from = $_REQUEST['email'];
        $name = $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $headers = "From: $from";
        $subject = "Swarmy limited Website Contact form.";
        $fields = array();
        $fields{"name"} = "name";
        $fields{"email"} = "Email";
        $fields{"phone"} = "phone";
        $fields{"message"} = "Message";

        $body = "Here is the Message From the swarmy limited Website Contact form.:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

        $send = mail($to, $subject, $body, $headers);

        echo '<script> alert("Message Sent. Thank you for contacting us. Will get back to you shortly using the details you provided..")</script>';    
    }
?>
<!-- ======================================================================= -->
<div class="col-md-12">
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
                <form method="post" action="">
                    <div class="form-group" data-scroll-reveal="enter from the left after .6s">
                        <input type="text" name="name" class="form-control" required="required" placeholder="Your Name">
                    </div>
                    <div class="form-group" data-scroll-reveal="enter from the left after .7s">
                        <input type="email" name="email" class="form-control" required="required" placeholder="Your Email">
                    </div>
                    <div class="form-group" data-scroll-reveal="enter from the left after .7s">
                        <input type="number" name="phone" class="form-control" required="required" placeholder="Your phone number">
                    </div>
                    <div class="form-group" data-scroll-reveal="enter from the left after .8s">
                        <textarea name="message" id="message" required="required" class="form-control" style="min-height: 100px;" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group" data-scroll-reveal="enter from the left after .9s">
                        <button type="submit" class="btn btn-style-2" name="send">Submit Request</button>
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
</div>
<?php include 'includes/team.php'; ?> 
<!-- ======================================================================= -->  
<?php include 'footer.php';?>