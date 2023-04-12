<?php include('assets/include/header.php');?>
<?php
$Error=$nameError=$emailError=$phoneError=$numberError='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $number=$_POST['number'];
    if ($name==''||$email==''||$phone==''||$number=='') {
        $Error="All fields marked with * are required!!";
    }
    else if(!preg_match("/^[a-zA-Z]*$/",$name)){
        $nameError= "Name should contain only alphabets.";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailError= "$email is not valid email.";
    }
    else if(!preg_match("/^(97|98)[0-9]{8}$/",$phone)){
        $phoneError="Phone should contain only number and must begin with 97 or 98.";
    }
    else if(!preg_match("/^[0-9]$/",$number)){
        $numberError="Enter the number of people";
    }
    
}
?>
<!-- book table -->
<div class="container-fluid mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="title">Book <span class="title-color">a Table</span></h4>
                </div>
            </div>
            <div class="row" id="book">
                <div class="col-lg-6">
                    <img src="assets/image/table.jpg" class="img-fluid">
                </div>
                <div class="col-lg-6 mt-4">
                    <form action="" method="post"> 
                        <div class="row pb-3">
                        <span style="color: red;"><?php echo $Error;?></span>
                            <div class="col-md-4">
                                <input type="text" name="name" placeholder="Your Name*" class="form-control"><span style="color: red;"><?php echo $nameError;?></span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="email" placeholder="Your Email*" class="form-control"><span style="color: red;"><?php echo $emailError;?></span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="phone" placeholder="Your Phone*" class="form-control"><span style="color: red;"><?php echo $phoneError;?></span>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-4">
                                <input type="date" name="date" placeholder="Date" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <input type="time" name="time" placeholder="Time" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="text" placeholder="No. of People*" class="form-control"><span style="color: red;"><?php echo $numberError;?></span>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-12"><input type="text" name="subject" placeholder="Subject" class="form-control"></div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-12">
                                <textarea name="message" rows="3" placeholder="Message" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn" id="book-btn" value="Book Table">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('assets/include/footer.php');?>