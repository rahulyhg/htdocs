<?php 
    include "global/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Regna</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!--==========================
         Header
         ============================-->
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <a href="#hero"><img src="img/logo.png" alt="" title="" >
                </a>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!--<h1><a href="#hero">Regna</a></h1>-->
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <!--li class="!menu-active"><a href="#hero">Acasa</a></li-->
                    <li><a href="/Medici/doctor.php">Medici</a></li>
                    <li class="menu-has-children"><a href="">Informatii</a>
                         <ul>
                             <li><a href="#about">Despre noi</a></li>
                             <li><a href="#services">Servicii</a></li>
                             <li><a href="#portfolio">Educatie medicala</a></li>
                             <li><a href="#team">Echipa</a></li>
                             <li><a href="#contact">Contact</a></li>
                         </ul>
                    </li>
                    <?php if($login_session!='') { ?>
                    <li class="menu-has-children"><a href="/Account/MyProfile.php"><?php echo $login_session; ?></a>
                    <?php } else { ?>
                    <li class="menu-has-children"><a href="/Account/Login.php">Login</a>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>
    <!--==========================
         Hero Section
         ============================-->
    <section id="hero">
        <div class="hero-container">
            <h1>REGNA iti ureaza bun venit!</h1>
            <h2>Suntem aici zi de zi ca sa stim ca esti bine.</h2>
            <!--<a href="#about" class="btn-get-started">Get Started</a>-->
        </div>
    </section>
    <main id="main">
        <!--==========================
            About Us Section
            ============================-->
        <section id="about">
            <div class="container">
                <div class="row about-container">
                    <div class="col-lg-6 content order-lg-1 order-2">
                        <h2 class="title">Cateva cuvinte despre noi</h2>
                        <div class="icon-box wow fadeInUp">
                            <div class="icon"><i class="fa fa-user-md"></i></div>
                            <h4 class="title"><a href="">Medici</a></h4>
                            <p class="description">Echipa noastră de medici este sufletul Reţelei private de sănătate REGNA. Pregătirea şi implicarea lor neobosită, atenţia acordată fiecărui pacient şi performanţele medicale pe care le-au atins sunt garanţii ale excelenţei pe care o promovăm.</p>
                        </div>
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-medkit"></i></div>
                            <h4 class="title"><a href="">Laborator</a></h4>
                            <p class="description"> Priceperea specialistilor nostri se imbina cu precizia celei mai performante aparaturi din Romania. Laboratorul Central REGNA are eticheta Roche Diagnostic pentru linia de biochimie si imunologie si e un reper tehnologic pentru sistemul medical romanesc. </p>
                        </div>
                        <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                            <h4 class="title"><a href="">Abonamente si pachete</a></h4>
                            <p class="description">Asigură-te că ai mereu acces la cele mai bune servicii medicale, contra unei sume avantajoase. Alege-ţi abonamentul care acoperă cel mai bine nevoile tale de sănătate şi bucură-te de privilegiile dedicate abonaţilor Rețelei de sănătate REGNA</p>
                        </div>
                    </div>
                    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
                </div>
            </div>
        </section>
        <!--==========================
            Services Section
            ============================-->
        <section id="services">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <h3 class="section-title">Services</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box">
                            <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box">
                            <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
                            <h4 class="title"><a href="">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box">
                            <div class="icon"><a href=""><i class="fa fa-paper-plane"></i></a></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box">
                            <div class="icon"><a href=""><i class="fa fa-photo"></i></a></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box">
                            <div class="icon"><a href=""><i class="fa fa-road"></i></a></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box">
                            <div class="icon"><a href=""><i class="fa fa-shopping-bag"></i></a></div>
                            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==========================
            Call To Action Section
            ============================-->
        <section id="call-to-action">
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">Call To Action</h3>
                        <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>
            </div>
        </section>
        <!--==========================
            Aritcles Section
            ============================-->
        <section id="portfolio">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h3 class="section-title">Educatie medicala</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">Articole medicale</li>
                            <li data-filter=".filter-app">Totul despre nutritie</li>
                            <li data-filter=".filter-card">Totul despre sarcina</li>
                            <li data-filter=".filter-logo">Infografice</li>
                            <li data-filter=".filter-web">Traieste fara fumat</li>
                        </ul>
                    </div>
                </div>
                <div class="row" id="portfolio-wrapper">
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <a href="/Articles/article1.php">
                            <img src="image/nutritie1.jpg" alt="">
                            <div class="details">
                                <h4>Nutritie</h4>
                                <span>24 de imbucaturi perfect</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <a href="">
                            <img src="img/portfolio/web2.jpg" alt="">
                            <div class="details">
                                <h4>Tutun</h4>
                                <span>Tutunul este o amenintare la adresa fiecarei persoane</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <a href="">
                            <img src="image/nutritie2.jpg" alt="">
                            <div class="details">
                                <h4>Nutritie</h4>
                                <span>Stii cum trebuie consumata mierea?</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <a href="">
                            <img src="image/sarcina1.jpg" alt="">
                            <div class="details">
                                <h4>Sarcina</h4>
                                <span>Serviciul si sarcina:ce poti face si ce nu</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <a href="">
                            <img src="image/sarcina3.jpg" alt="">
                            <div class="details">
                                <h4>Sarcina</h4>
                                <span>Obezitatea in sarcina: intelege riscurile</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <a href="">
                            <img src="img/portfolio/web3.jpg" alt="">
                            <div class="details">
                                <h4>Tutun</h4>
                                <span>Cancerul pulmonar: cel mai mortal cancer din lume</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                        <a href="">
                            <img src="image/sarcina2.jpg" alt="">
                            <div class="details">
                                <h4>Sarcina</h4>
                                <span>Care sunt cele mai bune pozitii de somn?</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <a href="">
                            <img src="image/nutritie3.jpg" alt="">
                            <div class="details">
                                <h4>Nutritie</h4>
                                <span>Lista de cumparaturi vara</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
                        <a href="">
                            <img src="img/portfolio/logo1.jpg" alt="">
                            <div class="details">
                                <h4>Infografice</h4>
                                <span>ABC-ul juniorului</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
                        <a href="">
                            <img src="img/portfolio/logo3.jpg" alt="">
                            <div class="details">
                                <h4>Infografice</h4>
                                <span>De ce apare sughitul?</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                        <a href="">
                            <img src="img/portfolio/web1.jpg" alt="">
                            <div class="details">
                                <h4>Tutun</h4>
                                <span>Stii de ce fumezi?</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
                        <a href="">
                            <img src="img/portfolio/logo2.jpg" alt="">
                            <div class="details">
                                <h4>Infografice</h4>
                                <span>Protectia solara la copii</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--==========================
            Team Section
            ============================-->
        <section id="team">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h3 class="section-title">Team</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
                            <h4>Sarah Jhinson</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-4.jpg" alt=""></div>
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==========================
            Contact Section
            ============================-->
        <section id="contact">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h3 class="section-title">Contact</h3>
                </div>
            </div>
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="info">
                            <div>
                                <i class="fa fa-map-marker"></i>
                                <p>A108 Adam Street
                                    <br>New York, NY 535022</p>
                            </div>
                            <div>
                                <i class="fa fa-envelope"></i>
                                <p>info@example.com</p>
                            </div>
                            <div>
                                <i class="fa fa-phone"></i>
                                <p>+1 5589 55488 55s</p>
                            </div>
                        </div>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div class="text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--==========================
         Footer
         ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Regna</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Bootstrap Templates by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="contactform/contactform.js"></script>
    <script src="js/main.js"></script>
</body>

</html>