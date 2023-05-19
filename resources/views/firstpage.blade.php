<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/style.css">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
{{-- TEST --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
{{-- ------- --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script> --}}
    <title>Glide - Acra Lending Portal design</title>
</head>
<body>


<style>
    .cover_image{
          
                    height:100vh;
                    background-image:no-repeat;
                    background-size:cover;
                    background-repeat:no-repeat;
                    background-image:url({{asset('img/login_img.PNG')}});
       
    }
 
        input[type="text"], select.form-control {


                    height: 24px;
                    border: none;
                    border-bottom: 1px solid #000000;
                    outline: none;
                    border-bottom-color: #6A679E;
                    /* margin: 0 auto; */
                    float: none;
                    background: transparent;
    }

    input[type="password"], select.form-control {
                    margin: 0 auto;
                    float: none;
                    border: none;
                    border-bottom: 1px solid #000000;
                    outline: none;
                    border-bottom-color: #6A679E;

    }

    input::placeholder {
                    font-weight: bold;
                    opacity: 0.9;
                    color: black;
                    font-size:12px;

    }


</style>
<div class="container-fluid" style="height:100vh;">
<div class="card-outer"> 
       <!-- <div class="card shadow-none">  -->
          <div class="card-body">   
                <div class="row" style="height:100vh;">
                    <div class="col-lg-8 img-fluid cover_image d-none d-md-block d-lg-block d-inline-flex">
                        <!-- <img src="images/Capture.PNG" style="height:100vh;" alt="Glide Acra image"  class="img-fluid cover_image d-none d-md-block d-lg-block d-inline-flex"> -->
                    </div>
                    <div class="col-lg-4 align-self-center">
                        <div class="text-center">
                            <img src="img/header.PNG" alt="Glide Acra image" class="img-fluid mb-3 mt-4" style="width: 187px; height: 74px;">
                            <p class="mt-3"><b style="font-size: 13px;font:normal normal 600 14px/18px Poppins;">Welcome to Acra Lending Broker Portal</b></p>
                            <form class="px-lg-3 px-4 px-md-5 px-xxl-5 mt-5">
                                <div class="mb-3">
                                    <input type="text" name="name" placeholder="Email ID" autocomplete="off" class="d-block mt-3 col-12">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" placeholder="Password" autocomplete="off" class=" d-block mt-3 col-12">
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6 text-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                            <label class="form-check-label" style="font-size: 10px;" for="inlineFormCheck"><b>Remember me</b></label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="#" style="font-size: 9px; color: #0033A1; text-decoration:none;"><b>Forgot Your Password?</b></a>
                                    </div>
                                </div>
                                <div class="mt-4  mb-5">
                                    <div class="d-flex justify-content-center ">
                                        <a href="/second" class="w-75 p-2 rounded text-center" style="font:normal normal 600 14px/18px Poppins; background-color:#0033A1; color:#FFFFFF;text-decoration:none;" type="submit" value="submit"><span class="fw-bold fs-5 text_Send ">NEXT</span></a>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div> 
</div>


</body>
</html>
