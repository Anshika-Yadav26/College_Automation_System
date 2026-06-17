<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>College Automation System</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/footer.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/s1.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/cont.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/style3.css')); ?>">


<!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->


  <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <script src="js2/bootstrap.bundle.js"></script> -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
  <link rel="icon" href="images/s4.jpg">

  <script>

var img = ["h.png", "f.png", "s2.png"];
var i = 0;
function slide() {
  var div = document.getElementById("slider");
  div.style.backgroundImage = "url('images/" + img[i] + "')";
  i++;
  if (img.length == i) {
    i = 0;
  }
  window.setTimeout("slide()", 3000);
}

</script>

</head>

<body onload="slide()">
<div class="container-fluid">
<!-- first row start -->
<div class="row">
  <div class="col-sm-12">
    <div class="row align-items-center">
      <div class="col-sm-2">
        <img src="<?php echo e(asset('images/fgp.jpg')); ?>" height="150" class="ps-2 py-2">
      </div>
      <div class="col-sm-8">
        <marquee behavior="alternate" direction="down" scrollamount="1" onmouseover="stop();" onmouseout="start();">
          <h1 class="text-center" style="font-family: Archivo Black, sans-serif;
          font-weight: 400;
          font-size: 40px;
          color: rgb(141, 77, 77);
          font-style:normal;">Feroze Gandhi Polytechnic Raebareli
          </h1>
          <h1 class="text-center" style="font-family: Archivo Black, sans-serif;
          font-weight: 800;
          font-size: 40px;
          color: rgb(141, 77, 77);
          font-style:normal;">
            फिरोज गांधी पॉलिटेक्निक रायबरेली
          </h1>

        </marquee>
      </div>
      <div class="col-sm-2">
        <img src="<?php echo e(asset('images/BTEUP.jpg')); ?>" alt="" height="150" class="py-2 ps-5">
      </div>
    </div>
  </div>
</div>
<!-- first row end -->

<!-- navbar start -->
<div class="row" style="background-color:rgb(5, 117, 121);">
  <div class="col-sm-12">
    <div class="row" style="background-color:rgb(5, 117, 121) ;">
      <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light fw-semibold px-3 ps-5 ms-4" aria-current="page" href="<?php echo e(('/')); ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light fw-semibold px-3" aria-current="page"
                  href="<?php echo e(('/about')); ?>">&nbsp;&nbsp;About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light fw-semibold px-3" aria-current="page" href="<?php echo e(('/enquiry')); ?>">&nbsp;&nbsp;Contact
                  Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light  fw-semibold px-3" aria-current="page"
                  href="<?php echo e(('/faculty')); ?>">Faculty</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light fw-semibold px-3" aria-current="page" href="#">&nbsp;&nbsp;Gallery</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light fw-semibold px-3" aria-current="page"
                  href="#">&nbsp;&nbsp;Academics</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link text-light fw-semibold px-4" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  &nbsp;&nbsp;Student Support
                </a>
                <ul class="dropdown-menu w-100 px-2  ps-4 py-2">
                  <li><a class="dropdown-item  fw-semibold" href="#">Admission</a></li>
                  <hr>
                  <li><a class="dropdown-item  fw-semibold" href="#">Examination</a></li>
                  <hr>
                  <li><a class="dropdown-item  fw-semibold" href="#">Fee Structure</a></li>
                  <hr>
                  <li><a class="dropdown-item  fw-semibold" href="#">Time Table</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light px-3 fw-semibold" aria-current="page" href="#">&nbsp;&nbsp;Events</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link text-light px-3  fw-semibold" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  &nbsp;&nbsp;Sign Up
                </a>
                <ul class="dropdown-menu w-100 px-2 py-2">

                  <li><a class="dropdown-item  fw-semibold" href="<?php echo e(route('student.register')); ?>">Student</a></li>
                  <hr>
                  <li><a class="dropdown-item  fw-semibold" href="<?php echo e(route('teacher.register')); ?>">Teacher</a></li>
                  <hr>
                  <li><a class="dropdown-item  fw-semibold" href="<?php echo e(route('parent.register')); ?>">Parent</a></li>
                </ul>
              </li>


              <li class="nav-item dropdown">
                <a class="nav-link text-light px-3 fw-semibold" href="" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  &nbsp;&nbsp; Login
                </a>
                <ul class="dropdown-menu w-100 px-2 py-2">
                  <li><a class="dropdown-item fw-semibold" href="<?php echo e(route('admin.login')); ?>">Admin Login</a></li>
                  <hr>
                  <li><a class="dropdown-item fw-semibold" href="<?php echo e(route('student.login')); ?>">Student Login</a></li>
                  <hr>
                  <li><a class="dropdown-item  fw-semibold" href="<?php echo e(route('teacher.login')); ?>">Teacher Login</a></li>
                  <hr>
                  <li><a class="dropdown-item  fw-semibold" href="<?php echo e(route('parent.login')); ?>">Parent Login</a></li>
                </ul>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </div>
</div>

<!-- navbar end -->

                       

                       
               <main>
                <?php echo $__env->yieldContent('content'); ?>
</main>

    <!-- footer start -->

    <div class="row">
      <footer class="new_footer_area bg_color">
        <div class="new_footer_top">
          <div class="container " id="smm">
            <div class="row">
              <div class="col-lg-2 col-md-6 ">
                <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s"
                  style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                  <h3 class="f-title f_600 t_color f_size_18 text-white fw-bold fs-4">Get in Touch</h3>
                  <p class="text-white fw-semibold" style="font-size:14px;">Phone Number : +05352974200</p>
                  <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                    <input type="text" style="font-size:14px;" name="EMAIL" class="form-control memail" placeholder="principalfgp@gmail.com">
                    <p class="btn  text-white fw-semibold mt-5" >Subscribe</p>
                    <p class="mchimp-errmessage" style="display: none;"></p>
                    <p class="mchimp-sucmessage" style="display: none;"></p>
                  </form>
                </div>
              </div>
              <div class="col-lg-1 col-md-6 me-2">
                <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s"
                  style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                  <h3 class="f-title f_600 t_color f_size_18 text-white fw-bold fs-4">Download</h3>
                  <ul class="list-unstyled f_list ">
                    <li><a href="#" class="text-white">About</a></li>
                    <li><a href="#" class="text-white">Admission</a></li>
                    <li><a href="#" class="text-white">Community</a></li>
                    <li><a href="#" class="text-white">Facuilty</a></li>
                    <li><a href="#" class="text-white">Projects</a></li>
                    <li><a href="#" class="text-white">My tasks</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 ms-5">
                <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s"
                  style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                  <h3 class="f-title f_600 t_color f_size_18 text-white fw-bold fs-4">Departments</h3>
                  <ul class="list-unstyled f_list">
                    <li><a href="#" class="text-white">Computer Science & Engg.</a></li>
                    <li><a href="#" class="text-white">Information Technology & Engg.</a></li>
                    <li><a href="#" class="text-white">Mechanical Engg.</a></li>
                    <li><a href="#" class="text-white">Electronics Engg.</a></li>
                    <li><a href="#" class="text-white">Instrumentation & Control Engg.</a></li>
                    <li><a href="#" class="text-white">MOM & SP Engg.</a></li>


                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s"
                  style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                  <h3 class="f-title f_600 t_color f_size_18 text-white fw-bold fs-4">Team Solutions</h3>
                  <div class="f_social_icon">
                    <a href="#" class="fab fa-facebook bg-white"></a>
                    <a href="#" class="fab fa-twitter bg-white"></a>
                    <a href="#" class="fab fa-linkedin bg-white"></a>
                    <a href="#" class="fab fa-instagram bg-white"></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-1">
                <img src="<?php echo e(asset('images/group.jpg')); ?>" alt="" height="210">
              </div>


            </div>
          </div>
          <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
            <div class="footer_bg_three"></div>
            <div class="footer_bg_four"></div>
          </div>
        </div>
        <div class="footer_bottom">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 col-sm-7">
                <p class="mb-0 f_400 text-white">© All rights reserved.</p>
              </div>
              <div class="col-lg-6 col-sm-5 text-right">
                <p class="text-white fw-bold">Made by <span class="text-danger fs-4">&hearts;</span> A</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- footer end -->




  </div>


<script src="<?php echo e(asset('js/bootstrap.bundle.js')); ?>"></script>


</body>

</html><?php /**PATH C:\Users\anshi\OneDrive\Desktop\c\1619\resources\views/layouts/index.blade.php ENDPATH**/ ?>