<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/contact.css">
    <link rel="stylesheet" href="../../public/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Elsie+Swash+Caps:wght@900&family=Lobster+Two&family=Noto+Sans+JP&family=Sevillana&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>contact</title>
</head>

<body>
    <!--start of seting box-->
    <!--end of seting box-->
    <!--start of landing page-->
    <section class="landing">
        <div class="overlay"></div>
        <div class="header">
            <div class="logo"><img src="../../public/images/logo.jpeg"></div>
            <div class="links-container">
                <ul class="myul">
                    <div class="links Open">
                        <li><a href="/" class="active" data-section=".aboutus">Home</a></li>
                        <li></i><a href="/women-clothing">Clothes <i style="color: white;" class="far fa-caret-square-down"></i></a>
                            <div class="drobdown">
                                <ul>
                                    <li><a href="/women-clothing">Women</a></li>
                                    <li><a href="/men-clothing">Men</a></li>
                                    <li><a href="/children-clothing">children</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Categories</a><i style="color: white;margin-left: -20px;" class="far fa-caret-square-down"></i>
                            <div class="drobdown">
                                <ul>
                                    <li><a href="/accessories">Accessories</a></li>
                                    <li><a href="/makeup">Mackup</a></li>
                                    <li><a href="/glasses">Glass</a></li>
                                </ul>
                            </div>

                        </li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/about-us">Aboutus</a></li>
                        <li><a href="/contact-us">ContactUs</a></li>
                        <!-- <li class="ser"><i class="fas fa-search-location"></i></li>-->
                    </div>
                </ul>
                <i class="fas fa-shopping-cart"></i>

                <button class="toogle-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        <div style="z-index: 1;" class="intro">

            <h1 style="font-size: px;font-family: 'lobster';color: black;">Contact <span>Us </span></h1>
            <p style="color: black;"> SPECIAL FOR TODAY</p>
        </div>
    </section>
    <!--end of landing page-->
    <!--start of contact-->
    <section class=" big-aboutt">
        <section class="ccontact ">

            <div class="rrow">

                <div class=" cform">
                    <h3>Get In Touch</h3>
                    <form action="/message" method="POST">
                        <div class="fal">
                            <div style="margin-right: 170px;">
                                <Label>First name:</Label>
                                <input class="in" style="width: 110%;" type="text" name="fname" placeholder="first name">
                            </div>
                            <div>
                                <Label>Last name:</Label>
                                <input style="width: 150%; margin-left:-70px;" type="text" name="lname" placeholder="last name">
                            </div>

                        </div>
                        <!--fAL-->
                        <label for="">Email:</label>
                        <input type="email" name="email" placeholder="email">
                        <label for="">Subject</label>
                        <input type="text" name="subject" placeholder="Your Subject of this message">
                        <label for="">Message:</label>
                        <textarea placeholder="write your message" name="message" id="" cols="30" rows="10"></textarea>
                        <input type="submit" value="Send Message" style="  position: absolute;top: 93%;
      left: 18%;transform: translate(-50%,-50%);padding: 15px 30px; background-color: hotpink;
      color: white;border-radius: 5px;border: none;
      cursor: pointer;margin-top: 20px;">
                    </form>
                </div>
                <!--cform--->

            </div>
            <!--end of row-->
        </section>
        <!--end of contact-->

        <div class="locact">
            <h2 id="h23">Egypt Office</h2>

            <div id="div7">
                <i class="fas fa-map-marker"><span>198 West 21th Street</span></i>
                <i class="fas fa-phone-alt"><span>phone +00151515</span></i>

                <i id="im" class="fas fa-envelope"> <span>Email mail @gmail.com</span></i>
                <i class="fas fa-globe-americas"><span>FreeHTML5.co</span></i>
            </div>
            <h2 id="h23">Cairo Office</h2>

            <div id="div7">
                <i class="fas fa-map-marker"><span>Suite 721 Mansoura NY 10016</span></i>
                <i class="fas fa-phone-alt"><span>phone+ 1235 2355 98 </span></i>

                <i id="im" class="fas fa-envelope"> <span>Email info@yoursite.com</span></i>
                <i class="fas fa-globe-americas"><span>FreeHTML5.co</span></i>
            </div>
        </div>
        </div>
    </section><!-- end of big section about -->
    <!-- ------------------------------ -->
    <!-- <section class="subscribe bg-dark">
        <h2>Subscribe</h2>
        <p>Be the first to know about the new templates.</p>
        <form action="/subscribe" method="POST">
            <input type="email" name="email" placeholder="Your email" style="width: 300px; display:inline;padding: 20px 20px;border-radius: 5px;border: 1px solid #888;">
            <input type="submit" value="Subscribe" id="submit">
        </form>
    </section> -->
    <!--end of subscribe-->

    <section class="map">


        <h2 class="hh" style="text-align: center;font-size: 37px;margin-top: 30px;">Location</h2>
        <p class="pp" style="text-align: center;font-size: 20px;margin-top: 20px;">there are now a set avaiable here in there
            colours and in a banner sizes.</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d874935.2497556194!2d31.647144200000003!3d31.062009850000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1597765814091!5m2!1sar!2seg" width="100%" height="450" frameborder="0" style="border:0;margin-top: 30px;margin-bottom: 60px; " allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section><!-- end of map -->

    <!--  start  of footer    -->
    <?php require 'partials/footer.view.php'; ?>
    <!-- **********************  end of footer*****************    -->
    <script src="../../public/js/jquery-3.4.1.min.js"></script>
    <script src="../../public/js/contact.js"></script>
    <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
    <!-- <script>
        AOS.init();
    </script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>