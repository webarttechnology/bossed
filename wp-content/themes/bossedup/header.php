
<!doctype html>
<html lang="en">

<head>
    
    <!-- favicon -->
    <link rel="icon" type="image" href="<?php echo get_template_directory_uri(); ?>/assets/image/header-logo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- google-font -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100&family=Josefin+Sans:wght@200;300;400&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
   <!-- aos -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- font-awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <!--stellarnav -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/stellarnav.min.css" rel="stylesheet">
    <!-- responsive-css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header-part" id="side-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-3">
                    <div class="logo">
                        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/header-logo.png" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-9 col-9">
                    <div class="stellarnav">
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#business">Our Service</a></li>
                            <li><a href="#brokers">For Brokers</a></li>
                            <li><a href="#resources">Resources</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                            <li class="get-button"><a href="#" class="get">Get Funding</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>