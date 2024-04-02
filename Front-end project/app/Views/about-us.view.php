<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Elsie+Swash+Caps:wght@900&family=Lobster+Two&family=Noto+Sans+JP&family=Sevillana&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/woman.css">
    <link rel="stylesheet" href="../../public/css/all.min.css">
    <link rel="stylesheet" href="../../public/css/home.css">
    <title>about-us</title>


</head>

<body>
    <!--start of seting box-->
    <?php require 'partials/landing.view.php'; ?>
    <!--end of seting box-->

    </div><!-- Cont. div -->
    </section> <!-- end of our team section -->
    <section class="whychoose">
        <di class="circlle circle1">
            <img src="../../public/images/qual.jpg" alt="">
        </di>
        <di class="circlle circle2">
            <img src="../../public/images/best.jpeg" alt="">
        </di>
        <div class="why">
            <h2 style="margin-left: -25px;">Why you choose us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quo totam consequatur quod facilis fuga, in molestiae cum dolorum ipsam commodi suscipit, officiis dignissimos voluptatibus illo ullam iusto voluptas libero.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint quidem error laudantium ea tenetur quasi aliquid sequi consectetur molestias architecto accusamus, mollitia enim laboriosam illum doloribus eligendi dolores? Officiis, quidem.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ad perferendis et nam soluta error iste laborum voluptas quas provident repellat, minima vel facilis optio, asperiores veritatis, porro neque nulla?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque unde ex molestiae reiciendis consequatur sequi eos quisquam ratione aliquam. Magnam facere numquam fugiat error, debitis distinctio iste. Beatae, quis! Rem!
            </p>
        </div>
    </section> <!-- whychoose section -->

    <section class="ourcclient ">
        <div class="CCCCont">
            <div class="TTIItle">
                <h1 style="text-align: center;" style="color: crimson;">Our Clints Opinions</h1>
            </div>
            <div class="SSliDer">
                <div class="SSlide AActive">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam rem consequuntur, blanditiis odit qui minima assumenda voluptatibus non deserunt fugiat harum repellendus ab eius aspernatur rerum cum earum voluptates facilis."</p>
                    <div class="slide-infoo">
                        <h3>Golge Ggeam</h3>
                        <span class="GGG">Founder at USA</span>
                    </div>
                </div> <!-- SSlide div 1-->
                <div class="SSlide">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam rem consequuntur, blanditiis odit qui minima assumenda voluptatibus non deserunt fugiat harum repellendus ab eius aspernatur rerum cum earum voluptates facilis."</p>
                    <div class="slide-infoo">
                        <h3>johhon okopmjam</h3>
                        <span class="GGG">Founder at Chinaa</span>
                    </div>
                </div> <!-- SSlide div 2-->
                <div class="SSlide">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam rem consequuntur, blanditiis odit qui minima assumenda voluptatibus non deserunt fugiat harum repellendus ab eius aspernatur rerum cum earum voluptates facilis."</p>
                    <div class="slide-infoo">
                        <h3>Gorge clone</h3>
                        <span class="GGG">Founder at Tokoy</span>
                    </div>
                </div> <!-- SSlide div3 -->
            </div> <!-- SSliDer div -->
            <div class="slider-incidor">
                <img src="../../public/images/cust1.jpg" data-id="0" class="AActive" width="100">
                <img src="../../public/images/cust2.jpg" data-id="1" width="100">
                <img src="../../public/images/cust3.webp" data-id="2" width="100">
            </div> <!-- end slider-incidor -->
        </div> <!-- CCCont div -->
    </section> <!-- end of ourclient section -->
    <script>
        /*our clint opinion*/

        const Sliderr = document.querySelector(".SSliDer").children;
        const slideimage = document.querySelector(".slider-incidor").children;

        for (let i = 0; i < slideimage.length; i++) {
            slideimage[i].addEventListener("click", function() {
                for (let j = 0; j < slideimage.length; j++) {
                    slideimage[j].classList.remove("AActive");
                }
                this.classList.add("AActive");
                const id = this.getAttribute("data-id");

                for (let j = 0; j < Sliderr.length; j++) {
                    Sliderr[j].classList.remove("AActive")
                }
                Sliderr[id].classList.add("AActive");
            });
        }
    </script>
    <!--  start  of footer    -->
    <?php require 'partials/footer.view.php'; ?>
    <script src="../../public/js/woman.js"></script>
    <!--
 <script>
    /*our team */
var mytextt =' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis iure dolores aliquid voluptatibus excepturi adipisci numquam, doloribus labore iusto facilis architecto accusamus minus cum dicta accusantium esse eaque. Enim, quia.',
y=0,
   mybtn =document.querySelector(".ourteam .Conta .Book .DEtaill .MMYBTn");

    mybtn.onclick= function() {
        'use strict'
      var typewriter=setInterval(function() {
 document.querySelectorAll(".ourteam .Conta .Book .DEtaill #myytext").textcontent += mytextt[y];
  y=y+1;
if(y > mytextt.length-1){
    clearInterval(typewriter);
}
},100);
};
</script>
-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>