<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/PHPMailer.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){

$name=$_POST['name'];
$msg=$_POST['message'];
$sub=$_POST['subject'];
$email=$_POST['email'];

$mail = new PHPMailer(true);


    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'vishnuportfoliomail@gmail.com';                     
    $mail->Password   = 'cpqdnosthjguujav';                              
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
$mail->Port = 587;                                 

    //Recipients
    $mail->setFrom('vishnuportfoliomail@gmail.com', 'Portfolio Mail');
    $mail->addAddress('gvishnukumar8124@gmail.com', 'Owner');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Hey, This is Portfolio Message';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->Body    = '<h2>' . $name .'</h2>';
    $mail->Body    = '<p>' . $email .'</p>';
    $mail->Body    = '<p style="color:purple;">'.$msg.'</p>';

    if($mail->send()){
    echo '<script>alert( "Message has been sent")</script>';
    }
    else{
        echo '<script>alert( "Please Try Again")</script>';
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<!--  -->
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>vk_portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./assets/lightbox2-2.11.3/lightbox2-2.11.3/dist/css/lightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">
    <nav id="navbar" class="navbar">
     

      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#resume">Resume</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <!-- <a href="" class="nav-brand"><img src="./assets/img/Logo_Hor_2_hite.svg" style="width:500px" alt=""></a> -->
      <h1 class="text-end">VISHNUKUMAR G</h1>
      <h2 class="bg-warning fw-bold text-black p-1 text-end">Visual Designer &amp; Front-end Developer</h2>
      <p class="floating">KNOW MORE</p>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>About Me</span>
          <h2>About Me</h2>

          <!-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> -->
        </div>

        <div class="row">
          <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content ps-lg-4 d-flex flex-column justify-content-center">
              <div class="row my-3">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Vishnu Kumar G</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+91 99448 36229</span></li>
                    <li><i class="bi bi-chevron-right"></i>
                      <strong>Email:</strong><span>gvishnukumar8124@gmail.com</span>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Thiruchuli,
                        Virudhunagar.</span>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>24</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>BSC Information
                        Technology</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>C-Tech Course:</strong><span>Fullstack
                        Development</span>
                    </li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Behance</strong> <span><a
                          href="https://www.behance.net/vshbhrth">www.behance.net</a></span></li>
                  </ul>
                </div>
              </div>

              <div class="skills-content ps-lg-4">
                <div class="row">
                  <!-- first column -->
                  <div class="col-md-5">
                    <div class="section-title1">
                      <span>Skills</span>
                      <h2>Software Skills</h2>
                    </div>
                    <div class="progress">
                      <span class="skill">Figma<i class="val">95%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                    <div class="progress">
                      <span class="skill">Adobe XD <i class="val">85%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                    <div class="progress">
                      <span class="skill">Adobe Photoshop <i class="val">95%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                    </div>

                    <div class="progress">
                      <span class="skill">Adobe Illustrator<i class="val">90%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                      </div>
                    </div>

                    <div class="progress">
                      <span class="skill">Adobe Indesign <i class="val">75%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                    <div class="progress">
                      <span class="skill">Adobe Animate cc <i class="val">75%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                    <div class="progress">
                      <span class="skill">Adobe Premiere pro <i class="val">50%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                      </div>
                    </div>

                  </div>
                  <!-- Second Column -->
                  <div class="col-md-5 ms-auto">
                    <div class="section-title1">
                      <span>Skills</span>
                      <h2>Programming Skills</h2>
                    </div>
                    <div class="progress">
                      <span class="skill">HTML5<i class="val">90%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                    </div>

                    <div class="progress">
                      <span class="skill">CSS3<i class="val">90%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                      </div>
                    </div>

                    <div class="progress">
                      <span class="skill">JavaScript<i class="val">75%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                    <div class="progress">
                      <span class="skill">Bootstrap<i class="val">90%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                    <div class="progress">
                      <span class="skill">Mysql<i class="val">60%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                          aria-valuemax="100">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </section><!-- End About Me Section -->

    <!-- ======= My Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <span>My Resume</span>
          <h2>My Resume</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Vishnukumar G</h4>
              <p><em>1.2 years of Experience Working with User Interface Design and
                  Front-end development. and additional skills in Graphic design,
                  2D Animation and Mentoring. I have a strong background in
                  wireframing, prototyping, and Frontend developing.Working
                  with the flow of Research, problem solving, wireframing, design,
                  and development.
                  Holder of a Bachelor s Degree in Information Technology.</em></p>
              <p>
              <ul>
                <li>Thiruchuli, Virudhunagar.</li>
                <li>+91 99448 36229</li>
                <li>gvishnukumar8124@gmail.com</li>
              </ul>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <h3 class="resume-title">Work Experience</h3>
            <div class="resume-item">
              <h4>Visual Designer &amp; Front-end Developer</h4>
              <h5>2022 - Present</h5>
              <p><em><b>Make Buiz Lab, Madurai.</b></em></p>
              <p>
              <ul>
                <li><span><b>NIMS College Website</b></span> my role in this project - Re design theUser interface
                  design flow and Frontend development also.</li>
                <li><span><b>Company Website Design</b></span> buizlab company website design - <a
                    href="http://buizlab.in/">buizlab.in</a></li>
                <li><span><b>Graphic Design</b></span> Finished 45+ Creative Promotion Poster Designs,
                  Banner Designs, Flyer Designs</li>

              </ul>
              </p>
            </div>
          </div>
          <div class="row mt-3 mb-0">
            <hr>
          </div>
          <div class="row mt-0">
            <h3 class="resume-title">Education</h3>
            <div class="col-lg-6">
              <div class="resume-item">
                <h4>C-Tech - Fullstack Development</h4>
                <h5>2022</h5>
                <p><em><b>Image Creative Education, Madurai.</b></em></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="resume-item">
                <h4>Bachelor Degree</h4>
                <h5>2021</h5>
                <p><em><b>VHNSNC College, Virudhunagar.</b></em></p>
              </div>
            </div>
          </div>
          
      </div>

      </div>
    </section>
    <!-- End My Resume Section -->



    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>My Portfolio</span>
          <h2>My Portfolio</h2>
        </div>
        <!-- Start -->
        <ul class="works-nav nav nav-pills mb-md-5 gap-md-5 d-flex justify-content-center  gap-4 mb-lg-4 mb-md-3 mb-0 my-lg-0 my-md-0 my-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
              type="button" role="tab" aria-controls="pills-home" aria-selected="true">Web Banners</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
              type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Case studies</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
              type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Websites</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-posters-tab" data-bs-toggle="pill" data-bs-target="#pills-posters"
              type="button" role="tab" aria-controls="pills-poster" aria-selected="false">Posters</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-logo-tab" data-bs-toggle="pill" data-bs-target="#pills-logo"
              type="button" role="tab" aria-controls="pills-logo" aria-selected="false">Logos</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
            tabindex="0">
            <div class="row portfolio">
              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                <div class="portfolio-img">
                <a class="example-image-link" href="assets/img/avatar.jpg" data-lightbox="example-set"
                data-title="Web Heoic page UI Design"><img
                    class="example-image w-100" src="assets/img/avatar.jpg" alt="" /></a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                <div class="portfolio-img">
                <a class="example-image-link" href="assets/img/Dp-2.jpg" data-lightbox="example-set"
                data-title="Web Heoic page UI Design"><img
                    class="example-image w-100" src="assets/img/Dp-2.jpg" alt="" /></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                <div class="portfolio-img">
                  <a class="example-image-link" href="assets/img/DC.jpg" data-lightbox="example-set"
                  data-title="Web Heoic page UI Design"><img
                      class="example-image w-100" src="assets/img/DC.jpg" alt="" /></a>
                </div>
                
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                <div class="portfolio-img">
                  <a class="example-image-link" href="assets/img/Fighter_1.jpg" data-lightbox="example-set"
                  data-title="Web Heoic page UI Design"><img
                      class="example-image w-100" src="assets/img/Fighter_1.jpg" alt="" /></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                <div class="portfolio-img">
                  <a class="example-image-link" href="assets/img/MacBook Air - 1.jpg" data-lightbox="example-set"
                  data-title="Web Heoic page UI Design"><img
                      class="example-image w-100" src="assets/img/MacBook Air - 1.jpg" alt="" /></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                <div class="portfolio-img">
                  <a class="example-image-link" href="assets/img/decor plants.jpg" data-lightbox="example-set"
                  data-title="Web Heoic page UI Design"><img
                      class="example-image w-100" src="assets/img/decor plants.jpg" alt="" /></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                <div class="portfolio-img">
                  <a class="example-image-link" href="assets/img/ZRO.jpg" data-lightbox="example-set"
                  data-title="Web Heoic page UI Design"><img
                      class="example-image w-100" src="assets/img/ZRO.jpg" alt="" /></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                <div class="portfolio-img">
                  <a class="example-image-link" href="assets/img/lawrawatches.jpg" data-lightbox="example-set"
                  data-title="Web Heoic page UI Design"><img
                      class="example-image w-100" src="assets/img/lawrawatches.jpg" alt="" /></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                <div class="portfolio-img">
                  <a class="example-image-link" href="assets/img/nike mobile app.jpg" data-lightbox="example-set"
                  data-title="Web Heoic page UI Design"><img
                      class="example-image w-100" src="assets/img/nike mobile app.jpg" alt="" /></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Case studies -->
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <div class="row">
              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                <div class="portfolio-img">
                  <a class="example" href="assets/img/case/altromech.pdf"><img
                      class="example-image w-100" src="assets/img/CaseStudy1.jpg" alt="" /></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                <div class="portfolio-img">
                  <a class="example" href="assets/img/case/bettermart.pdf"><img
                      class="example-image w-100" src="assets/img/casestudy_2.jpg" alt="" /></a>
                </div>
              </div>              
            </div>
          </div>

          <!-- Websites -->
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
            tabindex="0">
          <div class="row">
            <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
              <div class="portfolio-img">
                <a class="example" href="assets/img/altromech emailer.jpg"
                data-title="Web Heoic page UI Design"><img
                    class="example-image w-100" src="assets/img/altromech emailer 1.jpg" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
              <div class="portfolio-img">
              <a class="example" href="assets/img/laborghini.jpg"
                data-title="Web Heoic page UI Design"><img
                    class="example-image w-100" src="assets/img/lambo_website.jpg" alt="" /></a>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
              <div class="portfolio-img">
                <a class="example" href="assets/img/Invicta.jpg"
                  data-title="Web Heoic page UI Design"><img
                      class="example-image w-100" src="assets/img/Invicta1.jpg" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
              <div class="portfolio-img">
                <a class="example" href="assets/img/gym-site.jpg"
                  data-title="Web Heoic page UI Design"><img
                      class="example-image w-100" src="assets/img/fit_web.jpg" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
              <div class="portfolio-img">
                <a class="example" href="assets/img/altromech-site.jpg"
                data-title="Web Heoic page UI Design"><img
                    class="example-image w-100" src="assets/img/altro_web.jpg" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
              <div class="portfolio-img">
                <a class="example" href="assets/img/ecommerce-site.jpg"
                data-title="Web Heoic page UI Design"><img
                    class="example-image w-100" src="assets/img/ecommerce.jpg" alt="" /></a>
              </div>
              
            </div>
          </div>
          </div>
            <!-- end Website -->
          <div class="tab-pane fade" id="pills-posters" role="tabpanel" aria-labelledby="pills-disabled-tab"
            tabindex="0">
          <div class="row">
            <div class="col-lg-3 col-md-6 portfolio-item filter-ui">
              <div class="portfolio-img">
              <a class="example-image-link" href="assets/img/poster_1.jpg" data-lightbox="example-set"
                  data-title="Poster Design"><img
                      class="example-image w-100" src="assets/img/poster_1.jpg" alt="" /></a>
                    </div>
            </div>
            <div class="col-lg-3 col-md-6 portfolio-item filter-ui">
              <div class="portfolio-img">
                <a class="example-image-link" href="assets/img/poster_4.jpg" data-lightbox="example-set"
                data-title="Poster Design"><img
                    class="example-image w-100" src="assets/img/poster_4.jpg" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 portfolio-item filter-ui">
              <div class="portfolio-img">
                <a class="example-image-link" href="assets/img/poster_2.jpg" data-lightbox="example-set"
                data-title="Poster Design"><img
                    class="example-image w-100" src="assets/img/poster_2.jpg" alt="" /></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 portfolio-item filter-ui">
              <div class="portfolio-img">
                <a class="example-image-link" href="assets/img/poster_3.jpg" data-lightbox="example-set"
                data-title="Poster Design"><img
                    class="example-image w-100" src="assets/img/poster_3.jpg" alt="" /></a>
              </div>
              
            </div>
          </div>
          </div>
          <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
            <div class="row">
              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                <div class="portfolio-img">
                <a class="example-image-link" href="assets/img/Logo_1.jpg" data-lightbox="example-set"
                data-title="Logo Design"><img
                    class="example-image w-100" src="assets/img/Logo_1.jpg" alt="" /></a>
              </div>
            </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                <div class="portfolio-img">
                  <a class="example-image-link" href="assets/img/Logo_4.jpg" data-lightbox="example-set"
                  data-title="Logo Design"><img
                      class="example-image w-100" src="assets/img/Logo_4.jpg" alt="" /></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-ui">
                  <div class="portfolio-img">
                    <a class="example-image-link" href="assets/img/Logo_3.jpg" data-lightbox="example-set"
                    data-title="Logo Design"><img
                        class="example-image w-100" src="assets/img/Logo_3.jpg" alt="" /></a>
                  </div>
              </div>

              
            </div>  
          </div>
        </div>
        <!-- End -->
<a href="https://www.behance.net/vshbhrth" class="view-more fw-bold d-flex justify-content-center my-md-3"> View More</a>
      </div>
    </section><!-- End My Portfolio Section -->



    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact Me</span>
          <h2>Contact Me</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-share-alt"></i>
                  <h3>Social Profiles</h3>
                  <div class="social-links">
                    <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
                    <!-- <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> -->
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.behance.net/vshbhrth" class="google-plus"><i class="bi bi-behance"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Mail Me</h3>
                  <p>gvishnukumar9944@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Me</h3>
                  <p>+91 9944836229</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="index.php" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" class="btn btn-warning mt-md-4 mt-3" name="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Me Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>VISHNUKUMAR G</h3>
      
      <div class="copyright">
        &copy; Copyright <strong><span>vkportfolio</span></strong>. All Rights Reserved
      </div>
      
       
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/lightbox2-2.11.3/lightbox2-2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>