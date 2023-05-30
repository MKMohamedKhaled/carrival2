<?php
include 'header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>

<body>
    <div class="bg-images"></div>


    <!-- Come To You Section -->
    <section class="come-to-you">
        <div class="come-container">
            <div class="row com-to-you-row">
                <div class="col-sm-12 col-lg-6 come-col image-col-come">
                    <img src="images/cometoyou2.jpg" alt="" class="cometoyou-image image1">
                    <img src="images/cometoyou1.jpg" alt="" class="cometoyou-image image2">
                </div>
                <div class="col-sm-12 col-lg-6 come-col come-content">
                    <h1 class="come-header">WE COME TO YOU</h1>
                    <p class="come-description">Carrival is a premier automotive company specializing in importing
                        top-quality cars to the United Arab Emirates. With years of experience in the industry, we have
                        established ourselves as a trusted source for top-notch vehicles. We are passionate about
                        providing our clients with the best possible experience when it comes to buying a car. Our team
                        of experts carefully handpicks a range of vehicles from the world's leading manufacturers to
                        ensure that our clients have access to the latest models and the best brands.</p>
                    <a href="#" class="btn btn-come-read">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Come To You Section -->


    <!-- Adventure -->
    <section class="adventure-section">

        <div class="container adventure-container">
            <div class="row adventure-content-row">
                <div class="col-lg-7 col-12">
                    <h2 class="ready-h"><span class="ready-p">GET READY </span>FOR YOUR NEXT ADVENTURE</h2>
                </div>
                <div class="col-lg-5 col-12">
                    <p class="adenture-p">Carrival is proud to offer a diverse selection of premium vehicles to meet the
                        needs of our discerning clients. Whether you're looking for a car for business or pleasure, our
                        cars selection will provide the sophistication and elegance you need. Contact us today to start
                        with the importing process.</p>
                </div>
            </div>

            <!-- Large Screen -->
            <div class="row cars-row">
                <div class="col-lg-6 col-12">
                    <div class="cars-content">
                        <img src="images/ready1.jpg" alt="" class="ready-car">
                        <p calss="car-type">Mercedes-Benz G-Class (2023)</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="cars-content">
                        <img src="images/ready2.jpg" alt="" class="ready-car">
                        <p calss="car-type">Jaguar XF (2021)</p>
                    </div>
                </div>
            </div>


            <!-- Small Screen -->


            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="cars-content">
                            <img src="images/ready1.jpg" alt="" class="ready-car">
                            <p calss="car-type">Mercedes-Benz G-Class (2023)</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="cars-content">
                            <img src="images/ready2.jpg" alt="" class="ready-car">
                            <p calss="car-type">Jaguar XF (2021)</p>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- Adventure -->

    <div class="container">
        <div class="span-after"></div>
    </div>



    <!-- How Section -->
    <section class="how-section">
        <div class="row how-row">
            <div class="col-lg-3 col-12 how-content">
                <h2 class="how-header"><span calss="how-span">HOW </span>DOES IT WORK</h2>
                <p>Discover the comprehensive process we undertake to import your dream car with ease! Explore the steps we take to get your car imported.</p>
            </div>
            <div class="col-lg-9 col-12 steps">
                <div class="row step-row">
                    <div class="col-lg-4 col-12 image-how-col">
                        <img src="images/how1.jpg" alt="" class="step-image">
                    </div>
                    <div class="col-lg-8 col-12 step-description">
                        <h3 class="step-n">Step One: Find Your Dream Car</h3>
                        <p class="step-p">Take the time to explore your options and find the car of your dreams. Our team is always on hand to provide expert guidance and support in finding the perfect vehicle for you.</p>
                    </div>
                </div>


                <div class="row step-row">
                    <div class="col-lg-4 col-12 image-how-col">
                        <img src="images/how2.jpg" alt="" class="step-image">
                    </div>
                    <div class="col-lg-8 col-12 step-description">
                        <h3 class="step-n">Step Two: Submit Your Import Request</h3>
                        <p class="step-p">Easily complete our import request form with all the necessary information and let our team handle the rest.</p>
                    </div>
                </div>
                <div class="row step-row">
                    <div class="col-lg-4 col-12 image-how-col">
                        <img src="images/how3.jpg" alt="" class="step-image">
                    </div>
                    <div class="col-lg-8 col-12 step-description">
                        <h3 class="step-n">Step Three: Follow Your Import Journey</h3>
                        <p class="step-p">Stay updated on the progress of your import by accessing our tracking page, where you can follow your journey every step of the way.</p>
                        <p class="step-p">At Carrival, we strive to make the import process seamless and enjoyable. Let us guide you through the process of bringing your dream car to the UAE.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- How Section -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
        });
    </script>
  
  <?php
    include "footer.php";
    ?>
</body>
</html> 
   