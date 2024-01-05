<?php include"inc/header.php"?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Project</title>
    <!-- css linkup -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap linkup -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- fontawesome linlup -->
    <script src="https://kit.fontawesome.com/83cc78d2bd.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6">
                    <form action="">
                        <h2 class="get-in-touch">Get in Touch!!!</h2>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Your name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number:</label>
                            <input type="tel" class="form-control" id="exampleFormControlInput1"
                                placeholder="Your Phone Number">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Massage:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tell Us About Your Query"></textarea>
                        </div>
                        <button class="btn btn-primary rounded px-3">Submit</button>
                    </form>

                </div>
                <div class="col col-lg-6 d-flex align-items-center">
                    <img class="img-fluid contact-img" src="img/contact-us.PNG" alt="">
                </div>
            </div>
        </div>
        <!-- <section class="d-flex justify-content-center align-items-center contact-box">
            <div class="me-5">
                <img src="img/contact-us.png" alt="">
            </div>
            <div class="contact-form">
                <form action="" class="form-control mt-5">
                    <div>
                        <input type="text" class="con_inp" placeholder="Your Name"><br>
                        <input type="text" class="con_inp" placeholder="Your Email"><br>
                        <input type="text" class="con_inp" placeholder="Contact Number"><br>
                        <textarea class="con_inp" name="" id="" cols="20" rows="5"
                            placeholder="Write your message here"></textarea>
                    </div>
                    <div class="con_btn">
                        <button type="submit" class="btn btn-success">SEND</button>
                    </div>
                </form>
            </div>
        </section>
        <section class="container mt-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="phone-number">
                    <i class="fa-solid fa-phone fc"></i>
                    <p>You can contact us via phone number.</p>
                    <p>Our phone number : <span style="color: blue;">01XXXXXXXXX</span></p>
                </div>
                <div class="email">
                    <i class="fa-solid fa-envelope"></i>
                    <p>You can contact us via email</p>
                    <p>Our email: <span style="color: blue;">businessemail@gmail.com</span></p>
                </div>
            </div>
        </section> -->
    </div>

    <?php include"signin.php"?>
    <?php include"signup.php"?>
    <!-- bootstrap linkup -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>