<!DOCTYPE html>
<html lang="en">
<head> 
  <title>Glide</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
      integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="{{asset('asset/css/DashboardStyle.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/sidebar.css')}}">
  



</head>

 <body> 
<div class="containerOuterLayout"> 
  <section class="glide-nav">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom">
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
        <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="navbarOffcanvas"
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

     {{-- Sidebar Desktop --}}
    <section class="sidebar">
            <header>
                <i id="toggle-button1" style="left: 203px;" class='bx bx-chevron-right toggle'></i>
            </header>
            <div class="menu-bar">
                <div class="container-fluid menu">
                    <ul class="menu-links">
                        <li class="nav-links link-hover"
                            style="width:212px;color: #0033A1;font: normal normal bold 14px/21px Poppins;background: #E3ECF6;border-left: 3px solid #001c58;">
                            <a href="#" class="link-hover" style="width:212px"
                                style="color: #0033A1;font: normal normal bold 14px/21px Poppins;background: #E3ECF6;">
                                <img src="img/list.svg" alt="logo" class="icon"
                                    style="color: #0033A1;font: normal normal bold 14px/21px Poppins;border-left: 2px solid #001c58; border: 1px solid #0033A1; background: #0033A1; border-radius: 5px;">

                                <span class="text nav-text">Pipe Line</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="#" class="link-hover" style="width:212px">
                                <img src="img/quick pricing.svg" alt="logo" class="icon">
                                <span class="text nav-text" >Price Scenario</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="#" class="link-hover" style="width:212px">
                                <img src="img/g3306.svg" alt="logo" class="icon">
                                <span class="text nav-text">Quick Pricing</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="#" class="link-hover" style="width:212px">
                                <img src="img/files-and-folders.svg" alt="logo" class="icon">
                                <span class="text nav-text">Submit Loans</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="#">
                            <span class="text nav-text" style="color:#343434;font-size: 14px; font-weight:bolder; position:relative; left: 0px;">ACCOUNT</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="#" class="link-hover" style="width:212px">
                                <img src="img/Group 5718.svg" alt="logo" class="icon">
                                <span class="text nav-text">Settings</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="#" class="link-hover" style="width:212px">
                                <img src="img/Group 5719.svg" alt="logo" class="icon">
                                <span class="text nav-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    </section>
  </section>
</div>
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
      integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://kit.fontawesome.com/9a470ccc4c.js" crossorigin="anonymous"></script>

  <script src="asset/js/script.js"></script>
</html>