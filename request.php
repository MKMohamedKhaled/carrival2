<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/request.css">
    <title>Request</title>
</head>

<body>



    <section class="request-section">
        <div class="container request-container">
            <div class="request-form-container">
                <h1 class="request-header">Request A Car</h1>
                <p class="request-des">Ready to make your dream car a reality?<br>
                    Fill out the application form below to start the process <br>
                    of purchasing your vehicle.</p>
                <form action="" class="request-form">
                    <div class="row request-row">
                        <div class="col-12 request-col">
                            <label for="" class="request-label">First Name*</label>
                            <input type="text" class="request-input">
                        </div>
                        <div class="col-12 request-col">
                            <label for="" class="request-label">Last Name*</label>
                            <input type="text" class="request-input">
                        </div>
                        <div class="col-12 request-col">
                            <label for="" class="request-label">Phone Number*</label>
                            <input type="text" class="request-input">
                        </div>
                        <div class="col-12 request-col">
                            <label for="" class="request-label">Email <span class="option">(optional)</span></label>
                            <input type="email" class="request-input">
                        </div>
                        <div class="col-12 request-col">
                            <label for="" class="request-label">City*</label>
                            <input type="text" class="request-input">
                        </div>
                        <div class="col-12 request-col">
                            <label for="" class="request-label">Vehicle of choice*</label>
                            <input type="text" class="request-input">
                        </div>
                        <div class="col-12 request-col">
                            <input type="submit" value="Submit" class="submit-btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php 
        include "footer.php";
    ?>
</body>

</html>