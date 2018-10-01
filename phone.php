<!DOCTYPE html>

<!------------------- IPHONE PAGE ---------------------->

<html lang="en">
    
    <head>
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <title>iPhone Repair</title>  
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
        
        <header class="header-iphone">
            
            <?php include 'includes/nav.php'; ?>
            
        </header>
        
        <section>
            
            <div class="phone-top">
                <h2>Phone Repair</h2>
            </div>
            
            <div class="phone-row">
                <form method="post" action="#" class="iphone-form">
                    <div class="row"> 
                        <div class="col span-1-of-3">
                            <label for="name">Name:</label>   
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>    
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col span-1-of-3">
                            <label for="phone">Phone number:</label>   
                        </div>
                        <div class="col span-2-of-3">
                            <input type="phone" name="phone" id="phone" placeholder="Your phone number" required>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col span-1-of-3">
                            <label for="model">iPhone:</label>   
                        </div>
                        <div class="col span-2-of-3">
                            <select name="model" id="model">
                                    <option value="5">iPhone 5</option>
                                    <option value="5c">iPhone 5C</option>
                                    <option value="5s">iPhone 5S</option>
                                    <option value="se">iPhone SE</option>
                                    <option value="6" selected>iPhone 6</option>
                                    <option value="6plus">iPhone 6 Plus</option>
                                    <option value="6s">iPhone 6S</option>
                                    <option value="6splus">iPhone 6S Plus</option>
                                    <option value="7">iPhone 7</option>
                                    <option value="7plus">iPhone 7 Plus</option>
                            </select>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col span-1-of-3">
                            <label for="color">Color:</label>   
                        </div>
                        <div class="col span-2-of-3">
                            <select name="color" id="color">
                                    <option value="white">Black</option>
                                    <option value="black">White</option>
                            </select>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col span-1-of-3">
                            <label>Describe the problem:</label>   
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="description" placeholder="Description" required></textarea>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>   
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
            
            <?php /*include 'includes/orders.php';*/ ?>
            
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