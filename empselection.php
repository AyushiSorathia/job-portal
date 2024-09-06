<!DOCTYPE html>
<html lang="en">
<?php
include 'constants/check-login.php';
?>
<head>
    <link rel="dns-prefetch" href="//schema.org">
    <link rel="dns-prefetch" href="//facebook.com">
    <link rel="dns-prefetch" href="//linkedin.com">
    <link rel="dns-prefetch" href="//twitter.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name=viewport>
    <meta name=csrf-token content="CFUqVZj7aXUvcV0EuoQIQLOnX5iFhTzrcFR9GgH4">
    <style>
        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <style>
        :root {
            --primary-color: #3C65F5;
            --primary-color-hover: #b4c0e0;
            --secondary-color: #05264E;
            --border-color-2: #E0E6F7;
            --primary-font: 'Plus Jakarta Sans', sans-serif;
            --primary-color-rgb: 60, 101, 245;
        }
    </style>
    <title>Job Portal</title>
    <meta name=description content="JobBox is a neat, clean and professional job board website script for your organization. It’s easy to build a complete Job Board site with JobBox script.">
    <meta name=robots content="index, follow">
    <meta property="og:site_name" content="JobBox - Laravel Job Board Script">
    <meta property="og:title" content="JobBox - Laravel Job Board Script">
    <meta property="og:description" content="JobBox is a neat, clean and professional job board website script for your organization. It’s easy to build a complete Job Board site with JobBox script.">
    <meta property="og:type" content="article">
    <meta name=twitter:title content="JobBox - Laravel Job Board Script">
    <meta name=twitter:description content="JobBox is a neat, clean and professional job board website script for your organization. It’s easy to build a complete Job Board site with JobBox script.">
    <link href="" rel="shortcut icon">
    <script type=application/ld+json>
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Job Portal",
        }
    </script>
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\language-public.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\content-styles.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\bootstrap-main.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\style.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\animate-min.css">
    <script type=application/ld+json>
        {
            "@context": "https:\/\/schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
            }, {
                "@type": "ListItem",
                "position": 2,
                "name": "Homepage 1",
            }]
        }
    </script>
    <script type=application/ld+json>
        {
            "@context": "https:\/\/schema.org",
            "@type": "Organization",
            "name": "JobBox - Laravel Job Board Script",
            "logo": {
                "@type": "ImageObject",
            }
        }
    </script>
    
    
    <style>
        .page_speed_1974690106 {
            display: none;
        }

        .page_speed_1249088768 {
            height: 16px
        }
        .page_speed_1246361835 {
            background-image: url(indexx/storage/general/background.jpg)
        }

        .page_speed_80917686 {
            display: none
        }


        .page_speed_885187667 {
            background: url(indexx/storage/pages/bg-left-hiring.png) no-repeat 0 0
        }

        .page_speed_215232277 {
            background: url(indexx/storage/pages/bg-right-hiring.png) no-repeat 0 0
        }

        .page_speed_1658661178 {
            style-1
        }

        .page_speed_998426849 {
            background-image: url(indexx/storage/general/newsletter-background-image.png)
        }
    </style>
   
</head>

<body>
    <header class="header sticky-bar ">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo"><a class="d-flex" href="indexxx.php"><img alt="JobBox - Laravel Job Board Script" src=indexx\storage\avatars\cp2.png></a></div>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu">
                        <ul class="main-menu">
                            <li class=" has-children "><a href="indexxx.php"> Home <div class="arrow-down"></div></a></li>
                            <li class=" has-children "><a href="jobs.php"> Find a Job <div class="arrow-down"></div></a> </li>
                            <li class=" has-children "><a href="companies.php"> Companies <div class="arrow-down"></div></a></li>
                            <li class=" has-children "><a href="candidates.php"> Candidates <div class="arrow-down"></div></a></li>
                            <li class=" has-children "><a href="aboutus.php"> About Us <div class="arrow-down"></div></a></li>
                            <li class=" has-children "><a href="contactus.php"> Contact Us <div class="arrow-down"></div></a></li>
                            <li class=" has-children "><a href="#"> Other Pages <div class="arrow-down"></div></a>
                                <ul class="sub-menu">
                                    <li class=" "><a href="cookie-policy.php"><i class="fi fi-rr-settings"></i> Cookie Policy </a></li>
                                    <li class=" "><a href="terms.php"><i class="fi fi-rr-fingerprint"></i> Terms & Conditions </a></li>
                                    <li class=" "><a href="faqs.php"><i class="fi fi-rr-user-add"></i> FAQs </a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                <div class="header-right">
                    <div class="block-signin">
                        <?php
						if ($user_online == true) {
						print '
						    <ul class="btn btn-default btn-shadow ml-30 hover-up"> <a href="logout.php">Logout</a></li></ul>
							<a href="'.$myrole.'">Profile</a></li>';
						}else{
						print '
                            <ul class="btn btn-default btn-shadow ml-30 hover-up"> <a href="login.php">login</a></li></ul>
							<a data-toggle="modal" href="#registerModal">register</a></li>';						
						}
						?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-search mobile-header-border mb-30">
                        <form action="#"><input type=text placeholder="Search..."><i class="fi-rr-search"></i></form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <nav>
                            <ul class="mobile-menu font-heading">
                                <li class=" has-children "><a href="indexxx.php"> Home <div class="arrow-down"></div></a></li>
                                <li class=" has-children "><a href="jobs.php"> Find a Job <div class="arrow-down"></div></a> </li>
                                <li class=" has-children "><a href="companies.php"> Companies <div class="arrow-down"></div></a></li>
                                <li class=" has-children "><a href="candidates.php"> Candidates <div class="arrow-down"></div></a></li>
                                <li class=" has-children "><a href="aboutus.php"> About Us <div class="arrow-down"></div></a></li>
                                <li class=" has-children "><a href="contactus.php"> Contact Us <div class="arrow-down"></div></a></li>
                                <li class=" has-children "><a href="#"> Other Pages <div class="arrow-down"></div></a>
                                <ul class="sub-menu">
                                    <li class=" "><a href="cookie-policy.php"><i class="fi fi-rr-settings"></i> Cookie Policy </a></li>
                                    <li class=" "><a href="terms.php"><i class="fi fi-rr-fingerprint"></i> Terms & Conditions </a></li>
                                    <li class=" "><a href="faqs.php"><i class="fi fi-rr-user-add"></i> FAQs </a></li>
                                </ul>
                            </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                    <div class="block-signin">
                        <?php
						if ($user_online == true) {
						print '
						    <ul class="btn btn-default btn-shadow ml-30 hover-up"> <a href="logout.php">Logout</a></li></ul>
							<a href="'.$myrole.'">Profile</a></li>';
						}else{
						print '
                            <ul class="btn btn-default btn-shadow ml-30 hover-up"> <a href="login.php">login</a></li></ul>
							<a data-toggle="modal" href="#registerModal">register</a></li>';						
						}
						?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <main>
    <main class="main">
        <section class="section-box">
            <div class="breadcrumb-cover bg-img-about page_speed_1246361835">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="mb-10">Applicant Form</h2>
                            <p class="font-lg color-text-paragraph-2">Get the latest news, updates and tips</p>
                        </div>
                        <div class="col-lg-6 text-md-end">
                            <ul class="breadcrumbs mt-40 ">
                                <li><a href="indexxx.php"><span class="fi-rr-home icon-home"></span>
                                        Home </a></li>
                                <li>Form</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



<body>
<div class="container">
        <div class="col-lg-16 mb-40"><center><span class="font-md color-brand-2 mt-20 d-inline-block">Employeement Status Form</span>
                                <h2 class="mt-5 mb-10">Employee Selection Form</Section></h2>
                                <p class="font-md color-text-paragraph-2">For Applicant Is Selected Or Rejected Information Form</p></br></center>
                        <div class="card-body">
    <div class="main">
    <div class="mail-area">
        <form method="post" action="empsendmail.php" enctype="multipart/form-data">
        <h5><a>Your Company Name<input type="text" name="cpname" class="input" placeholder="Company Name" required></br></br></a></h5>
        <h5><a>Your Company Email<input type="email" name="cpemail" class="input" placeholder="Company Email Id" required></br></br></a></h5>
        <h5><a>Applicant Name<input type="text" name="emname" class="input" placeholder="Applicant Name" required></br></br></a></h5>
        <h5><a>Applicant Email<input type="email" name="ememail" class="input" placeholder="Applicant Email Id" required></br></br></a></h5>
        <h5><a>Subject<input type="text" name="subject" class="input" placeholder="Selected / Rejected" required></br></br></a></h5>

        <h5><a>Message<textarea class="input" name="message" placeholder="If Selected, then write Down the Interview Time." required></textarea></br></br></a></h5>
        <h5><a>Upload Employee Resume</br><input type="file" name="attachment" class="up"></br></br></a></h5>
            <!--<input class="input btn" type="submit" name="send" value="Send">-->
            <center><input type="submit" class="submit btn btn-send-message" name="send" class="send-btn" value="Send Message"></center>

        </form>
    </div>
    </div>
</body>



<footer class="footer mt-50">
        <div class="container">
            <div class="row">
                <div class="footer-col-1 col-md-3 col-sm-12"><a href="indexxx.php"
                        aria-label="careerplus - Laravel Job Board Script"><img alt="" src=""></a>
                    <div class="mt-20 mb-20 font-xs color-text-paragraph-2"> CareerPlus is the heart of the design community
                        and the best resource to discover and connect with designers and jobs worldwide. </div>
                    <div class="footer-social"><a class="icon-socials" title="Facebook" href="https://facebook.com"
                            target="_blank"><img src=indexx\storage\socials\facebook.png
                                alt="Facebook"></a><a class="icon-socials" title="Linkedin" href="https://linkedin.com"
                            target="_blank"><img src=indexx\storage\socials\linkedin.png
                                alt="Linkedin"></a><a class="icon-socials" title="Twitter" href="https://twitter.com"
                            target="_blank"><img src=indexx\storage\socials\twitter.png
                                alt="Twitter"></a></div>
                </div>
                <div class="footer-col-2 col-md-2 col-xs-6">
                    <div class="h6 mb-20">Resources</div>
                    <ul class="menu-footer">
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="contactus.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col-2 col-md-2 col-xs-6">
                    <div class="h6 mb-20">Community</div>
                    <ul class="menu-footer">
                        <li><a href="aboutus.php">Feature</a></li>
                        <li><a href="#">Credit</a></li>
                        <li><a href="faqs.php">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col-2 col-md-2 col-xs-6">
                    <div class="h6 mb-20">More</div>
                    <ul class="menu-footer">
                        <li><a href="cookie-policy.php">Cookie Policy</a></li>
                        <li><a href="terms.php">Terms</a></li>
                        <li><a href="faqs.php">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col-6 col-md-3 col-sm-12">
                    <div class="h6 mb-20">Download App</div>
                    <p class="color-text-paragraph-2 font-xs"></p>
                    <div class="mt-15"><a class="mr-5" href="#"><img
                                src=indexx\storage\general\app-store.png alt="App Store"></a><a
                            class="mr-5" href="#"><img src=indexx\storage\general\android.png
                                alt="Google Play"></a></div>
                </div>
            </div>
            <div class="footer-bottom mt-50">
                <div class="row">
                    <div class="col-md-6"><span class="font-xs color-text-paragraph"> ©2023 Archi Elite JSC. All right
                            reserved. </span></div>
                    
                </div>
            </div>
        </div>
    </footer>
    <script>
        window.currencies = {
            "display_big_money": null,
            "billion": "billion",
            "million": "million",
            "is_prefix_symbol": 1,
            "symbol": "$",
            "title": "USD",
            "decimal_separator": ".",
            "thousands_separator": ",",
            "number_after_dot": 0,
            "show_symbol_or_title": true
        };
    </script>
    <script src=indexx\themes\jobbox\plugins\wow.js></script>
    <script src=indexx\themes\jobbox\plugins\modernizr-3.6.0.min.js></script>
    <script src=indexx\themes\jobbox\plugins\jquery-3.6.3.min.js></script>
    <script src=indexx\themes\jobbox\plugins\jquery-migrate-3.3.0.min.js></script>
    <script src=indexx\themes\jobbox\plugins\bootstrap\bootstrap.bundle.min.js></script>
    <script src=indexx\themes\jobbox\plugins\waypoints.js></script>
    <script src=indexx\themes\jobbox\plugins\magnific-popup.js></script>
    <script src=indexx\themes\jobbox\plugins\perfect-scrollbar.min.js></script>
    <script src=indexx\themes\jobbox\plugins\select2.min.js></script>
    <script src=indexx\themes\jobbox\plugins\isotope.js></script>
    <script src=indexx\themes\jobbox\plugins\scrollup.js></script>
    <script src=indexx\themes\jobbox\plugins\swiper-bundle.min.js></script>
    <script src=indexx\themes\jobbox\plugins\counterup.js></script>
    <script src=indexx\themes\jobbox\js\main.js?v=1.11.1></script>
    <script src=indexx\themes\jobbox\js\script.js?v=1.11.1></script>
    <script src=indexx\themes\jobbox\js\backend.js?v=1.11.1></script>
    <script src=indexx\vendor\core\plugins\language\js\language-public.js?v=2.2.0></script>
    <script async defer src=https://www.googletagmanager.com/gtag/js?id=G-R7X6YBEYYT></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-R7X6YBEYYT');
    </script>
</body>

</html>