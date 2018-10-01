<!DOCTYPE html>
<html lang="en">
    
    
    <head>
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <title>About Cam</title>  
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
        <header class="header-about">
            <?php include 'includes/nav.php'; ?>
        </header>
    
        <headshot><img src="resources/img/Cam.JPG"></headshot>
        
        <section class="about-me">
            <div class="row">
                <h2>Introduction</h2>
            </div>
            <div class="row about-position">
                <about-text>My name is Cameron Stringfellow and I live in Columbia, South Carolina working as a graphic designer for Clarke and Company Benefits. I received my Associate of Science degree in Computer Science after two years at Midlands Technical College, and then attended the University of South Carolina for three years. 
                <br><br>
                This past Spring I completed a Web Developer internship at Chernoff Newman, a local advertising and marketing company, doing WordPress theme and plugin development. 
                <br><br>
                Although I am no longer working at this internship, I have continued to take online classes through Udemy and Udacity to further education on WordPress development. Along with a few other courses learning Angular and NodeJS.  
                <br><br>
                I am currently at Clarke & Company working part-time as a graphic designer, where I utilize tools in the Adobe Creative Suite to create web page designs, brochures, multimedia presentations, and promotional products to be used in company products. 
                <br><br>
                During my spare time I enjoy playing sports, video production, repairing phones, Carolina football, and spending time at the beach. I am also a counselor at Camp Kemo, which is a weeklong summer camp for patients ages 5–18 with cancer and their siblings.
                <br><br>
                Recently, I have been doing some freelance work for a few different clients including Epiphany Preschool and my brothers memorial site, JCS Memorial. Most of my work has been done in HTML, CSS, JavaScript, PHP, and Python. In the past, I've enjoyed working with many clients that were pleased with my work. Some of my own personal coding projects include areas of work in a CMS system, AR face filters, and an iOS game. 
                </about-text>
            </div>
        </section>
        
        <section class="about-me-section">
            <div class="row">
                <div class="resume">
                    <a class="btn btn-full" href="http://www.camstringfellow.com/Stringfellow-Resume-2018.pdf">View My Resume</a>
                </div>
            </div>  
            <div class="row about-title">
                <h2>Experience</h2>
            </div>
            <div class="row about-position">
                <div class="col span-1-of-2 exp-box">
                    <h6>Work</h6>
                    <div class="experience">
                        <about-text> 
                            <job-name>Chernoff Newman</job-name>
                            <p>Software Dev Intern (Jan 2018 - May 2018)</p>
                            _________________________________________<br><br>
                            <job-name>Clarke & Company Benefits</job-name>
                            <p>Graphic Designer (May 2016 - Present)</p>
                            _________________________________________<br><br>
                            <job-name>CTS Productions, LLC</job-name>
                            <p>President (Jul 2009 - Present)</p>
                            _________________________________________<br><br>
                            <job-name>Verve Interiors</job-name>
                            <p>Intern (May 2012 - Aug 2013)</p>
                            _________________________________________<br><br>
                        </about-text>
                    </div>
                </div>
                <div class="col span-1-of-2 exp-box">
                    <h6>Community</h6>
                    <div class="experience">
                        <about-text>
                            <job-name>Camp Kemo Counselor</job-name>
                            <p>2012 - Present</p>                            
                            _________________________________________<br><br>
                            <job-name>Sigma Alpha Epsilon Philanthropy Chair</job-name>
                            <p>2016 - 2017</p>
                            _________________________________________<br><br>
                            <job-name>St. Baldrick Participant</job-name>
                            <p>2016</p>
                            _________________________________________<br><br>
                            <job-name>Northeast Presbyterian Church Volunteer</job-name>
                            <p>2014 - 2015</p>
                            _________________________________________
                        </about-text>
                    </div>         
                </div>
            </div>
        </section>
    
       <section class="about-me-section">
            <div class="row about-title">
                <h2>CTS Productions, LLC</h2>
            </div>
            <div class="row about-position popuptext">
                <about-text>I established CTS Productions, LLC in 2009 as a business venture utilizing my expertise in video production and graphic design combined with my programming skills to create digital advertisements and promotional spots for private and industrial use.</about-text>
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
