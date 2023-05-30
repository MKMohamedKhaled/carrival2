<?php
include "header-about.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact</title>
</head>

<body>

    <section class="contact-section">
        <div class="row contact-row">
            <div class="col-lg-7 contact-col contact-image">
                <img src="images/contact_img.png" alt="">
            </div>
            <div class="col-lg-5 col-12 contact-col">
            <div class="contact-form-container">
            <h1 class="contact-header">Talk To Us</h1>
                <p class="contact-des">Do you have any questions? Just send us a message.</p>
                <form action="" class="contact-form">
                    <div class="row contact-row">
                        <div class="col-12 contact-form-col">
                            <input type="text" placeholder="Name" class="contact-input"> 
                        </div>
                        <div class="col-12 contact-form-col">
                            <input type="email" placeholder="Email" class="contact-input"> 
                        </div>
                        <div class="col-12 contact-form-col">
                            <input type="text" placeholder="Phone" class="contact-input"> 
                        </div>
                        <div class="col-12 contact-form-col">
                        <textarea placeholder="How Can We Help?" class="contact-input"></textarea>
                        </div>
                        <div class="col-12 contact-form-col">
                            <input type="submit" value="Submit" class="contact-submit">
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>

    <?php 
        include "footer.php";
    ?>
</body>

</html>