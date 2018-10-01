<!DOCTYPE html>
<html lang="en">
    <head>
          
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <title>Cam Stringfellow</title>  
        <link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="resources/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="resources/favicons/favicon-16x16.png">
        <link rel="manifest" href="resources/favicons/manifest.json">
        <link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="resources/favicons/favicon.ico">
        <meta name="msapplication-config" content="resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
    </head>
    <body>
        <header>
            
            <?php include 'includes/nav.php'; ?>
            
            <div class="welcome-text-box">
                <h1>Welcome to my site.<br>Go Cocks.</h1>
            </div> 
        </header>
            
        <section class="section-work">
                <div class="row">
                    <h2>Recent Work</h2>
                </div>
                <ul class="work">
                    <li>
                        <figure class="app">
                            <a href="work.php">
                                <img src="resources/img/pi-logo.jpg" alt="Raspberry Pi">
                            </a>
                        </figure>         
                    </li>
                    <li>
                        <figure class="app">
                            <a href="work.php">
                                <img src="resources/img/php.png" alt="PHP">
                            </a>
                        </figure>         
                    </li>
                    <li>
                        <figure class="app">
                            <a href="work.php">
                                <img src="resources/img/htmlcss.png" alt="HTML">
                            </a>
                        </figure>         
                    </li>
                </ul>
                <div class="row">
                    <div class="centered">
                        <a class="btn btn-full" href="work.php">View More</a>
                    </div>
                </div>
        </section>
    
        <section class="section-blog" id="blog">
            <div class="row">
                <h2>repair reviews</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3 blog-box">
                    <blockquote>
                        Cheaper and easier than going to a repair shop   
                        <cite><img src="resources/img/maddie.jpg" alt="maddie">Maddie Palmer</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3 blog-box">
                    <blockquote>
                        Best iPhone repair service in Columbia
                        <cite><img src="resources/img/bill.jpeg" alt="bill">Bill Patton</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3 blog-box">
                    <blockquote>
                         I've broken my phone 5 times and he's fixed all of them 
                        <cite><img src="resources/img/ben.jpg" alt="ben">Ben Spinek</cite>
                    </blockquote>
                </div>
            </div>
        </section>
        
        
        <section class="section-iphone">
            <div class="row">
                <h2>iPhone Repair</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="resources/img/brokenScreen_new.png" alt="iPhone" class="order-screen">
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="work-step">
                        <div>1</div>
                        <p>Select what type of iPhone you have. (iPhone 5/5S, iPhone 6/6S, etc.)</p>
                    </div>
                    <div class="work-step">
                        <div>2</div>
                        <p>Describe what is going wrong or select what part is broken.</p>
                    </div>
                    <div class="work-step">
                        <div>3</div>
                        <p>Click sumbit and pay for the part. Once the part arrives, come in and get it fixed!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="centered">
                    <a class="btn btn-full" href="phone.php">iPhone Repair</a>
                </div>
            </div>
        
        </section>
            
        <?php include 'includes/footer.php'; ?>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>    
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script> 
        <script src="resources/js/script.js"></script>
 
    </body>
    

</html>