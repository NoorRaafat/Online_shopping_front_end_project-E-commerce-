<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../../../public/css/buttons.css">
    <link rel="stylesheet" href="../../../public/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Elsie+Swash+Caps:wght@900&family=Lobster+Two&family=Noto+Sans+JP&family=Sevillana&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>

<body>

    <!--start of seting box-->
    <div class="setting-box">
        <div class="setting-container">
            <div class="setting-container">
                <img src="../../../public/images/1 (4).jpg">
                <span class="team">team work</span>
                <span style="color: white;" class="project">Project Manager</span>
                <input type="search" placeholder="search..">
                <ul>
                    <li style="font-weight: bolder;"><a href="">Dashboard</a><i class="fas fa-home"></i></li>
                    <li><a href="/buttons">Buttons</a><i class="fab fa-accusoft"></i></li>
                    <li><a href="">Icons</a><i class="fas fa-wrench"></i></li>
                    <li><a href="/charts">charts</a><i class="fas fa-chart-pie"></i></li>
                    <li><a href="/forms">Forms</a><i class="fab fa-wpforms"></i></li>
                    <li><a href="/tables">Tables</a><i class="fas fa-table"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!--end of seting box-->
    <section class="landing">
        <div class="overlay"></div>
        <div class="header">
            <h1>Dashboard</h1>
            <div class="links-container">
                <ul class="myul">
                    <div class="links Open">
                        <li class="person"><i class="fas fa-user-alt"></i></li>
                        <li class="car"><i class="fas fa-shopping-cart"></i></li>
                        <li class="ser"><i class="fas fa-search-location"></i></li>
                    </div>
                </ul>
            </div>
        </div>
    </section>
    <!--.................................................................................-->
    <section class="container">
        <div class="row parent">
            <div class="child col-10 ">
                <h4>Buttons :</h4>
                <div class="child1">
                    <h2>Gradient Buttons</h2>
                    <p>Add class <span>.btn-gradient-{color}</span> for gradient buttons</p>
                    <button class="btn-grad btn ">Primary</button>
                    <button class="btn-grad2 btn ">Secondary</button>
                    <button class="btn-grad3 btn ">Success</button>
                    <button class="btn-grad4 btn ">Danger</button>
                    <button class="btn-grad5 btn ">Warning</button>
                    <button class="btn-grad6 btn ">Info</button>
                    <button class="btn-grad7 btn ">Light</button>
                    <button class="btn-grad8 btn ">Dark</button>
                    <a href="#">Link</a>
                </div>


                <div class="child2 col-10">
                    <h2>Rounded Buttons</h2>
                    <p>Add class <span>.btn-rounded</span></p>
                    <button class="btn btn-rounded" id="btn1">Primary</button>
                    <button class="btn btn-rounded" id="btn2">Secondary</button>
                    <button class="btn btn-rounded" id="btn3">Success</button>
                    <button class="btn btn-rounded" id="btn4">Danger</button>
                    <button class="btn btn-rounded" id="btn5">Warning</button>
                    <button class="btn btn-rounded" id="btn6">Info</button>
                    <button class="btn btn-rounded" id="btn7">Light</button>
                    <button class="btn btn-rounded" id="btn8">Dark</button>
                    <a href="#">Link</a>
                </div>


                <div class="child3 col-10">
                    <h2>Outline Buttons</h2>
                    <p>Add class <span>.btn-rounded</span></p>
                    <button class="btn btn-outline-primary" id="btn-1">Primary</button>
                    <button class="btn btn-outline-secondary" id="btn-2">Secondary</button>
                    <button class="btn btn-rounded btn-outline-success" id="btn-3">Success</button>
                    <button class="btn btn-rounded btn-outline-danger" id="btn-4">Danger</button>
                    <button class="btn btn-rounded btn-outline-warning" id="btn-5">Warning</button>
                    <button class="btn btn-rounded btn-outline-info" id="btn-6">Info</button>
                    <button class="btn btn-rounded btn-outline-light" id="btn-7" style="color: black;">Light</button>
                    <button class="btn btn-rounded btn-outline-dark" id="btn-8">Dark</button>
                    <a href="#">Link</a>
                </div>

                <div class="child4 col-10">
                    <h2>Single color Buttons</h2>
                    <p>Add class <span>.btn-{color}</span> for buttons in theme colors</p>
                    <button class="btn btn-primary" id="btn-11">Primary</button>
                    <button class="btn btn-secondary" id="btn-22">Secondary</button>
                    <button class="btn btn-rounded btn-success" id="btn-33">Success</button>
                    <button class="btn btn-rounded btn-danger" id="btn-44">Danger</button>
                    <button class="btn btn-rounded btn-warning" id="btn-55">Warning</button>
                    <button class="btn btn-rounded btn-info" id="btn-66">Info</button>
                    <button class="btn btn-rounded btn-light" id="btn-77">Light</button>
                    <button class="btn btn-rounded btn-dark" id="btn-88">Dark</button>
                    <a href="#">Link</a>
                </div>

                <div class="child5 col-10">
                    <h2>Normal Buttons</h2>
                    <p>Use any of the available button classes to quickly create a styled button.</p>
                    <button class="btn btn-primary" id="btn-111">Primary</button>
                    <button class="btn btn-secondary" id="btn-222">Secondary</button>
                    <button class="btn btn-rounded btn-success" id="btn-333">Success</button>
                    <button class="btn btn-rounded btn-danger" id="btn-444">Danger</button>
                    <button class="btn btn-rounded btn-warning" id="btn-555">Warning</button>
                    <button class="btn btn-rounded btn-info" id="btn-666">Info</button>
                    <button class="btn btn-rounded btn-light" id="btn-777">Light</button>
                    <button class="btn btn-rounded btn-dark" id="btn-888">Dark</button>
                    <a href="#">Link</a>
                </div>

            </div>
        </div>




    </section>
    <!--footer-->
    <div class="container pb-5 pt-3">
        <h6 style="color: gray;">Copyright © 2017 <span style="color: rgb(240, 166, 178);">BootstrapDash.</span> All rights reserved.
        </h6>
    </div>
    <!--end footer-->

    <!--.................................................................................-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="../../../public/js/jquery-3.4.1.min.js"></script>
    <script src="../../../public/js/buttons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>