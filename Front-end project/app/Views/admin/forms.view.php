<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="../../../public/css/forms.css">
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



  <!--*************first form**************-->
  <div class="container pt-4 pb-2 pl-5 head">
    <h4 style="font-family: 'lobster'; text-shadow: 1px 1px 2px pink;">Form elements</h4>
  </div>
  <section class="row container mx-auto" style="  background-color: #e6e3e3;">
    <div class="col-6 p-3">
      <form class=" form1 bg-white p-5">
        <h5>Default Form</h5>
        <h6>Basic form layout</h6>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" placeholder="Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Confirm Password</label>
          <input type="password" placeholder="Confirm Password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn ">Submit</button>
        <button type="submit" class="btn ">Cancel</button>
      </form>
    </div>
    <!-- **************************************** -->
    <div class="col-6 p-3">
      <form class=" form2 bg-white p-5">
        <h5>Horizontal Form</h5>
        <h6>Horizontal form layout</h6>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" placeholder="Username" class="form-control" id="inputPassword">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="Email" placeholder="Email" class="form-control" id="inputPassword">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Mobile</label>
          <div class="col-sm-10"><input type="text" placeholder="Mobile number" class="form-control" id="inputPassword">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" placeholder="password" class="form-control" id="inputPassword">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class=" col-sm-2 col-form-label">Re.Password</label>
          <div class="col-sm-10">
            <input type="password" placeholder="password" class="form-control" id="inputPassword">
          </div>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input active" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn ">Submit</button>
        <button type="submit" class="btn ">Cancel</button>
      </form>
    </div>
  </section>


  <!-- *******************seconed form********************** -->
  <section class="container">
    <div class=" p-3">
      <form class=" form3 bg-white p-5">
        <h5>Default Form</h5>
        <h6>Basic form layout</h6>
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" placeholder="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">City</label>
          <input type="text" placeholder="Location" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1">Gender</label>
          <select class="custom-select" required>
            <option value="1">Mal</option>
            <option value="2">Femal</option>
          </select>
          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
        <label for="">File upload</label>
        <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn ">Submit</button>
        <button type="submit" class="btn ml-4">Cancel</button>
      </form>
    </div>
  </section>


  <!-- *******************third form******************** -->
  <section class="row container mx-auto" style="  background-color: #e6e3e3;">
    <div class="col-6 pl-3 pt-4 pb-4">
      <form class=" form4 bg-white p-5">
        <h5>Input Size</h5>
        <h6>Add classes like <span>.form-control-lg</span> and <span>.form-control-sm</span>.</h6>
        <div class="form-group">
          <label for="exampleInputEmail1">Large input</label>
          <input type="text" placeholder="Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Default input</label>
          <input type="text" placeholder="Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Small input</label>
          <input type="text" placeholder="Username" class="form-control" id="exampleInputPassword1">
        </div>
      </form>
    </div>
    <div class="col-6 pl-3 pt-4 pb-4">
      <form class=" form5 bg-white p-5">
        <h5>Select Size</h5>
        <h6>Add classes like <span>.form-control-lg</span> and <span>.form-control-sm</span>.</h6>
        <div class="mb-3">
          <label for="exampleInputPassword1">Large select</label>
          <select class="custom-select" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1">Default select</label>
          <select class="custom-select" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1">Small select</label>
          <select class="custom-select" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
      </form>
    </div>
  </section>


  <!-- ***********************forth*********************** -->
  <section class="row container mx-auto" style="  background-color: #e6e3e3;">
    <div class="col-6 pl-3 pt-4 pb-4">
      <form class=" form6 bg-white p-5">
        <h5>Input Size</h5>
        <h6>Add classes like <span>.form-control-lg</span> and <span>.form-control-sm</span>.</h6>
        <label class="sr-only" for="inlineFormInputGroup">Username</label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text">@</div>
          </div>
          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
        </div>
        <label class="sr-only" for="inlineFormInputGroup">Username</label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="background-color:rgb(250, 125, 187) ;">$</div>
          </div>
          <input type="text" class="form-control" id="inlineFormInputGroup">
          <div class="input-group-prepend">
            <div class="input-group-text">.00</div>
          </div>
        </div>
        <label class="sr-only" for="inlineFormInputGroup">Username</label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text">$ 0.00</div>
          </div>
          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
        </div>
        <label class="sr-only" for="inlineFormInputGroup">Username</label>
        <div class="input-group mb-2">
          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Recipient's Username">
          <div class="input-group-prepend">
            <div class="input-group-text" style="background-color:rgb(250, 125, 187) ;">Search</div>
          </div>
        </div>
        <label class="sr-only" for="inlineFormInputGroup">Username</label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text bg-white">Drobdown</div>
          </div>
          <input type="text" class="form-control" id="inlineFormInputGroup">
        </div>
        <label class="sr-only" for="inlineFormInputGroup">Username</label>
        <div class="input-group mb-2">
          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Find in facebook">
          <div class="input-group-prepend">
            <div class="input-group-text" style="background-color:rgb(50, 70, 160) ; color: white;">F</div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-6 p-4">
      <form class=" form7 bg-white p-5 row">
        <h5>Checkbox Controls</h5>
        <h6>Checkbox and radio controls (default appearance is in primary color)</h6>
        <div class="col-6">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Default
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Checked
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
            <label class="form-check-label" for="defaultCheck2">
              Disabled
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
            <label class="form-check-label" for="defaultCheck2">
              Disabled checked
            </label>
          </div>
        </div>
        <!-- ****************************************** -->
        <div class="col-6">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Default</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Checked</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Disabled</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Disabled checked</label>
          </div>
        </div>
        <!-- ******************************************************* -->
        <h6>Add class <span>.form-check-{color}</span> for checkbox and radio controls in theme colors</h6>
        <div class="col-6">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Primary
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Success
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Info
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Danger
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Warning
            </label>
          </div>
        </div>
        <!-- **************************************************** -->
        <div class="col-6">
          <div class="form-check ">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked class="bg-Primary">
            <label class="form-check-label" for="exampleRadios1">
              Primary
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
              Success
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
              Info
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
              Danger
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
              Warning
            </label>
          </div>
        </div>
    </div>
    </div>
    </form>
    </div>
  </section>


  <!-- ************************fifth************************ -->
  <section class="container">
    <div class="pl-3 pr-2">
      <form class="form-inline bg-white p-5">
        <div style="width: 100%;">
          <h5>Inline Forms</h5>
          <h6>Use the <span>.form-inline</span> class to display a series of labels, form controls, and buttons on a single horizontal row</h6>
        </div>

        <label class="sr-only" for="inlineFormInputName2">Name</label>
        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
        <div class="input-group mb-2 mr-sm-2">
          <div class="input-group-prepend">
            <div class="input-group-text">@</div>
          </div>
          <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
        </div>

        <div class="form-check mb-2 mr-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineFormCheck">
          <label class="form-check-label" for="inlineFormCheck">
            Remember me
          </label>
        </div>

        <button type="submit" class="btn mb-2" style="height: 40px;">Submit</button>
      </form>
    </div>
  </section>

  <!-- **************************sixth******************* -->
  <section class="container">
    <div class=" pl-3 pt-4 pb-4 pr-2">
      <form class=" form3 bg-white p-5">
        <h5>Horizontal Two Column</h5>
        <h6>Personal info</h6>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationCustom01">First name</label>
            <input type="text" class="form-control" id="validationCustom01" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationCustom02">Last name</label>
            <input type="text" class="form-control" id="validationCustom02" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationCustom01">Gender</label>
            <select class="custom-select" required>
              <option value="1">Mal</option>
              <option value="2">Femal</option>
            </select>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationCustom02">
              Date of Birth</label>
            <input type="date" class="form-control" id="validationCustom02" placeholder="dd/mm/yyy" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationCustom01">Category
            </label>
            <select class="custom-select" required>
              <option value="1">Category1</option>
              <option value="2">Category2</option>
              <option value="3">Category3</option>
              <option value="4">Category4</option>
              <option value="5">Category5</option>
            </select>
          </div>
          <div class="col-md-6 mt-4 pt-2">
            <label for="">Membership</label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInline1">Free</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInline2">Professional</label>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationCustom01">Address 1</label>
            <input type="text" class="form-control" id="validationCustom01" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationCustom02">State</label>
            <input type="text" class="form-control" id="validationCustom02" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationCustom01">Address 2</label>
            <input type="text" class="form-control" id="validationCustom01" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationCustom02">Postcode</label>
            <input type="text" class="form-control" id="validationCustom02" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationCustom01">City</label>
            <input type="text" class="form-control" id="validationCustom01" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationCustom02">Last name</label>
            <select class="custom-select" required>
              <option value="1">America</option>
              <option value="2">Italy</option>
              <option value="3">Russia</option>
              <option value="5">Britian</option>
            </select>
          </div>
        </div>
      </form>
    </div>
  </section>

  <div class="container pb-5 pt-3">
    <h6 style="color: gray;">Copyright © 2017 <span style="color: rgb(240, 166, 178);">BootstrapDash.</span> All rights reserved.
    </h6>
  </div>



  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="jquery-3.5.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>