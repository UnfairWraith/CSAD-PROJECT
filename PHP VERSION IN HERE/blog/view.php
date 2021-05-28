<?php

    include "logic.php";
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>#BLOG </title>
        <link rel="icon" type="image/x-icon" href="assets/img/sea.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
        
    </head>
    <script>
        function checkpass(pass){
            var inputpass = prompt("Enter password:");
            if(inputpass != pass){
                document.getElementById('err').innerHTML = '<br>Wrong Password<br><br>';  
            } else {
                document.getElementById('formSubmit').submit();
            }
        }
    </script>
    <body id="page-top" onload="newQuote()">
        <!-- Navigation-->
        
        <nav class="navbar navbar-expand-lg bg-darkblvck navbar-dark fixed-top " id="mainNav">
            <div class="container ">
                <a class="navbar-brand js-scroll-trigger text-white" href="#page-top">Team Ocean | BLOG</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../">HOME</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../donate/">Donate</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class="masthead bg-tint">
            
            
            <div class="container text-black">
                <div class="masthead-subheading"></div>
                <div class="masthead-heading text-uppercase" id="quote"></div>
                
                
            </div>
            <video autoplay muted loop id="myVideo">
                <source src="../assets/vid/wave2.mp4" type="video/mp4">
            </video>
            
        </header>
        
        <script>
            var lines=['Donate And Keep<br>the trash away','Donations keep<br>the trash away','Every Dollar Keeps<br>the trash away','#thetrashaway']
            
            function newQuote(){
                var randomNumber=Math.floor(Math.random()*(lines.length));
                document.getElementById('quote').innerHTML=lines[randomNumber];
            }
        </script>
        
        <!-- Services-->
        <section class="page-section bg-blvck" id="services">
            <div class="container text-porcelain">
                
                <div class="row">
                    <div class="col-md">
                    <center>
                    <h2 class="section-heading text-uppercase">Post View </h2>
                        <h3 class="section-subheading text-darkporcelain">Admire your fellow compatriot's contributions. You can make a post too.</h3>
                    </center>
                    </div>
                </div>
                
                <div class="bg-lightblvck rounded">
                <div class="row ">
                    <div class="col-lg ">
                        <div class="text-porcelain ">
                            
                            
                            
                            
                            
                            
                            
                            
                            <div class="m-4">
                                <?php foreach($query as $q){?>
        
                                <div class="bg-dark p-5 rounded-lg text-white text-center">
                                    <h1><?php echo $q['title'];?></h1>

                                    <div class="d-flex mt-2 justify-content-center align-items-center">
                                        <form method="POST" action="edit.php" id="formSubmit">           
                                            <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                                            <input type="button" onclick="checkpass(<?php echo $q['pass']?>)" class="btn btn-light btn-sm" value="Edit">
                                        </form>                  

                                    </div>

                                </div>
                                <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
                                <span id ="err"></span>  
                                <?php } ?>    

                                <a href="index.php" class="btn btn-dark">Go Home</a>
                            
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                    </div> 
                    
                </div>
                    <div class="row text-center">
                    <script
                        src="https://www.paypal.com/sdk/js?client-id=AeLPgG_vXksmwBN_bTQejDdTeNz2AHiboWpmiARGZJ1bVB9ftV1k3S8GZlpsxE9NIVdJnDlj5cOTuUBm&currency=SGD"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
                    </script>
                    
                    <div class="col-md" id="paypal-button-container"></div>
            
                    <script src="button.js"></script>
                </div>
                
                </div>
                
               
                
            
            </div>
        </section>
        

        <!-- Footer-->
        <footer class="footer py-4 bg-darkblvck">
            <div class="container text-white bg-darkblvck">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Team Ocean 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-outline-light btn-social mx-1" href="https://play.google.com/store/apps/dev?id=8294948611477283731" target="_blank"><i class="fab fa-fw fa-google-play"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/YuzuMinDev" target="_blank"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/yuzumindev/"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/YuzuMin" target="_blank"><i class="fab fa-fw fa-github"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="mailto:yuzumindev@gmail.com"><i class="fas fa-fw fa-at"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3 text-warning" href="../privacy/">Privacy Policy</a>
                        <a class="text-warning" href="../legal/">Terms and Conditions</a>
                    </div>
                </div>
            </div>
        </footer>

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