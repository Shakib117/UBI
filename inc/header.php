<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <!-- bootstrap linkup -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- fontawesome linelup -->
    <script src="https://kit.fontawesome.com/83cc78d2bd.js" crossorigin="anonymous"></script>
    <!-- css linkup -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="header">
        <header class="container-fluid p-3 bg-dark">
            <nav class="navbar container navbar-expand-sm">
                <h1 class="col-2 text-white"><a href="index.php" class="text-white"
                        style="text-decoration: none;">LOGO</a></h1>
                <div class="p-2 col_search">
                    <form action="" class="input-group ms-3">
                        <input type="search" class="search_bar" placeholder="Search">
                        <button type="button" class="search_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="col-6">
                    <ul class="navbar-nav justify-content-end ms-5">
                        <li class="nav-item"><a class="nav-link active text-white" href="">Service</a></li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="contact.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                                Contact
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link active text-white" href=""><i
                                    class="fa-solid fa-cart-shopping"></i> Cart</a></li>
                        <li class="nav-item"><a class="nav-link active text-white" href="" data-bs-toggle="modal"
                                data-bs-target="#signin"><i class="fa-solid fa-user-large"></i> Sign In</a></li>
                        <li class="nav-item"><a class="nav-link active text-white" href="" data-bs-toggle="modal"
                                data-bs-target="#signup">Sign Up</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- 2nd nav bar -->
        <section class="category">
            <div>
                <ul>
                    <li><button class="btn" data-bs-toggle="collapse" data-bs-target="#mobile"><i
                                class="fa-solid fa-mobile"></i></i><span class="cat_btn"> Mobile</span></button></li>
                    <li><button class="btn" data-bs-toggle="collapse" data-bs-target="#tv"><i
                                class="fa-solid fa-tv"></i></i><span class="cat_btn"> Television</span></button></li>
                    <li><button class="btn" data-bs-toggle="collapse" data-bs-target="#laptop"><i
                                class="fa-solid fa-laptop"></i><span class="cat_btn"> Laptop</span></button></li>
                    <li><button class="btn" data-bs-toggle="collapse" data-bs-target="#computer"><i
                                class="fa-solid fa-computer"></i><span class="cat_btn"> Computer</span></button></li>
                </ul>
            </div>
        </section>
        <div class="row">
            <div id="mobile" class="collapse col-md-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro commodi sit nisi temporibus,
                    voluptatum, iste nihil suscipit eius voluptas, excepturi aliquid aperiam qui. Voluptas consequuntur
                    deserunt optio minima expedita quae, quam commodi. Explicabo quo debitis architecto ut velit unde
                    incidunt consequatur exercitationem illum. Rerum commodi atque dolorum, est sint odio?</p>
            </div>
            <div id="tv" class="collapse col-md-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro commodi sit nisi temporibus,
                    voluptatum, iste nihil suscipit eius voluptas, excepturi aliquid aperiam qui. Voluptas consequuntur
                    deserunt optio minima expedita quae, quam commodi. Explicabo quo debitis architecto ut velit unde
                    incidunt consequatur exercitationem illum. Rerum commodi atque dolorum, est sint odio?</p>
            </div>
            <div id="laptop" class="collapse col-md-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro commodi sit nisi temporibus,
                    voluptatum, iste nihil suscipit eius voluptas, excepturi aliquid aperiam qui. Voluptas consequuntur
                    deserunt optio minima expedita quae, quam commodi. Explicabo quo debitis architecto ut velit unde
                    incidunt consequatur exercitationem illum. Rerum commodi atque dolorum, est sint odio?</p>
            </div>
            <div id="computer" class="collapse col-md-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro commodi sit nisi temporibus,
                    voluptatum, iste nihil suscipit eius voluptas, excepturi aliquid aperiam qui. Voluptas consequuntur
                    deserunt optio minima expedita quae, quam commodi. Explicabo quo debitis architecto ut velit unde
                    incidunt consequatur exercitationem illum. Rerum commodi atque dolorum, est sint odio?</p>
            </div>
        </div>
    </div>

    <!-- bootstrap linkup -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>