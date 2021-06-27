<?php include 'link_inc.php';?>
    <style>
    .qt-background{
  background-image: linear-gradient(to bottom,rgba(0,136,220,0.8), rgba(174,67,7,0.5)),
                     url(img/Trucks-on-rail.jpg);                  
  background-size: cover;
  padding: 100px 0;
  background-attachment: fixed;
  background-position: center center;
  position: relative;
}

  </style>

<!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="margin-top: 7rem;">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <nav class="tab-bar-top">
              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="true">Login</a>
                <a class="nav-item nav-link" id="nav-signup-tab" data-toggle="tab" href="#nav-signup" role="tab" aria-controls="nav-signup" aria-selected="false">Signup</a>
              </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
                <form class="form-login-signup">
                  <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputEmail">Email address</label>
                  </div>

                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-color-hover btn-block text-uppercase" type="submit">Login</button>
                  <hr class="my-4">
                  <button class="btn btn-lg btn-google btn-block soi-hv text-uppercase" type="submit"><i class="fa fa-google mr-2"></i> Sign in with Google</button>
                  <button class="btn btn-lg btn-facebook btn-block soi-hv  text-uppercase" type="submit"><i class="fa fa-facebook-f mr-2"></i> Sign in with Facebook</button>
                </form>
              </div>
              <div class="tab-pane fade" id="nav-signup" role="tabpanel" aria-labelledby="nav-signup-tab">
                <form class="form-login-signup">
                  <div class="form-label-group">
                    <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                    <label for="inputUserame">Username</label>
                  </div>

                  <div class="form-label-group">
                    <input type="email" id="inputEmail-1" class="form-control" placeholder="Email address" required>
                    <label for="inputEmail-1">Email address</label>
                  </div>
                  
                  <hr>

                  <div class="form-label-group">
                    <input type="password" id="inputPassword-1" class="form-control" placeholder="Password" required>
                    <label for="inputPassword-1">Password</label>
                  </div>
                  
                  <div class="form-label-group">
                    <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                    <label for="inputConfirmPassword">Confirm password</label>
                  </div>
                  
                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">I Agree To The Terms & Conditions</label>
                  </div>

                  <button class="btn btn-lg btn-primary btn-block btn-color-hover text-uppercase" type="submit">Register</button>                 
                  <hr class="my-4">
                  <button class="btn btn-lg btn-google btn-block soi-hv text-uppercase" type="submit"><i class="fa fa-google mr-2"></i> Sign up with Google</button>
                  <button class="btn btn-lg btn-facebook btn-block soi-hv text-uppercase" type="submit"><i class="fa fa-facebook-f mr-2"></i> Sign up with Facebook</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- modal ends  -->



<div class="banner">
  <div class="slider">
    <img src="img/2.jpg" id="slideImg">
  </div>
  <div class="overlay">
   <div class="container-fluid menu">
    <nav class="navbar navbar-expand-lg my-navbar">
  <a class="navbar-brand" href="#">
    <img src="img/logo.png" class="img-fluid">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"> <i class="fa fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php">Our Services</a>
      </li>
    </ul>
    <ul  class="navbar-nav" >
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><i class="fa fa-phone"></i>&nbsp +91-9926925660</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter" >
          <i class="fa fa-user"></i>&nbsplogin</a>
      </li>
    </ul>
  </div>
</nav>

  </div>
   
  <div class="slider-content">
    <h1>RO-RO Fast Transport</h1>
    <p>Indian Railways has taken a substantial leap towards providing sustainable service to
          Truckers by offering </p>
          <a href="#" class=" btn-area">Contact Us</a>
  </div>
  </div>
</div>
<!-- travelling section start -->
      <div id="travel" class="traveling">
         <div class="container shadow cont-travel">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><img src="icon/travel-icon.png" alt="icon"/></i>
                     <h3>Rail transport </h3>
                     <p> going to use a passage of Lorem Ipsum, you need to be </p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box shadow">
                     <i><img src="icon/travel-icon2.png" alt="icon"/></i>
                     <h3>transport by road</h3>
                     <p> going to use a passage of Lorem Ipsum, you need to be </p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><img src="icon/travel-icon3.png" alt="icon"/></i>
                     <h3>GPS location</h3>
                     <p> going to use a passage of Lorem Ipsum, you need to be </p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><img src="icon/travel-icon4.png" alt="icon"/></i>
                     <h3>secure </h3>
                     <p> going to use a passage of Lorem Ipsum, you need to be </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end traveling -->
<!-- travelling section start -->

<!--  why we choose us -->
<section class="why_us_section">
    <div class="container">
      <div class="titlepage">
            <h2>why we choose us ?</h2>
            <span> A Ro-RO train consists of open flat wagon on which lorries and trucks with goods are loaded.
            It facilitates large-scale movement of goods and reduces pollution. The cost of the transport is lesser than transport by road.</span>
        </div>
      <div class="why_us_container">
        <div class="box">
          <div class="img-box">
            <img src="icon/w1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              communication between vendor
            </h5>
            <p>
              Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
              making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
              Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
              going through the
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="icon/w2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Fast transport  avaliable
            </h5>
            <p>
              Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
              making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
              Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
              going through the
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="icon/w3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
             24*7 customer support
            </h5>
            <p>
              Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
              making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
              Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
              going through the
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>
<!-- why we choose us end  -->

<!-- about section -->

  <section class="about_index layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="index-heading">
              <h2>
                About ro-ro fast transport 
              </h2>
            </div>
            <p>
              SSK Devcon Private Ltd, is a family owned business founded in 2011 which has
continuously been a leader in the field of Coal & other earth material (i.e. Iron Ore, Lime
Stone, Fly Ash) handling with bulk transportation, logistics & liaisoning.
Coal is an essential resource for economic development and is showing significant
growth in production and exchanges around the World.
SSK Devcon has more than 10 years of experience performing railway coal logistics,
offering reliable and efficient solutions (liaisoning between company & Mines along
with quality check & logistic) & for mining companies and commodity users pan
India.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="img/about-5.jpg" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->
<!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
  <div class="row">
      <div class="col-md-12 ">
        <div class="titlepage">
            <h2>transport service</h2>
            <span> Coal is an essential resource for economic development and is showing significantgrowth in production and exchanges around the World.</span>
        </div>
      </div>
  </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mx-auto ">
            <div class="box ">
              <div class="box-img">
                <img src="img/tr-4.jpg" alt="">
              </div>
              <div class="box-detail">
                <h5>
                  truck Transport
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mx-auto ">
            <div class="box ">
              <div class="box-img">
                <img src="img/tr-3.jpg" alt="">
              </div>
              <div class="box-detail">
                <h5>
                 oil container
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mx-auto ">
            <div class="box ">
              <div class="box-img">
                <img src="img/tr-2.jpg" alt="">
              </div>
              <div class="box-detail">
                <h5>
                  way of transport
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->
  
  <!-- start QT -->
<div class="qt-box qt-background">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <div class="sec-title">
          <h2>
            " faster movement of goods and esential reducing time taken by truck,<br>
            to reach destination due to traffic congenstion in between cities,
            no hassles of check post/toll  gate etc..."
          </h2>
        </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!-- end QT -->

  <!-- video column -->
  <div class="container-fluid">
    <div class="row clearflix">
      <div class="col-md-6 col-sm-12-">
        <div class="video-box">
          <figure class="vd-image">
          <img src="img/train-a.png" alt="video" class="img-fluid">
        </figure>
        <a href="https://www.youtube.com/watch?v=8Kc4I7rFDkk&ab_channel=IndianRailRoad" class="lightbox-image overlay-box">
          <span class="flaticon-play-button">
            <img src="icon/play.png" class="img-fluid">
          </span></a>
        </div>
      </div>
      <div class="col-md-6 col-sm-12-">
        <div class="container-fluid vd-content mb-4">
          <div class="panel panel-default">
            <div class="panel-heading">What was it ?</div>
            <div class="panel-body text-justify">
        <div class="row">
           
            <div class="col-sm-6 text-justify">
             <p> <i class="fa fa-area-chart" aria-hidden="true"></i>&nbsp;explaning about RO-RO service 
             the south westran railways (SWR) said it will have open flat wagon on which truck
           with good are loaded.</p> 
            </div>
            
               <div class="col-sm-6 text-justify">
              <p><i class="fa fa-shield" aria-hidden="true"></i>&nbsp;According to SWR RO-RO
               service reduces accidents on the road improve safety  and save fuel and 
               foreign exchange .</p>
            </div>
            
          <div class="col-sm-6">
             <p> <i class="fa fa-check" aria-hidden="true"></i>&nbsp;  the driver and cleaner of the lorries sit in their vechicels they are dropped at a particular point ,
              from which they drive off.</p>
            </div>

             <div class="col-sm-6 text-justify">
             <p><i class="fa fa-train" aria-hidden="true"></i>&nbsp; The train will take 17 hours,
             to reach destination which is a distance of about 682 kms, As many as 42 trucks with 
             goods can be carried at time in this train. </p>
            </div>
            
             
            
             <div class="col-sm-6">
            <p>  <i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp; It ensure faster transport 
            of essential goods perishables  food item and smaller cargo it said.</p>
            </div> 
            
               <div class="col-sm-6">
            <p>  <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; While it faciliates large 
            scale movement of goods and reduce pollution the cost of transport is lesser
          then transport by road.</p>

            </div> 
        </div>
        </div>
          </div>
        </div>
      </div>
  </div>
  <!-- video column end-->
  <br>
  <script>
    var slideImg = document.getElementById("slideImg");
    var img = new Array(
         "img/slider-1.jpg",
         "img/tr-2.jpg",
         "img/slider-3.jpg"
      );
    var len = img.length;
    var i = 0;
    function slider(){
       if(i > len-1){
        i = 0;
       }
    slideImg.src = img[i];
    i++;
    setTimeout('slider()',3000);
    }
  </script>
<?php include 'footer_inc.php';?>
<?php include 'footer_script.php';?>