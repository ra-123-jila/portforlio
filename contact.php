<?php include('assets/include/header.php');?>
<?php
$Error=$nameError=$emailError='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    if ($name==''||$email=='') {
        $Error="Name and email are required!!";
    }
    else if(!preg_match("/^[a-zA-Z]*$/",$name)){
        $nameError= "Name should contain only alphabets.";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailError= "$email is not valid email.";
    }
    
}
?>
<!-- banner -->
    <div class="banner-contact">
        <div class="resta-name">Fauna Kitchen</div>
        <div class="intro"><p>Contact Us</div>
    </div>

<!-- contact -->
    <div class="container contact1">
        <div class="row text-center mt-3 pt-4">
            <h class="title">Contact <span class="title-color">Us</span></h3>
        </div>
        <div class="row justify-content-center mt-3 pb-3">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="row mb-2">
                    <span style="color: red;"><?php echo $Error;?></span>
                        <div class="col-6">
                            <input type="text" name="name" placeholder="Your Name" class="form-control"><span style="color: red;"><?php echo $nameError;?></span>
                        </div>
                        <div class="col-6">
                            <input type="text" name="email" placeholder="Your Email" class="form-control"><span style="color: red;"><?php echo $emailError;?></span>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <input type="text" name="subject" placeholder="Subject" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <textarea name="message" rows="3" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn" id="contact-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include('assets/include/footer.php');?>