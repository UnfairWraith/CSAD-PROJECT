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
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="styles.css" type="text/css" rel="stylesheet">
    </head>
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
                    <h2 class="section-heading text-uppercase">Blog </h2>
                        <h3 class="section-subheading text-darkporcelain">Create a post, encourage our workers.</h3>
                    </center>
                    </div>
                </div>
                
                
                
                <div class="bg-lightblvck rounded">
                <div class="row ">
                    <div class="col-lg ">
                        <div class="text-porcelain ">
                            
                            
                            
                            
                            
                            
                            
                            
                            <div class="m-4">
                                <div class="container mt-5">

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php }?>
        <?php } ?>

        <!-- Create a new Post button -->
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark" style="background:#0A1E8C;color:white">+ Create a new post</a>
        </div>

        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body" style="background:#0A1E8C">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                            <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
            
        </div>
       
    </div>
                            
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
        <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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