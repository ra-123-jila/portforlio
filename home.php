<?php include('assets/include/header.php');?>

        <!-- banner -->
       
        <div class="banner" id="banner">
            <div class="resta-name">Fauna Kitchen</div>
            <div class="intro"><p>Enjoy Your Healthy <br> And Delicious Food </p></div>
        </div>
        <!-- about -->
        <div class="container-fluid about position-relative pad-top-100 pad-bottom-100" id="about">
            <div class="row justify-content-center text-center pt-4">
                <div class="col-12"><h4 class="title">About <span class="title-color">Us</span></h4></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-11" id="about-text">
                    <p>Located in the heart of Swayambhu, our restaurant boosts a remarkable location in a newly developed and managed space. We are open seven days a week, serving a delectable selection of breakfast, lunch, dinner, and grilled dishes throughout the day. We have different services for performing family function.</p>
                    <div class="text-center"><button type="button" class="btn" id="about-btn" href="">Read More</button></div>
                </div>
                <div class="col-lg-5 col-11 position-relative" id="about-image">
                <img src="assets/image/restaurant2.jpg" class="image">
                <img src="assets/image/aboutimg.jpg" class="">
                    
                </div>
                
            </div>
            
        </div>
        <!-- about end -->

        <!-- services -->

<div class="container-fluid services">
    
    <div class="row justify-content-center text-center pt-4">
        
        <div class="col-12">
            <h4 class="title">Our <span class="title-color">Services</span></h4>
            <p>We always provide different variaties of food sevices to our customer. <br>
                Some of our services of food are mentioned below.
            </p>
        </div>
    </div>
    <div class="row justify-content-evenly mt-2">
        <div class="col-md-3 text-center">
            <img src="assets/icons/coffee.png" class="pb-4">
            <h3>Breakfast</h3>
            <p>Breakfast is the mouthful that is the commitment to a new day, a continuing life.</p>
        </div>
        <div class="col-md-3 text-center">
            <img src="assets/icons/dish.png" class="pb-3">
            <h3>Lunch</h3>
            <p>Destiny may ride with us today, but there is no reason for it to interfere with lunch.</p>
        </div>
        <div class="col-md-3 text-center">
            <img src="assets/icons/dinner.png" class="pb-3">
            <h3>Dinner</h3>
            <p>Dinner is better when we eat together. 
                The best memories are made around the dinner table.
                </p>

        </div>
        <div class="text-center"><button type="button" class="btn" id="service-btn"><a href="menu.php" class="text-decoration-none text-white">Load Menu</a></button></div>
        
    </div>
    
</div>

<!-- contact form -->

<div class="container-fluid contact">
    <div class="row text-center mt-3 pt-4">
        <h class="title">Contact <span class="title-color">Us</span></h3>
    </div>
    <div class="row justify-content-center mt-3 pb-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="row mb-2">
                    <div class="col-6">
                        <input type="text" name="name" placeholder="Your Name" class="form-control">
                    </div>
                    <div class="col-6">
                        <input type="text" name="email" placeholder="Your Email" class="form-control">
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


<!-- contact form end -->
<!-- map -->
<div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14127.632546447245!2d85.28558757531202!3d27.72012247458385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18ece8135209%3A0xa82eb67cf4731fa8!2sSwayambhu%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1680340510433!5m2!1sen!2snp" style="width: 100%;" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php include('assets/include/footer.php');?>