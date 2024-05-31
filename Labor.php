<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Arthi Lamaze class </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="assets/custom_img/logo.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://fontawesome.com/icons/link?f=classic&s=solid">
</head>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/custom_img/logo.jpeg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
            <div class="main-header  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="./assets/custom_img/Screenshot 2024-05-21 160131-01.jpeg.jpg" alt="" height="60px"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">Classes</a>
                                                <ul class="submenu">
                                                    <li><a href="Labor.php">Labor management</a></li>
                                                    <li><a href="BreastFeeding.php">Breast feeding</a></li>
                                                    <li><a href="Postpartum.php">Postpartum and newborn care</a></li>
                                                    <li><a href="LAMAZEseries.php">Lamaze series</a></li>
                                                    <li><a href="childbirth.php">Personal child birth care</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="schedules.php">Registration Schedules</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            
                                            <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="header-right-btn f-right d-none d-xl-block ml-20">
                                        <a class="btn header-btn"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto; all: unset; color: white;">Book Appointment</button>                                        </a>
                                    </div>
                                </div>
                            </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Header End -->
</header>
    <main>
      <!-- Hero Start -->
      <div class="slider-area">
        <div class="slider-height2 d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <div class="hero-cap">
                  <h2>Labor Management</h2>
                  <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="#">Labor Management</a>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero End -->

<!-- About Area start -->
<section class="about-area section-paddingt30">
  <div class="container">
      <div class="row ">
          <div class="col-lg-12">
              <div class="about-caption mb-50">
                  <h3>What are 'Labor management' classes?</h3>
                  <p class="pera1" style="text-align: justify;"> This covers everything you need to know for your big day. For
                    example, It will answer the following questions: How will I know
                    I am in labor? When should I get to the hospital? How can I
                    relax? How can I help as a partner? When will the baby come out?
                    What can I do to make the process easier? You will understand
                    how labor will feel like and practice techniques to effectively
                    manage them. You will understand how true labor feels like and
                    will be able to differentiate them from false contractions. You
                    will avoid unnecessary panic visits to the hospital. You will
                    feel more confident about your big day.</p>
                  <!-- <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. </p> -->
              </div>
          </div>
          
      </div>
  </div>
</section>
<!-- About Area End -->




<section class="about-area section-paddingt30">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="about-caption mb-50">
                  <h3>Upcoming Labor Management Schedules</h3>

                  <?php
                  // Include database connection
                  include 'db_connection.php';

                  // Fetch upcoming schedules for Labor Management
                  $class_name = "Labor management";
                  $sql = "SELECT date, start_time, end_time FROM class WHERE class = '$class_name' AND date >= CURDATE() ORDER BY date ASC LIMIT 2";
                  $result = $conn->query($sql);

                  // Display schedules
                  if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                          $date = new DateTime($row['date']);
                          $day = $date->format('d');
                          $month = $date->format('M');
                          $day_of_week = $date->format('l'); // Get the day of the week
                          $start_time = date("g:i A", strtotime($row['start_time']));
                          $end_time = date("g:i A", strtotime($row['end_time']));

                          echo "<div class='outer'>
                                  <div class='left'>
                                      <h2>$month</h2>
                                      <h3>$day</h3>
                                  </div>
                                  <div class='right'>
                                      <div class='reg_image'>
                                          <img src='./assets/custom_img/covid-19-pregnancy-blog.jpg' alt='' />
                                      </div>
                                      <div class='reg_content'>
                                          <p>
                                              <b>One-Day Labor Management Webinar (For Expecting Mommies from 5 Months, All New Mommies)</b>
                                          </p>
                                          <p>
                                              Timing : $start_time to $end_time 'IST' $day_of_week
                                          </p>
                                      </div>
                                      <div class='reg_button'>
                                          <button>
                                              <a href='https://rzp.io/l/Aijzs6QTp'>click here to register</a>
                                          </button>
                                      </div>
                                  </div>
                              </div>";
                      }
                  } else {
                      echo "<p>No upcoming schedules available.</p>";
                  }

                  // Close database connection
                  $conn->close();
                  ?>

              </div>
          </div>
      </div>
  </div>
</section>
<!-- Schedule Area End -->



      
	     <!-- Book appointment start -->

       <div id="id01" class="modal">
  
        <div class="modal-content animate">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="assets/custom_img/Screenshot 2024-05-21 160131-01.jpeg.jpg" alt="Avatar" class="avatar">
          </div>
      
          <div class="container">
            <h1>Book Free Appointment with us</h1>
            <p>Book a one-on-one session with us to learn how the Lamaze classes.</p>
            <h3>Available week days</h3>
            <p>Monday to Saturday from 10:00 a.m to 6:00 p.m</p>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button class="email-button" onclick="window.location.href='bookAppointment.php'">
                Book Appointment
            </button>
            
          </div>
      </div>
      </div>
      



    
      <!-- <script>
      // Get the modal
      var modal = document.getElementById('id01');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script> -->


<!-- Book appointment end -->
    </main>
    <footer>
        <!-- Footer Start-->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="schedules.php">Class Registration</a></li>
                            <li><a href="bookAppointment.php">Appoinment booking</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="assets/Lamaze Courses.pdf">Course Content</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>our classes</h4>
                        <ul>
                            <li><a href="Labor.php">Labor management</a></li>
                            <li><a href="BreastFeeding.php">Breast feeding</a></li>
                            <li><a href="postpartum.php">Postpartum and newboarn care</a></li>
                            <li><a href="LAMAZEseries.php">Lamaze series</a></li>
                            <li><a href="childbirth.php">Personal child birth care</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="https://www.youtube.com/channel/UCWQzXfnwDQi4Kv8LKIBHPaw"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/happypregnancy_arthi/"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="wt-footer-bot-left">
                        <span class="copyrights-text">Arthi Lamaze © 2024. All Rights Reserved.</span>
                    </div>
                </div>
            </div>
       </footer>
    <!-- Footer end-->

    <!-- Scroll Up -->
    <div id="back-top">
      <a title="Go to Top" href="#"> <i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JS here -->
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!-- Jquery Mobile Menu -->
      <script src="./assets/js/jquery.slicknav.min.js"></script>
      <script src="./assets/js/slick.min.js"></script>
  
    <!-- contact js -->
      <script src="./assets/js/contact.js"></script>
      <script src="./assets/js/mail-script.js"></script>
      <script src="./assets/js/main.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <script type="text/javascript" src="./assets/js/faq.js"></script>
  </body>
</html>
