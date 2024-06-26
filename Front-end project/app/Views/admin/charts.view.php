<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="../../../public/css/charts.css">
  <link rel="stylesheet" href="../../../public/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Elsie+Swash+Caps:wght@900&family=Lobster+Two&family=Noto+Sans+JP&family=Sevillana&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Home</title>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>

<body style="background-color: #e6e3e3;">

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
  <h1 class="h1">Charts</h1>
  <div class="mycharrt">

    <div>
      <h4>Line chart</h4>
      <canvas id="myChart"></canvas>
    </div>
    <div>
      <h4>Bar chart</h4>
      <canvas id="bar"></canvas>
    </div>
  </div> <!-- end mycharrt 1 -->


  <div class="mycharrt">

    <div>
      <h4>Radar chart</h4>
      <canvas id="area"></canvas>
    </div>
    <div>
      <h4>Pie chart</h4>
      <canvas id="pie"></canvas>
    </div>
  </div> <!-- end mycharrt2 -->

  <div class="mycharrt">
    <div>
      <h4>Doughnut chart</h4>
      <canvas id="piee"></canvas>
    </div>
    <div>
      <h4>Scatter Chart</h4>
      <canvas id="scatter"></canvas>
    </div>
  </div> <!-- end mycharrt 3 -->

  <!--start footer-->
  <div class="container pb-5 pt-3">
    <h6 style="color: gray;">Copyright © 2017 <span style="color: rgb(240, 166, 178);">BootstrapDash.</span> All rights reserved.
    </h6>
  </div>
  <!--end footer-->

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="../../../public/js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="../../../public/js/charts.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>