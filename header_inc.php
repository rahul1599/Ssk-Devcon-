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
