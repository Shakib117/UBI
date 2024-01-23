<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- fontawesome linlup -->
    <script src="https://kit.fontawesome.com/83cc78d2bd.js" crossorigin="anonymous"></script>
    <!-- bootstrap linkup -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- css linkup -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <section class="mt-5 ">
        <div class="container">
            <div class="row">
                <h3 class="heading">WELCOME TO (SITE NAME)</h3>

                <form class="row g-3" action="signup.php" method="post">
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="d-flex">
                        <div class="col-md-6 me-2">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname">
                        </div>

                        <div class="col-md-6">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>

                    <div class="d-flex">
                        <div class="col-md-6 me-2">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country">
                        </div>

                        <div class="col-md-6">
                            <label for="number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="number" name="number">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-md-6 me-2">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass">
                        </div>

                        <div class="col-md-6">
                            <label for="conpass" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="conpass" name="conpass">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="sign-up-btn" name="signup">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <h5>Already have an account? <a href="signin.php">SIGN IN</a></h5>
        </div>
    </section>

    <!-- bootstrap linkup -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>