<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>#SAVEMYWORLD </title>
        <link rel="icon" type="image/x-icon" href="assets/img/sea.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaYpHKsZrKcXxiAxVjRmhr9kBbH14Czyg&callback=initMap&libraries=&v=weekly"
            defer
        ></script>
        <script>
            // Initialize and add the map
            function initMap() {
                // The location of Uluru
                const uluru = {lat: 40.3399, lng: 127.5101};
                const uluru0 = {lat: 1.3521, lng: 103.8198};
                // The map, centered at Uluru
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 2,
                    center: uluru,
                });
                // The marker, positioned at Uluru
                const marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                });
                const marker0 = new google.maps.Marker({
                    position: uluru0,
                    map: map,
                });
            }
        </script>
    </head>
    <body id="page-top" onload="newQuote()">
        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg bg-darkblvck navbar-dark fixed-top " id="mainNav">
            <div class="container ">
                <a class="navbar-brand js-scroll-trigger text-white" href="#page-top">Team Ocean</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">What We Do</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Our Work</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Our Story</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Our Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Find Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">

            </div>
        </nav>
        <div style="padding:90px 0px 5px 0px; background-color:#F50000; font-size: 23px; text-align: center">
            <marquee behavior="alternate" class="text-uppercase text-porcelain">
                <?php
                include 'server.php';
                $sql = "SELECT * FROM news ORDER BY news_id DESC";

                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo " news: " . $row["news_txt"];
                
                $conn->close(); 
                ?>              
            </marquee>
        </div>

        <!-- Masthead-->
        <header class="masthead bg-tint">

            <div class="container text-black">
                <div class="masthead-subheading"></div>
                <div class="masthead-heading text-uppercase" id="quote"></div>
                <a class="btn btn-primary btn-xl text-uppercase text-blvck js-scroll-trigger" href="/donate/" target="_blank">Donate Now</a>

            </div>
            <video autoplay muted loop id="myVideo">
                <source src="assets/vid/wave2.mp4" type="video/mp4">
            </video>

        </header>

        <script>
            var lines = ['A dollar a day keeps <br>the trash away', 'A can a day keeps <br>the trash away', 'Save the turtles keep <br>the trash away', 'A can a day keeps <br>the trash away', 'Our employees keep<br>the trash away']

            function newQuote() {
                var randomNumber = Math.floor(Math.random() * (lines.length));
                document.getElementById('quote').innerHTML = lines[randomNumber];
            }
        </script>

        <!-- Services-->
        <section class="page-section bg-darkblvck" id="services">
            <div class="container text-porcelain">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">What We Do</h2>
                    <h3 class="section-subheading text-darkporcelain">It's not who we are underneath, but what we do that defines us</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-trash fa-stack-1x fa-inverse icon-dark "></i>
                        </span>
                        <h4 class="my-3">We Clean</h4>
                        <p class="text-darkporcelain">With the help of our employees and volunteers. For a dollar, we get a can out of the sea. Of course we also clean beaches and water bodies</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-recycle fa-stack-1x fa-inverse icon-dark"></i>
                        </span>
                        <h4 class="my-3">We Recycle</h4>
                        <p class="text-darkporcelain">After the trash is collected it is processed at our recycling facility, where it is sort and recycled to be reused.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-book-open fa-stack-1x fa-inverse icon-dark"></i>
                        </span>
                        <h4 class="my-3">We Educate</h4>
                        <p class="text-darkporcelain">To spread awareness of the state our oceans are in to our future generations, we host talks shows at events, and schools for free.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <center>
                            <a class="btn btn-primary btn-xl text-uppercase" href="about-teamocean/" target="_blank">More About Us</a>
                        </center>
                    </div>
                </div>

            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-image4" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-porcelain">Our Work</h2>
                    <h3 class="section-subheading text-darkporcelain">Making the world a cleaner place, one sea at a time.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/mumbai_cleaning_2.jfif" alt="" />
                            </a>
                            <div class="portfolio-caption bg-blvck">
                                <div class="portfolio-caption-heading text-porcelain">Mumbai</div>
                                <div class="portfolio-caption-subheading text-darkporcelain">Our 1st Ocean Cleanup</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item ">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/beach_cleaning_1.png" alt="" />
                            </a>
                            <div class="portfolio-caption bg-blvck">
                                <div class="portfolio-caption-heading text-porcelain">Baltic Sea</div>
                                <div class="portfolio-caption-subheading text-darkporcelain">A Massive Success</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 ">
                        <div class="portfolio-item ">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/kingston_harbour_cleaning.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption bg-blvck">
                                <div class="portfolio-caption-heading text-porcelain">Kingston Harbour</div>
                                <div class="portfolio-caption-subheading text-darkporcelain">Our Favourite Cleanup</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section bg-blvck" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-porcelain">Our Story</h2>
                    <h3 class="section-subheading text-darkporcelain">A joke that saved oceans</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading text-porcelain">
                                <h4>March 2021</h4>
                                <h4 class="subheading">Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-darkporcelain">It started as a joke to make our Year 2 school project a real thing. Since we already had a website, mobile app and prototype robot to make this possible.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading text-porcelain">
                                <h4>June 2021</h4>
                                <h4 class="subheading">A Company is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-darkporcelain">Our joke about  went too far causing our company to be officially registered for commercial waste collection.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading text-porcelain">
                                <h4>October 2022</h4>
                                <h4 class="subheading">A Massive Success</h4>
                            </div>
                            <div class="timeline-body"><p class="text-darkporcelain"> With the help from our team, the Baltic Sea which was one of the most polluted seas in the world is officially pollution free. </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading text-porcelain">
                                <h4>December 2024</h4>
                                <h4 class="subheading">Overseas Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-darkporcelain">We set up our 1st recycling facility in China to recycle waste and resell the raw materials colleected from the process.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4 class="text-black">
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-image3" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-porcelain">Our Founding Team</h2>
                    <h3 class="section-subheading text-darkporcelain">The people that took a joke too far</h3>
                </div>
                <div class="row bg-blvck rounded-pill2">
                    <div class="col-lg-3 bg-blvck rounded-pill2">
                        <div class="team-member text-porcelain">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.png" alt="" />
                            <h4>Ho Yuanxin</h4>
                            <p class="text-darkporcelain">P1902314</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 bg-blvck rounded-pill2">
                        <div class="team-member text-porcelain">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jfif" alt="" />
                            <h4>Jarren San</h4>
                            <p class="text-darkporcelain">P1923629</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 bg-blvck rounded-pill2">
                        <div class="team-member text-porcelain">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jfif" alt="" />
                            <h4>Ong Jin Hui</h4>
                            <p class="text-darkporcelain">P1923504</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3  bg-blvck rounded-pill2">
                        <div class="team-member text-porcelain">
                            <img class="mx-auto rounded-circle" src="assets/img/team/4.jfif" alt="" />
                            <h4>Tok Xi Quan</h4>
                            <p class="text-darkporcelain">P1923814</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5 bg-blvck">
            <div class="container ">
                <div class="row">
                    <div class="col-md">
                        <h3 class="section-heading text-uppercase text-center text-porcelain">Our Sponsors</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.sp.edu.sg/"><img class="img-fluid d-block mx-auto" src="assets/img/logos/sp-logo.png" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.razer.com/sg-en"><img class="img-fluid d-block mx-auto" src="assets/img/logos/razer2.png" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.coca-colacompany.com/"><img class="img-fluid d-block mx-auto" src="assets/img/logos/cocacola2.png" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.nea.gov.sg/"><img class="img-fluid d-block mx-auto" src="assets/img/logos/nea.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact-->
        <section class="page-section blvck" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-porcelain">Find Us</h2>
                    <h3 class="section-subheading text-darkporcelain">Visit our
                        <a href="faq/" target="_blank" class="text-warning">FAQ</a> section or Contact Us</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate" target="hidden_iframe"  onsubmit="submitted = true;" action="https://docs.google.com/forms/d/e/1FAIpQLSfkrugZcnaiVc65gNX27Xd83ioWW5mjtHbTqfsNYhd10FYYsA/formResponse?">
                    <div class="row align-items-stretch mb-5 text-porcelain">
                        <div class="col-md-6">
                            <div id="map" class="col" ></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control bg-darkblvck text-porcelain" name="entry.2085902350" id="entry.2085902350" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control bg-darkblvck text-porcelain" name="entry.566622888" id="entry.566622888" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control bg-darkblvck text-porcelain" name="entry.841402035" id="entry.841402035" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <textarea class="form-control bg-darkblvck text-porcelain" name="entry.644521422" id="entry.644521422" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success">
                            <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" value="submit">Send Message</button>
                        </div>
                    </div>
                </form>

                <iframe name="hidden_iframe" id="hidden_iframe" style="display: none;" onload="if (submitted) {
                        }"></iframe>

                <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

                <script type="text/javascript">
                    var submitted = false;
                </script>

                <script type="text/javascript">
                    $('#contactForm').on('submit', function (e) {
                        alert("Your submission has been processed. Thank you for your input. We will get back to you as soon as possible.")
                    });
                </script>

            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4 bg-darkblvck">
            <div class="container text-white bg-darkblvck">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Team Ocean 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">

                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/YuzuMinDev" target="_blank"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/yuzumindev/"><i class="fab fa-fw fa-instagram"></i></a>

                        <a class="btn btn-outline-light btn-social mx-1" href="mailto:yuzumindev@gmail.com"><i class="fas fa-fw fa-at"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3 text-warning" href="privacy/">Privacy Policy</a>
                        <a class="text-warning" href="legal/">Terms and Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-blvck">
                    <div class="close-modal bg-primary" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase text-white">Mumbai</h2>
                                    <p class="item-intro text-porcelain">Our 1st Ocean Cleanup</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/mumbai_cleaning_2_Large.jfif" alt="" />
                                    <p class="text-white"></p>
                                    <ul class="list-inline text-white">
                                        <li>Status: Completed</li>
                                        <li>Date: 15 October 2021</li>
                                        <li>Category: Ocean Cleanup</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-blvck">
                    <div class="close-modal bg-primary" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase text-white">Baltic Sea</h2>
                                    <p class="item-intro text-porcelain">A Massive Success</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/beach_cleaning_Large.png" alt="" />
                                    <p class="text-white"></p>
                                    <ul class="list-inline text-white">
                                        <li>Status: Completed</li>
                                        <li>Date: 23 October 2022</li>
                                        <li>Category: Ocean Cleanup</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-blvck">
                    <div class="close-modal bg-primary" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase text-white">Kingston Harbour</h2>
                                    <p class="item-intro text-porcelain">Our Favourite Cleanup</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/kingston_harbour_cleaning_Large.jpg" alt="" />
                                    <p class="text-white"></p>
                                    <ul class="list-inline text-white">
                                        <li>Status: Completed</li>
                                        <li>Date: 15 June 2024</li>
                                        <li>Category: Ocean Cleanup</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
