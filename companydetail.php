<?php
    require 'admin\database\dbconfig.php';
include 'constants/check-login.php';


    $id = "";
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
    }

    $sql_query = "SELECT * FROM tbl_users WHERE user_id = $id";
    $result=$connection->query($sql_query);

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <title>Career Plus</title>
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\language-public.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\content-styles.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\bootstrap-main.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\style.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx\css\animate-min.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx/themes/jobbox/plugins/leaflet.css">
    <link media="all" type=text/css rel="stylesheet" href="indexx/themes/jobbox/plugins/css-stars.css">
    
    <style>
        .page_speed_1327205362 {
            display: none;
        }

        .page_speed_1793128103 {
            height: 16px
        }

        .page_speed_2056201221 {}

        .page_speed_459162958 {
            display: none;
            position: absolute;
            top: 70%;
            left: 50%;
        }

        .page_speed_1481808568 {
            height: 150px
        }

    </style>
</head>

<body>
    <header class="header sticky-bar ">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo"><a class="d-flex" href="indexxx.php"><img alt="" src=indexx\storage\avatars\cp2.png></a></div>
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
        <section class="section-box-2 company-detail">
            <div class="container">
                <div class="banner-hero banner-image-single">
                    <div class="wrap-cover-image"><img src=indexx/storage/general/cover-image.png
                            alt="Whop.com"></div>
                </div>
                <div class="box-company-profile">
                <?php
                        if ($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {

                                ?>
                    <div class="image-company"><img src="indexx/storage/companies/6.png" class="img-fluid" alt="Whop.com"></div>
                    <div class="row mt-30">
                        <div class="col-lg-8 col-md-12">
                            <h5 class="f-18"> <?php echo $row['first_name']; ?> <span class="card-location font-regular ml-20"><?php echo $row['city']; ?>, <?php echo $row['country']; ?></span></h5>
                            <p class="mt-5 font-md color-text-paragraph-2 mb-15"><?php echo $row['about']; ?></p>
                        </div>
                        <div class="col-lg-4 col-md-12 text-lg-end"><a class="btn btn-call-icon btn-apply btn-apply-big"
                                href="<?php echo $row['phone']; ?>"> Contact Us </a></div>
                    </div>
                </div>
                <div class="border-bottom pt-10 pb-10"></div>
            </div>
        </section>
        <section class="section-box mt-50 company-detail-job-list">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="content-single">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-about" role="tabpanel"
                                    aria-labelledby="tab-about">
                                    <h4>Welcome to <?php echo $row['first_name']; ?></h4>
                                    <div class="ck-content">
                                        <p class="text-muted"><?php echo $row['services']; ?></p>
                                        <p class="text-muted"><?php echo $row['expertise']; ?></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-related-job content-page box-list-jobs">
                            <h5 class="mb-30">Latest Jobs</h5>
                            <div class="display-list">
                                <div class="col-12 jobs-listing">
                                    <div class="card-grid-2 hover-up"><span class="flash"></span>
                                        <div class="row">
                                            <div class=" col-lg-6 col-md-6 col-sm-12">
                                                <div class="card-grid-2-image-left">
                                                    <div class="image-box"><img
                                                            src=indexx/storage/companies/6.png
                                                            alt="Whop.com"></div>
                                                    <div class="right-info"><a class="name-job"
                                                            href="">Corporate
                                                            Sales Representative</a><span
                                                            class="location-small">Germany, DN</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5 mb-2"
                                                        href="">Figma</a><a
                                                        class="btn btn-grey-small mr-5 mb-2"
                                                        href="">JavaScript</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <div class="mt-5"><span class="card-briefcase"> Freelance </span><span
                                                    class="card-time"><span>2 months ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-10">Sit ipsa molestiae eligendi
                                                quis consequuntur. Reiciendis sint consequuntur aliquid. Nihil fuga
                                                tempore perferendis nihil ratione esse. Ut accusantium a sed veniam aut
                                                debitis.</p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price"
                                                            title="$7,900 - $9,200"> $7,900 - $9,200 </span><span
                                                            class="text-muted">/Weekly</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class=""><button class="btn btn-apply-now"
                                                                data-job-name="Corporate Sales Representative"
                                                                data-job-id="30" data-bs-toggle="modal"
                                                                data-bs-target="#ModalApplyJobForm"> Apply Now </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 jobs-listing">
                                    <div class="card-grid-2 hover-up">
                                        <div class="row">
                                            <div class=" col-lg-6 col-md-6 col-sm-12">
                                                <div class="card-grid-2-image-left">
                                                    <div class="image-box"><img
                                                            src=indexx/storage/companies/6.png
                                                            alt="Whop.com"></div>
                                                    <div class="right-info"><a class="name-job"
                                                            href="">Sr
                                                            Manager, Inside Account Management</a><span
                                                            class="location-small">Germany, DN</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                                                <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5 mb-2"
                                                        href="">Adobe
                                                        XD</a><a class="btn btn-grey-small mr-5 mb-2"
                                                        href="">Python</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block-info">
                                            <div class="mt-5"><span class="card-briefcase"> Internship </span><span
                                                    class="card-time"><span>3 months ago</span></span></div>
                                            <p class="font-sm color-text-paragraph mt-10">Laudantium consequuntur
                                                voluptas et. Hic quaerat voluptas autem est qui. Est qui magnam odit.
                                            </p>
                                            <div class="card-2-bottom mt-20">
                                                <div class="row">
                                                    <div class="col-lg-7 col-7"><span class="card-text-price"
                                                            title="$1,900 - $7,900"> $1,900 - $7,900 </span><span
                                                            class="text-muted">/Hourly</span></div>
                                                    <div class="col-lg-5 col-5 text-end">
                                                        <div class=""><button class="btn btn-apply-now"
                                                                data-job-name="Sr Manager, Inside Account Management"
                                                                data-job-id="39" data-bs-toggle="modal"
                                                                data-bs-target="#ModalApplyJobForm"> Apply Now </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-3 position-relative review-listing page_speed_2056201221">
                            <div class="spinner-overflow"></div>
                            <div class="half-circle-spinner page_speed_459162958">
                                <div class="circle circle-1"></div>
                                <div class="circle circle-2"></div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                        <div class="sidebar-border">
                            <div class="sidebar-heading">
                                <div class="avatar-sidebar">
                                    <div class="sidebar-info pl-0"><span
                                            class="sidebar-company mb-2">Whop.com</span><img alt="star"
                                            class="rating-star"
                                            src=indexx/themes/jobbox/imgs/template/icons/star.svg><img
                                            alt="star" class="rating-star"
                                            src=indexx/themes/jobbox/imgs/template/icons/star.svg><img
                                            alt="star" class="rating-star"
                                            src=indexx/themes/jobbox/imgs/template/icons/gray-star.svg><img
                                            alt="star" class="rating-star"
                                            src=indexx/themes/jobbox/imgs/template/icons/gray-star.svg><img
                                            alt="star" class="rating-star"
                                            src=indexx/themes/jobbox/imgs/template/icons/gray-star.svg><span
                                            class="font-xs color-text-mutted ml-10"><span>(</span><span>3</span><span>)</span></span><span
                                            class="card-location"></span></div>
                                </div>
                            </div>
                            <div class="sidebar-list-job">
                                <div class="box-map job-board-street-map-container">
                                    <div data-popup-id="#street-map-popup-template"
                                        data-center="[&quot;43.987272&quot;,&quot;-76.312285&quot;]"
                                        data-map-icon="Whop.com" class="job-board-street-map page_speed_1481808568">
                                    </div>
                                </div>
                                <div class="d-none" id="street-map-popup-template">
                                    <div>
                                        <table width=100%>
                                            <tr>
                                                <td width=40 class="image-company-sidebar">
                                                    <div><img src=indexxstorage/companies/6.png
                                                            width=40 alt="Whop.com"></div>
                                                </td>
                                                <td>
                                                    <div class="infomarker">
                                                        <h5><a href=""
                                                                target="_blank">Whop.com</a></h5>
                                                        <div class="text-info"><i class="mdi mdi-account"></i><span>3
                                                                Employees</span></div>
                                                        <div class="text-muted"><i class="uil uil-map"></i><span>98772
                                                                Auer Pike Apt. 865Starkburgh, TN 67913, Berlin, Germany,
                                                                Germany</span></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <?php

                                }
                            }
                        ?>
                            </div>
                            <div class="sidebar-list-job">
                                <ul>
                                    <li>
                                        <div class="sidebar-icon-item"><i class="fi-rr-clock"></i></div>
                                        <div class="sidebar-text-info"><span class="text-description">Year
                                                founded</span><strong class="small-heading">2000</strong></div>
                                    </li>
                                    <li>
                                        <div class="sidebar-icon-item"><i class="fi-rr-globe"></i></div>
                                        <div class="sidebar-text-info"><span class="text-description">Website </span><a
                                                href="https://whop.com/"><strong
                                                    class="small-heading">https://whop.com</strong></a></div>
                                    </li>
                                    <li>
                                        <div class="sidebar-icon-item"><i class="fi-rr-time-fast"></i></div>
                                        <div class="sidebar-text-info"><span class="text-description">Last Jobs
                                                Posted</span><strong class="small-heading">2 months ago</strong></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-list-job">
                                <ul class="ul-disc">
                                    <li>98772 Auer Pike Apt. 865Starkburgh, TN 67913</li>
                                    <li>Phone: +17077591260</li>
                                </ul>
                                <div class="text-center mt-30"></div>
                                <div class="mt-30"></div>
                            </div>
                        </div>
                        <div class="ads_banner_widget"><a href="/"><img
                                    src=indexx/storage/general/widget-banner.png
                                    alt="Banner image" class="align-middle"></a></div>
                    </div>
                </div>
            </div>
            <form method="GET" action="" accept-charset="UTF-8"
                id="job-pagination-form"><input type=hidden name=page value="1"></form>
        </section>
        
    </main>
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