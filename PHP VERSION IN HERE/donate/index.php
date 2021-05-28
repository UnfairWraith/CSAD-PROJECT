<!DOCTYPE html>
<?php
    include '../server.php';
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>#DONATE </title>
        <link rel="icon" type="image/x-icon" href="assets/img/sea.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- AJAX code -->
        <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        

    </head>
    
    
    <body id="page-top" onload="newQuote()">
        <script src="cookie.js" type="text/javascript"></script>
        <!-- Navigation-->
        
        <nav class="navbar navbar-expand-lg bg-darkblvck navbar-dark fixed-top " id="mainNav">
            <div class="container ">
                <a class="navbar-brand js-scroll-trigger text-white" href="#page-top">Team Ocean | Donate</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Donate</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Impact</a></li>
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
            
            function getCookie(cname) {
                var name = cname + "=";
                var ca = document.cookie.split(';');
                for(var i = 0; i < ca.length; i++) {
                  var c = ca[i];
                  while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                  }
                  if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                  }
                }
                return "";
              }
              
              function checkCookie() {
                document.getElementById('name').value = getCookie("username");
                }

            function newQuote(){
                var randomNumber=Math.floor(Math.random()*(lines.length));
                document.getElementById('quote').innerHTML=lines[randomNumber];
                checkCookie();

            }
        </script>
        
        <!-- Services-->
        <section class="page-section bg-darkblvck" id="services">
            <div class="container text-porcelain">
                
                <div class="row">
                    <div class="col-md">
                    <center>
                    <h2 class="section-heading text-uppercase">Donate </h2>
                    </center>
                    </div>
                </div>
                
                <div class="bg-blvck rounded">
                <div class="row ">
                    <div class="col-lg ">
                        <div class="text-porcelain ">
                            
                            
                            <div class="m-4 text-center">
                            <h5>
                                Everyone come and donate
                                <br>
                                To the oceans who need it most<br>
                                Give beautiful things<br>
                                To the oceans of this world<br>
                                <br>

                                You can help one another<br>
                                Watch and you will see<br>
                                Everyone can help<br>
                                That includes me<br>
                                <br>

                                So help! Lend a hand<br>
                                To our oceans who need it<br>
                                Show them you care<br>
                                The candles been lit<br>
                                </h5>
                            </div>
                        </div>
                    </div> 
                    
                </div>
                    <div class="row text-center">
                        
                        <div class="text-porcelain m-4 text-center col-lg">
                            <div id="smart-button-container">
                                <div id="smart-button-container">    
                                    <div style="text-align: center"><label for="name"> </label><h5 style="display: inline">Name: </h5>
                                        <input style="font-size:20px;" name="nameInput" type="text" id="name"></div><br>
                                    <div style="text-align: center"><label for="amount"> </label><h5 style="display: inline">SGD </h5>
                                        <input style="font-size:20px;" name="amountInput" type="number" id="amount" value=""></div>
                                    <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please enter a price</p>

                                    <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value="" ></div>
                                    <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>

                                    <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
    
                                </div>
                            </div>
                        </div>
                        
                      <script src="https://www.paypal.com/sdk/js?client-id=AeLPgG_vXksmwBN_bTQejDdTeNz2AHiboWpmiARGZJ1bVB9ftV1k3S8GZlpsxE9NIVdJnDlj5cOTuUBm&currency=SGD" data-sdk-integration-source="button-factory"></script>
                      <script src="js/paypal.js" type="text/javascript"></script>  
                    </div>
                </div>    
            </div>
        </section>
       
                
        <!-- Top Donators Grid-->
        <section class="page-section bg-image4" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-porcelain">Leaderboard</h2>
                    <h3 class="section-subheading text-porcelain">View the Top Donators from around the world!</h3>
                </div>
                <div class="bg-blvck rounded">
                <div class="row col-lg text-porcelain ">                                         
                    <div class="text-center" style="width: 100%">
                            <h5>
                                <table>
                                    <th style="width: 85%; font-size: 30px">Name</th>
                                    <th style="width: 15%; font-size: 30px">Amount</th>
                                    <?php
                                        $sql = "SELECT * FROM donation ORDER BY donation_amount DESC LIMIT 0,10";
                                        $result = $conn -> query($sql);
                                        if ($result -> num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" .$row['donation_name']. "</td>";
                                                echo "<td>" .$row['donation_amount']. "</td>";
                                                echo "</tr>";
                                            }
                                        }
                                        $conn->close();
                                    ?>
                                </table>
                                </h5>
                            </div>
                        </div>
                    </div>           
                </div>
            <br><br>
                    
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-porcelain">Impact</h2>
                    <h3 class="section-subheading text-porcelain">See how your donations helped the environment</h3>
                </div>
                <div class="bg-blvck rounded">
                <div class="row ">
                    <div class="col-lg ">
                        <div class="text-porcelain ">
                            
                            
                            <div class="m-4 text-center">
                            <h5>
                                Project : Baltic Sea Cleanup
                                <br>
                                Funds Raised : USD $ 1 Million
                                <br><br>
                                Project : Mumbai Sea Cleanup
                                <br>
                                Funds Raised : USD $ 346,555
                                <br><br>
                                Project : Yellow River Cleanup
                                <br>
                                Funds Raised : USD $ 177,013
                                <br><br>
                                Project : South China Sea Cleanup
                                <br>
                                Funds Raised : USD $ 271,282 
                                <br><br>
                                Project : Kingston Harbour Cleanup
                                <br>
                                Funds Raised : USD $ 334,544
                                <br><br>
                                Project : East China Cleanup
                                <br>
                                Funds Raised : USD $ 299,089
                                <br><br>
                                </h5>
                            </div>
                        </div>
                    </div> 
                    
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

