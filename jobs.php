<!DOCTYPE html>
<html lang="en">
<?php
include 'constants/check-login.php';
?>
<head>
    <link rel="dns-prefetch" href="//jobbox.archielite.com">
    <link rel="dns-prefetch" href="//schema.org">
    <link rel="dns-prefetch" href="//facebook.com">
    <link rel="dns-prefetch" href="//linkedin.com">
    <link rel="dns-prefetch" href="//twitter.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name=viewport>
    <meta name=csrf-token content="hvXdRooiGtJMe2b379mRCIGACM8lpVuzqVvYVYD7">
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
    <title>Jobs</title>
    
    <link href="indexx\storage\avatars\cp3.png" rel="shortcut icon">
    <script
        type=application/ld+json>{ "@context": "https://schema.org", "@type": "WebSite", "name": "JobBox - Laravel Job Board Script", "url": ""}</script>
    <<link media="all" type=text/css rel="stylesheet" href="indexx\css\language-public.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\content-styles.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\bootstrap-main.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\style.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\animate-min.css">
    <style>
        .page_speed_1888176055 {
            display: none;
        }

        .page_speed_246847026 {
            height: 16px
        }

        .page_speed_1986265105 {
            background-image: url(indexx/storage/general/newsletter-background-image.png)
        }
    </style>
</head>

<<body>
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
    <main class="main">
        <div class="ck-content">
            <div>
                <section class="section-box">
                    <div class="banner-hero hero-2 hero-3">
                        <div class="banner-inner">
                            <div class="block-banner">
                                <h1 class="text-42 color-white wow animate__animated animate__fadeInUp"> The official
                                    <span class="color-green">IT Jobs</span> site </h1>
                                <div class="font-lg font-regular color-white mt-20 wow animate__animated animate__fadeInUp"
                                    data-wow-delay=".1s"> “CareerPlus is our first stop whenever we're hiring a PHP role.
                                    We've hired 10 PHP developers in the last few years, all thanks to JobBox.” — Andrew
                                    Hall, Elite JSC. </div>
                                <div class="form-find position-relative mt-40 wow animate__animated animate__fadeIn"
                                    data-wow-delay=".2s">
                                    <form method="GET" action="jobs.php"
                                        accept-charset="UTF-8"
                                        data-quick-search-url="jobs.php">
                                        <div class="box-industry"><select
                                                class="form-input mr-10 select-active input-industry job-category"
                                                name=job_categories[]>
                                                <option value="">Industry</option>
                                            </select></div><select class="form-input mr-10 select-location"
                                            name=location data-location-type="state">
                                            <option value="">Location</option>
                                        </select><input class="form-input input-keysearch mr-10" name=keyword value=""
                                            type=text placeholder="Your keyword...">
                                        <div class="search-btn-group"><button
                                                class="btn btn-default btn-find font-sm">Search</button><button
                                                type=button class="btn btn-default font-sm btn-advanced-filter">Advanced
                                                Filter</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="container mt-60">
                            <div class="box-swiper mt-50">
                                <div class="swiper-container swiper-group-5 swiper">
                                    <div class="swiper-wrapper pb-25 pt-5">
                                        <div class="swiper-slide hover-up"><a
                                                href="jobs.php">
                                                <div class="item-logo">
                                                    <div class="image-left"><img
                                                            src=indexx/storage/general/content.png
                                                            alt="Content Writer"></div>
                                                    <div class="text-info-right">
                                                        <h4>Content Writer</h4>
                                                        <p class="font-xs"> 26 <span>Jobs Available</span></p>
                                                    </div>
                                                </div>
                                            </a></div>
                                        <div class="swiper-slide hover-up"><a
                                                href="jobs.php">
                                                <div class="item-logo">
                                                    <div class="image-left"><img
                                                            src=indexx/storage/general/research.png
                                                            alt="Market Research"></div>
                                                    <div class="text-info-right">
                                                        <h4>Market Research</h4>
                                                        <p class="font-xs"> 12 <span>Jobs Available</span></p>
                                                    </div>
                                                </div>
                                            </a></div>
                                        </div>
                                    <div class="swiper-pagination swiper-pagination-style-border"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div>
                <section class="section-box mt-30">
                    <div class="container">
                        <div class="row row-filter">
                            <div class="col-lg-3 col-md-12 filter-section col-sm-12 col-12 sidebar-filter-mobile">
                                <div class="sidebar-shadow none-shadow mb-30">
                                    <div class="backdrop"></div>
                                    <div class="sidebar-filters sidebar-filter-mobile__inner">
                                        <form method="GET" action="jobs.php"
                                            accept-charset="UTF-8" id="jobs-filter-form"
                                            class="sidebar-filter-mobile__content"><input type=hidden name=page
                                                data-value="1"><input type=hidden name=keyword value=""><input
                                                type=hidden name=per_page><input type=hidden name=layout><input
                                                type=hidden name=sort_by>
                                            <div class="filter-block head-border mb-30">
                                                <h5> Advanced Filters <a class="link-reset"
                                                        href="jobs.php">Reset</a></h5>
                                            </div>
                                            <div class="filter-block mb-30">
                                                <div class="mb-3 select-style select-style-icon"><select
                                                        class="form-control submit-form-filter form-icons select-active select-location"
                                                        form="jobs-filter-form" id="selectCity" name=location
                                                        data-location-type="state"
                                                        data-placeholder="Select location"></select><i
                                                        class="fi-rr-marker"></i></div>
                                            </div>
                                            <div class="filter-block mb-20">
                                                <h5 class="medium-heading mb-15">Industry</h5>
                                                <div class="mb-3 ps-custom-scrollbar">
                                                    <ul class="list-checkbox">
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    class="submit-form-filter" name=job_categories[]
                                                                    form="jobs-filter-form" value="1"><span
                                                                    class="text-small">Content Writer</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">26</span></li>
                                                        
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    class="submit-form-filter" name=job_categories[]
                                                                    form="jobs-filter-form" value="10"><span
                                                                    class="text-small">Security Analyst</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">5</span></li>
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    class="submit-form-filter" name=job_categories[]
                                                                    form="jobs-filter-form" value="3"><span
                                                                    class="text-small">Marketing &amp; Sale</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">4</span></li>
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    class="submit-form-filter" name=job_categories[]
                                                                    form="jobs-filter-form" value="7"><span
                                                                    class="text-small">Human Resource</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">4</span></li>
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    class="submit-form-filter" name=job_categories[]
                                                                    form="jobs-filter-form" value="9"><span
                                                                    class="text-small">Retail &amp; Products</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">2</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="filter-block mb-20">
                                                <h5 class="medium-heading mb-25">Salary range</h5>
                                                <div class="list-checkbox pb-20">
                                                    <div class="row position-relative mt-10 mb-20">
                                                        <div class="col-sm-12 box-slider-range">
                                                            <div id="slider-range" data-current-range="0"
                                                                data-max-salary-range="18700"></div>
                                                            <div class="salary-range mt-2"></div>
                                                        </div>
                                                        <div class="box-input-money"><input
                                                                class="input-disabled form-control submit-form-filter"
                                                                name=offered_salary_from type=hidden value="0"><input
                                                                class="input-disabled form-control submit-form-filter"
                                                                name=offered_salary_to type=hidden value="18700"
                                                                data-default-value="18700"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filter-block mb-30">
                                                <h5 class="medium-heading mb-10">Experience Level</h5>
                                                <div class="mb-3 ps-custom-scrollbar">
                                                    <ul class="list-checkbox">
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    name=job_experiences[] class="submit-form-filter"
                                                                    id="check-job-experience-1" value="1"
                                                                    form="jobs-filter-form"><span
                                                                    class="text-small">Fresh</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">4</span></li>
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    name=job_experiences[] class="submit-form-filter"
                                                                    id="check-job-experience-2" value="2"
                                                                    form="jobs-filter-form"><span
                                                                    class="text-small">Less Than 1 Year</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">2</span></li>
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    name=job_experiences[] class="submit-form-filter"
                                                                    id="check-job-experience-3" value="3"
                                                                    form="jobs-filter-form"><span class="text-small">1
                                                                    Year</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">9</span></li>
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    name=job_experiences[] class="submit-form-filter"
                                                                    id="check-job-experience-4" value="4"
                                                                    form="jobs-filter-form"><span class="text-small">2
                                                                    Year</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">8</span></li>
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    name=job_experiences[] class="submit-form-filter"
                                                                    id="check-job-experience-5" value="5"
                                                                    form="jobs-filter-form"><span class="text-small">3
                                                                    Year</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">3</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                            <div class="filter-block mb-20">
                                                <h5 class="medium-heading mb-15">Job type</h5>
                                                <div class="mb-3 ps-custom-scrollbar">
                                                    <ul class="list-checkbox">
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    class="submit-form-filter" value="2"
                                                                    name=job_types[] id="check-job-type-2"
                                                                    form="jobs-filter-form"><span
                                                                    class="text-small">Freelance</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">7</span></li>
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    class="submit-form-filter" value="4"
                                                                    name=job_types[] id="check-job-type-4"
                                                                    form="jobs-filter-form"><span
                                                                    class="text-small">Internship</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">7</span></li>
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    class="submit-form-filter" value="3"
                                                                    name=job_types[] id="check-job-type-3"
                                                                    form="jobs-filter-form"><span
                                                                    class="text-small">Full Time</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">5</span></li>
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    class="submit-form-filter" value="5"
                                                                    name=job_types[] id="check-job-type-5"
                                                                    form="jobs-filter-form"><span
                                                                    class="text-small">Part Time</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">4</span></li>
                                                        <li><label class="cb-container"><input type=checkbox
                                                                    class="submit-form-filter" value="1"
                                                                    name=job_types[] id="check-job-type-1"
                                                                    form="jobs-filter-form"><span
                                                                    class="text-small">Contract</span><span
                                                                    class="checkmark"></span></label><span
                                                                class="number-item">3</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-9 jobs-listing">
                                <div class="content-page job-content-section">
                                    <div class="box-filters-job">
                                        <div class="row">
                                            
                                    </div>
                                    <div class="row showing-of-results">
                                        <div class="loading-ring">
                                            <div class="loading-ring-wrapper">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-12 col-12 job-items">
                                        <?php
                                            require 'admin\database\dbconfig.php';

                                            $query = "SELECT * FROM tbl_jobs LEFT JOIN tbl_users ON tbl_jobs.company=tbl_users.member_no";
                                            $query_run = mysqli_query($connection, $query);
                                            $check_job = mysqli_num_rows($query_run) >0;

                                            if($check_job)
                                            {
                                                while($row = mysqli_fetch_array($query_run))
                                                {
                                                    
                                                    ?>
                                            <div class="card-grid-2 hover-up featured-job-item "><span
                                                    class="flash"></span>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="card-grid-2-image-left">
                                                            <div class="image-box"><img
                                                                    src=indexx/storage/companies/6.png
                                                                    alt="Quora JSC"></div>
                                                            <div class="right-info"><a class="name-job"
                                                                    href="companydetail.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['first_name']; ?></a><span class="location-small"><?php echo $row['city']; ?>, <?php echo $row['country']; ?></span></div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                        <div class="pl-15 mb-15 mt-30"><a
                                                                class="btn btn-grey-small mr-5 mb-2"
                                                                ><?php echo $row['experience']; ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-block-info">
                                                    <h4><a
                                                            href="jobdetail.php?id=<?php echo $row['enc_id']; ?>"><?php echo $row['title']; ?></a></h4>
                                                    <div class="mt-5"><span class="card-briefcase"><?php echo $row['type']; ?>
                                                        </span><span class="card-time"><span><?php echo $row['date_posted']; ?></span></span>
                                                    </div>
                                                    <p class="font-sm color-text-paragraph mt-10"><?php echo $row['description']; ?></p>
                                                    <div class="card-2-bottom mt-20">
                                                        <div class="row">
                                                            <div class="col-lg-7 col-7"><span class="card-text-price"
                                                                    title="$7,100 - $11,100"> $7,100 - $11,100
                                                                </span><span class="text-muted">/Yearly</span></div>
                                                            <div class="col-lg-5 col-5 text-end">
                                                                <div class=""><button class="btn btn-apply-now"
                                                                        data-job-name="Staff Software Engineer"
                                                                        data-job-id="18" data-bs-toggle="modal"
                                                                        data-bs-target="#ModalApplyJobForm"> Apply Now
                                                                    </button></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                    }
                                }
                                else
                                {
                                    echo "no record found";
                                }
                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <script id="traffic-popup-map-template"
                    type=text/x-jquery-tmpl><div><table width=100%><tr><td width=40><div ><img src=${item.company_logo_thumb} width=40 alt="${item.company_name}"></div></td><td><div class="infomarker"><h5 class="${item.company_url ? '' : 'd-none'}"><a href="${item.company_url}" target="_blank">${item.company_name}</a></h5><div class="text-info"><strong>${item.job_name}</strong></div><div class="text-info"><i class="mdi mdi-account"></i><span>${item.number_of_positions} Vacancy</span><span class="${item.job_type ? '' : 'd-none'}"><span>-</span><span>${item.job_type}</span></span></div><div class="text-muted ${item.full_address ? '' : 'd-none'}"><i class="uil uil-map"></i><span>${item.full_address}</span></div></div></td></tr></table></div></script>
            </div>
        </div>
        <section class="section-box mt-50 mb-20">
            <div class="container">
                <div class="box-newsletter page_speed_1986265105">
                    <div class="row">
                        <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img
                                src=indexx/storage/general/newsletter-image-left.png
                                alt="careerplus - Laravel Job Board Script"></div>
                        <div class="col-lg-12 col-xl-6 col-12">
                            <h2 class="text-md-newsletter text-center"> New Things Will Always <br> Update Regularly
                            </h2>
                            <div class="box-form-newsletter mt-40">
                                <form action="jobs.php" method="post"
                                    class="form-newsletter subscribe-form newsletter-form d-flex"><input type=hidden
                                        name=_token value="hvXdRooiGtJMe2b379mRCIGACM8lpVuzqVvYVYD7"
                                        autocomplete="off"><input class="input-newsletter" type=text value="" name=email
                                        placeholder="Enter your email here"><button type=submit
                                        class="btn btn-default font-heading icon-send-letter">Subscribe</button></form>
                            </div>
                        </div>
                        <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img
                                src=indexx/storage/general/newsletter-image-right.png
                                alt="JobBox - Laravel Job Board Script"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer mt-50">
        <div class="container">
            <div class="row">
                <div class="footer-col-1 col-md-3 col-sm-12"><a href="indexxx.php"
                        aria-label="JobBox - Laravel Job Board Script"><img alt="" src=""></a>
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
    <script> window.currencies = { "display_big_money": null, "billion": "billion", "million": "million", "is_prefix_symbol": 1, "symbol": "$", "title": "USD", "decimal_separator": ".", "thousands_separator": ",", "number_after_dot": 0, "show_symbol_or_title": true }; </script>
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
    <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-R7X6YBEYYT');</script>
</body>

</html>