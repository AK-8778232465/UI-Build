<!DOCTYPE html>
<html lang="en">
<head> 
  <title>Glide</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('asset/css/DashboardStyle.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-yHBBRwyzU16Lx0+ncQMa8qWgFW/9CfHe1D72xO5c2Nck0+EIdLCKiLrnBvcNUmM/m0S6g91Lttv9FGWQzZ+6vQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js" integrity="sha512-pbtq2mQXyggVE9S9vEus5z5eJF5cOFXjQoVRbYG5wmzPW2XH/g+He8oKSDXa9z9+xm1wy34kGnYEPqftTWzKzg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-jPRQ+7lYJN/Hc6LmRcGbySTJuwp0o4O8lX+gYquyS9Ff+J/iNqw7AsodY9V/UhMbkKNzBqVstZIb7BIDu95cA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

 <body> 
    
  <section class="glide-nav">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{asset('asset/img/icon.png')}}" width="121px" height="48px" alt="Glide_icon">
        </a>
        <div class="nav-search ms-5 d-none d-md-block d-lg-block d-xl-block">
            <form class="d-flex me-auto align-items-center searchbtn" role="search">
                <input type="search" placeholder="Search by Borrower Last Name or Loan Number">
                <i style="color: #0033A1;" class="fas fa-search" aria-hidden="true"></i>
            </form>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas"
          aria-labelledby="navbarOffcanvasLabel">
          <div class="offcanvas-header d-flex align-items-center d-lg-none d-xl-none border-bottom">
            <h5 class="offcanvas-title" id="navbarOffcanvasLabel">
              <!-- For mobile view -->
                <li class="nav-item dropdown me-4 d-flex align-items-center">
                    <div class="mx-3">
                      <img src="{{asset('asset/img/user_icon.png')}}" width="44.15px" height="44.15px" alt="Notification icon"
                        class="usericon">
                    </div>
                    <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false" style="font: normal normal 600 15px/17px Poppins;">
                      Shanmugam<span style="font: normal normal normal 15px/13px Poppins;"><br>Developer</span>
                    </a>
                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="fa fa-angle-down"></span>
                    </a>
                    <div>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">View Account</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                      </ul>
                    </div>
                  </li>
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>
          <div class="offcanvas-body d-lg-none d-xl-none">
          <ul class="menu-links">
                        <li class="nav-links-mob link-hover mb-3 d-flex justify-content-center align-items-center"
                            style="color: #0033A1;font: normal normal bold 14px/21px Poppins;background: #E3ECF6;border-right: 3px solid #001c58;">
                            <a href="#" class="link-hover"
                                style="color: #0033A1;font: normal normal bold 14px/21px Poppins;background: #E3ECF6;">

                                <img src="{{asset('asset/img/list.svg')}}" alt="logo" class="icon"
                                    style="color: #0033A1;font: normal normal bold 14px/21px Poppins;border-right: 2px solid #001c58; border: 1px solid #0033A1; background: #0033A1; border-radius: 5px;">

                                <span class="text nav-text-mob ms-2">Pipe Line</span>
                            </a>
                        </li>
                        <li class="nav-links-mob mb-3 d-flex justify-content-center align-items-center">
                            <a href="#" class="link-hover">
                                <img src="{{asset('asset/img/quick pricing.svg')}}" alt="logo" class="icon">
                                <span class="text nav-text-mob ms-2" >Price Scenario</span>
                            </a>
                        </li>
                        <li class="nav-links-mob mb-3 d-flex justify-content-center align-items-center">
                            <a href="#" class="link-hover">
                                <img src="{{asset('asset/img/g3306.svg')}}" alt="logo" class="icon">
                                <span class="text nav-text-mob ms-2">Quick Pricing</span>
                            </a>
                        </li>
                        <li class="nav-links-mob mb-4 d-flex justify-content-center align-items-center">
                            <a href="#" class="link-hover">
                                <img src="{{asset('asset/img/files-and-folders.svg')}}" alt="logo" class="icon">
                                <span class="text nav-text-mob  ms-2">Submit Loans</span>
                            </a>
                        </li>
                        <li class="nav-links-mob mb-2">
                            <a href="">
                            <span class="text nav-text-mob fs-6 fw-bold">ACCOUNT</span>
                            </a>
                        </li>
                        <li class="nav-links-mob mb-3 d-flex justify-content-center align-items-center">
                            <a href="#" class="link-hover">
                                <img src="{{asset('asset/img/Group 5718.svg')}}" alt="logo" class="icon">

                                <span class="text nav-text-mob ms-2">Settings</span>
                            </a>
                        </li>
                        <li class="nav-links-mob mb-3 d-flex justify-content-center align-items-center">
                            <a href="#" class="link-hover" >
                                <img src="{{asset('asset/img/Group 5719.svg')}}" alt="logo" class="icon">

                                <span class="text nav-text-mob ms-2">Logout</span>

                            </a>
                        </li>
                    </ul>
          </div>
          <!-- For desktop view -->
          <div class="offcanvas-body d-none d-lg-flex d-xl-flex">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item d-flex align-items-center me-4">
                <img src="{{asset('asset/img/bell_icon.png')}}" width="25.73px" height="25.97px" alt="Notification icon"
                  class="bellicon">
              </li>
              <li class="nav-item dropdown me-4 d-flex align-items-center">
                <div class="ms-4">
                  <img src="{{asset('asset/img/user_icon.png')}}" width="38.15px" height="38.15px" alt="Notification icon"
                    class="usericon">
                </div>
                <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false" style="font: normal normal 600 11px/17px Poppins;">
                  Shanmugam<span style="font: normal normal normal 9px/13px Poppins;"><br>Developer</span>
                </a>
                <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="fa fa-angle-down"></span>
                </a>
                <div>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">View Account</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </section>
  <section class="body-content">
    <!-- For mobile -->
        <div class="mobile-body d-md-none d-lg-none d-xl-none mb-4">
                          <!-- Search -->
          <div class="d-flex justify-content-center">
            <div class="nav-search  ">
              <form class="d-flex mt-4 me-auto  align-items-center searchbtn" role="search">
                <input type="search" placeholder="Search by Borrower Last Name or Loan Number">
                <i style="color: #0033A1;" class="fas fa-search" aria-hidden="true"></i>
              </form>
            </div>
          </div>
            <!-- Pipeline search -->
        </div>
    <!-- For desktop view -->
    <section class="side-bar container-fluid d-none d-lg-block d-xl-block">
    <div class="container-fluid">
      
    </div>
    </section>
  </section>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js" integrity="sha512-pbtq2mQXyggVE9S9vEus5z5eJF5cOFXjQoVRbYG5wmzPW2XH/g+He8oKSDXa9z9+xm1wy34kGnYEPqftTWzKzg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>