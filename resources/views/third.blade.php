<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
@media (max-width: 767px) {
    .image-container {
        display: none;
    }
}

.image-container {
    background-image: url('{{asset('img/login_img.png')}}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 100%;
}
.plhol::placeholder{

transform: translateX(1px);
color:#C4C4C4;
text-align: left;
position: absolute;
left: 0;
top: 0;
}

</style>

</head>
<body>
    <div class='container-fluid'>
        <div class='row'>
            <div class='image-container col-xl-8 col-lg-8 col-md-7 bg-primary' style='height: 100vh;'></div>
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 d-flex align-items-center justify-content-center" style="height: 100vh;">
                <div class="d-flex justify-content-center align-items-center flex-column w-100">
                    <img class="w-50" src="{{asset('img/header.png')}}"><p><p> </p> </p>
                    <span class="title_header1" style="etter-sptext-align: left; font: nonrmal ormal 600 16px/36px Poppins; lacing: 0px; color: #000000;">Enter Code</span>
                    <span class="title_header2">We texted your phone +<strong>XX XXXXXXX21,</strong></span>
                    <p class="title_header3">Please enter the Code to sign in.</p>
                    <span><input class="plhol w-auto border-bottom border-0 px-5" type="number" placeholder="Enter Code"></p></span>
                    <span class="w-75" style="font:normal normal 600 13px/18px Poppins;color:#555555;">If your number is incorrect, please reach out to</span>
                    <span class="w-75" style="font:normal normal 600 13px/18px Poppins;color:#0033A1">itsupport@acrabrokerlinks.com</span> <br> <br>
                    <a href="/fourth" class="w-75 p-2 rounded text-center" style="background-color:#0033A1; color:#FFFFFF;text-decoration:none;" type="submit" value="submit"><span class="fw-bold fs-5 text_Send ">VERIFY</span></a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>