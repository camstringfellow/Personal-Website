<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <title>Cam's Work</title>  
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
        
        <header class="header-work">
            
            <?php include 'includes/nav.php'; ?>
            
        </header>
       
        <section class="work-tiles">
                <div class="row">
                    <h2>Recent Work</h2>
                </div>
                <ul class="work">
                    <li>
                        <h6>HTML / CSS / JavaScript</h6>
                        <figure class="app work-pg-app">
                            <img src="resources/img/htmlcss.png" alt="html/css">            
                        </figure>         
                    </li>
                    <li>
                        <figure class="project-list">
                            <i class="ion-chevron-right icon-small"></i>
                            <job-name>
                                <a href="http://www.jcsmemorial.org">
                                www.jcsmemorial.org
                                </a>
                            </job-name><br><br>
                            <i class="ion-chevron-right icon-small"></i>
                            <job-name>
                                <a href="http://www.camstringfellow.com">
                                www.camstringfellow.com
                                </a>
                            </job-name>
                        </figure>
                    </li>
                </ul>
                <div class="row">
                </div>
                <ul class="work">
                    <li>
                        <h6>PHP</h6>
                        <figure class="app work-pg-app">
                            <img src="resources/img/php.png" alt="C++">            
                        </figure>         
                    </li>
                    <li>
                        <figure class="project-list">
                            <i class="ion-chevron-right icon-small"></i>
                            <job-name>
                                Content Management System
                            </job-name>
                        </figure>
                    </li>
                </ul>
                <div class="row" id="python">
                </div>
                <ul class="work">
                    <li>
                        <h6>Python</h6>
                        <figure class="app work-pg-app">
                            <img src="resources/img/python1.png" alt="Python">            
                        </figure>         
                    </li>
                    <li>
                        <figure class="project-list">
                            <i class="ion-chevron-right icon-small"></i>
                            <job-name>
                                Augmented Reality Face Filters
                            </job-name><br><br>
                        </figure>
                    </li>
                </ul>
                <div class="row">
                </div>
                <ul class="work">
                    <li>
                        <h6>Swift</h6>
                        <figure class="app work-pg-app">
                            <img src="resources/img/swift.png" alt="Swift">            
                        </figure>         
                    </li>
                    <li>
                        <figure class="project-list">
                            <i class="ion-chevron-right icon-small"></i>
                            <job-name>
                                Jack The Giant
                            </job-name>
                            <br><br>
                            <i class="ion-chevron-right icon-small"></i>
                            <job-name>
                                Lee Street Network
                            </job-name>
                        </figure>
                    </li>
                </ul>

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