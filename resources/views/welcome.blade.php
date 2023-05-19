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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="{{asset('asset/css/DashboardStyle.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/sidebar.css')}}">




</head>

<body>
    <div class="containerOuterLayout">
        <section class="glide-nav">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom ">
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
                    <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="navbarOffcanvas"
                        aria-labelledby="navbarOffcanvasLabel">
                        <div class="offcanvas-header d-flex align-items-center d-lg-none d-xl-none border-bottom">
                            <h5 class="offcanvas-title" id="navbarOffcanvasLabel">
                                <!-- For mobile view -->
                                <li class="nav-item dropdown me-4 d-flex align-items-center">
                                    <div class="mx-3">
                                        <img src="{{asset('asset/img/user_icon.png')}}" width="44.15px" height="44.15px"
                                            alt="Notification icon" class="usericon">
                                    </div>
                                    <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false" style="font: normal normal 600 15px/17px Poppins;">
                                        Shanmugam<span
                                            style="font: normal normal normal 15px/13px Poppins;"><br>Developer</span>
                                    </a>
                                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                    </a>
                                    <div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">View Account</a></li>
                                            <li><a class="dropdown-item" href="#">Settings</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
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
                                        <span class="text nav-text-mob ms-2">Price Scenario</span>
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
                                    <a href="#" class="link-hover">
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
                                    <img src="{{asset('asset/img/bell_icon.png')}}" width="25.73px" height="25.97px"
                                        alt="Notification icon" class="bellicon">
                                </li>
                                <li class="nav-item dropdown me-4 d-flex align-items-center">
                                    <div class="ms-4">
                                        <img src="{{asset('asset/img/user_icon.png')}}" width="38.15px" height="38.15px"
                                            alt="Notification icon" class="usericon">
                                    </div>
                                    <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false" style="font: normal normal 600 11px/17px Poppins;">
                                        Shanmugam<span
                                            style="font: normal normal normal 9px/13px Poppins;"><br>Developer</span>
                                    </a>
                                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="fa fa-angle-down"></span>
                                    </a>
                                    <div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">View Account</a></li>
                                            <li><a class="dropdown-item" href="#">Settings</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
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
                    <div class="nav-search">
                        <form class="d-flex mt-4 me-auto  align-items-center searchbtn" role="search">
                            <input type="search" placeholder="Search by Borrower Last Name or Loan Number">
                            <i style="color: #0033A1;" class="fas fa-search" aria-hidden="true"></i>
                        </form>
                    </div>
                </div>
                <!-- Pipeline search -->
            </div>
            <!-- For desktop view -->
            <div class="wrapper ">
                <!-- Sidebar  -->
                <nav id="sidebar" class="d-none d-lg-flex">

                    <ul class="list-unstyled components w-100">
                        <li class="btn3 active3">
                            <a href="#">
                                <img src="asset/img/list.svg" alt="logo" class="icon"
                                    style="border: 1px solid #0033A1; background: #0033A1; border-radius: 5px;">
                                <span class="text">Pipe Line</span>
                            </a>
                        </li>
                        <li class="btn3 active3">
                            <a href="#">
                                <img src="asset/img/quick pricing.svg" alt="logo" class="icon"
                                    style="width: 15.748px; height: 19.008px; position:relative; left:3px;">
                                <span class="text">Price Scenario</span>
                            </a>
                        </li>
                        <li class="btn3 active3">
                            <a href="#">
                                <img src="asset/img/g3306.svg" alt="logo" class="icon">
                                <span class="text">Quick Pricing</span>
                            </a>

                        </li>
                        <li class="btn3 active3">
                            <a href="#">
                                <img src="asset/img/files-and-folders.svg" alt="logo" class="icon">
                                <span class="text">Submit Loans</span>
                            </a>
                        </li>
                        <li>
                            <span class="account" style="font-weight:bolder">ACCOUNT</span>
                        </li>
                        <li class="btn3 active3">
                            <a href="#">
                                <img src="asset/img/Group 5718.svg" alt="logo" class="icon">
                                <span class="text">Settings</span>
                            </a>
                        </li>
                        <li class="btn3 active3">
                            <a href="#">
                                <img src="asset/img/Group 5719.svg" alt="logo" class="icon">
                                <span class="text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <button type="button" id="sidebarCollapse" class="btn btn-info btn1">
                    <i class="fa-solid fa-chevron-left icon" style="color: #fcfdfd;"></i>
                </button>
                <!-- Page Content  -->
                <div id="content" class="ms-2 mt-lg-5 mt-md-3">
                    {{-- Pipeline head --}}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-1">
                                <h3 class="fw-bold d-sm-flex text-center" style="color: #323E48; font-size: 16px;">Pipe
                                    Line</h3>
                            </div>
                            <div class="col d-none d-md-flex justify-content-md-start d-md-block d-xl-block">
                                <div class="btn-group">
                                    <button class="btn2 active1 px-2" id="btn-scenarios">Scenarios</button>
                                    <button class="btn2 px-2" id="btn-active">Active</button>
                                    <button class="btn2 px-2" id="btn-funded">Funded</button>
                                    <button class="btn2 px-2" id="btn-cancelled">Cancelled/Declined</button>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center d-lg-none d-sm-block d-md-none mt-2">
                                <div class="btn-group">
                                    <button class="btn2 active1 px-1" id="btn-scenarios-sm">Scenarios</button>
                                    <button class="btn2 px-1" id="btn-active-sm">Active</button>
                                    <button class="btn2 px-1" id="btn-funded-sm">Funded</button>
                                    <button class="btn2 px-1"
                                        id="btn-cancelled-sm">Cancelled/Declined</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Search By --}}
                    <div style="border-radius: 5px">
                        <div class="dashboard-search shadow p-1 mt-3 mt-sm-5 mt-md-0 mt-lg-3" id="dashboard-table1"
                            style="border-radius: 5px">
                            <span class="dashboard-search-head ms-1" style="font-size: 14px;">Search</span>
                            <div class="row ms-1 me-1 align-items-center"
                                style="border-radius: 5px; min-height: 69px; background: #EFF5FC">
                                <div class="col-lg-10 col-md-9 col-sm-12">
                                    <div class="d-flex flex-md-row flex-column mt-4 mt-md-0 mt-sm-4 mt-lg-0">
                                        <label class="px-2 d-none d-lg-flex d-md-flex d-sm-none"
                                            style="font-size: 14px">Search by</label>
                                        <input type="date" id="date-filter " class="ms-0 mb-2 mb-md-0 custom-date-input"
                                            name="txtDate" placeholder="">
                                        <select class="ms-md-5 custom-select" id="borrower-name-filter"
                                            aria-label="Default select example">
                                            <option selected style="font-size: 14px">Borrower Name</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 d-flex justify-content-end mt-3 mt-md-0">
                                    <button class="btn btn-primary btn-sm me-2 btnrst"
                                        style="border-radius: 2px; color: #FFFFFF; background-color: #9C9C9C;">Reset</button>
                                    <button class="btn btn-primary btn-sm btngo"
                                        style="border-radius: 2px; background-color: #0033A1; color: #FFFFFF;">Go</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Tables --}}
                    <div class="dashboard-table container_table shadow mt-4 mt-sm-2 mt-md-2 mt-lg-4"
                    id="dashboard-table"
                    style="border-radius:5px;color: #323E48;text-align: left;font: normal normal 600 12px/18px Poppins;">
                
                <div class="pagination-back"></div>
                <table id="glide-table" class="table row-border test-table w-100 datatable"
                    style="border-radius:5px;height: 40px;">
                    <thead class="my-table-header1" id="dashboard-head1"
                        style="vertical-align:middle;background: #E3ECF6 0% 0% no-repeat padding-box;">
                        <tr>
                            <th>Scenario Name</th>
                            <th>Borrower Name</th>
                            <th>Date</th>
                            <th>Loan Officer</th>
                            <th>Loan Purpose</th>
                            <th>Broker Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody style="border-radius:5px;background: #FCFCFC  0% 0% no-repeat padding-box; width:100vh"
                        class="px-3">
                        {{-- Table data retrived from json file  --}}
                    </tbody>
                </table>
            </div>
                    
            </div>
    </div>
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
