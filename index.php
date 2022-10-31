<?php
session_start();
    include("connection.php");
    include("function.php");
    $user_data = check_login($con);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Nunito&display=swap" rel="stylesheet">
    <!--Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Job Portal</title>
</head>
<body>
    <!--navbar-->
    <nav class="navbar">
        <h2 class="navbar-logo"><a href="#">JOBHUNT</a></h2>
        <div class="navbar-menu">
            <a href="#jobs">Jobs</a>
            <a href="#companies">Companies</a>
            <a href="#testimoni">Testimonial</a>
            <a href="#blog">Blog</a>
            <a class="nav-link" href="logout.php"><i class="fa fa-user-circle-o"></i>Log out</i></a>
        </div>
        <div class="menu-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    <!--header-->
    <header>
        <h1 class="header-title">
            FIND YOUR <br> <span>PERFECT JOB</span> <br> EASILY
        </h1>
    </header>
    <!--search-->
    <div class="search-wrapper">
        <div class="search-box">
            <div class="search-card">
                <input class="search-input" type="text" placeholder="Job title or keyword">
                <button class="search-button">Search</button>
            </div>
        </div>
    </div>
    <!--filter box-->
    <div class="filter-box">
        <div class="filter-dropdown">
            <select class="filter-select" id="job-level" name="job-level">
                <option>Job Level</option>
                <option>Entry</option>
                <option>Mid-Senior</option>
                <option>Director</option>
            </select>
            <select class="filter-select" id="job-function" name="job-function">
                <option>Job Function</option>
                <option>IT</option>
                <option>Management</option>
                <option>Education</option>
            </select>
            <select class="filter-select" id="employment" name="employment">
                <option>Employment Type</option>
                <option>Internship</option>
                <option>Part-Time</option>
                <option>Full-Time</option>
            </select>
            <select class="filter-select" id="location" name="location">
                <option>Location</option>
                <option>Remote</option>
                <option>India</option>
                <option>UK</option>
            </select>
            <select class="filter-select" id="education" name="education">
                <option>Education</option>
                <option>High school</option>
                <option>Bachelor's degree</option>
                <option>Master's degree</option>
            </select>
        </div>
        <div class="filter-chosen">
            <div class="chosen-card">
                Remote <i class="fas fa-times-circle"></i>
            </div>
            <div class="chosen-card">
                Full Time <i class="fas fa-times-circle"></i>
            </div>
            <div class="chosen-card">
                Financial Tech <i class="fas fa-times-circle"></i>
            </div>
            <div class="chosen-card">
                Entry Level <i class="fas fa-times-circle"></i>
            </div>
        </div>
    </div>
<!--job listing-->
<section class="job-list" id="jobs">
    <div class="job-card">
        <div class="job-name">
            <img class="job-profile" src="images/Tesla,_Inc.-Logo.wine.svg" >
<div class="job-details">
    <h4>Tesla</h4>
    <h3>Mechanical Engineer</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>  
    </div>       
    </div>   
    <div class="job-label"></div>
    <a class="label-a" href="#"><HTML></a>
        <a class="label-b" href="#"><CSS></a>
            <a class="label-c" href="#"><JavaScript></a>
                </div>
                <div class="job-posted">
                    Posted 2 mins ago
                    </div>
                    </div>

                    <div class="job-card">
                        <div class="job-name">
                            <img class="job-profile" src="images/EBay-Logo.wine.svg" >
           <div class="job-details">
                    <h4>Ebay</h4>
                    <h3>Business Development</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>  
                    </div>       
                    </div>   
                    <div class="job-label"></div>
               <a class="label-a" href="#"><HTML></a>
               <a class="label-b" href="#"><CSS></a>
               <a class="label-c" href="#"><JavaScript></a>
                 </div>
                 <div class="job-posted">
                 Posted 2 mins ago
                      </div>
                         </div>

  <div class="job-card">
        <div class="job-name">
            <img class="job-profile" src="images/TikTok-Logo.wine.svg" >
<div class="job-details">
    <h4>Tiktok</h4>
    <h3>Digital Marketing</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>  
    </div>       
    </div>   
    <div class="job-label"></div>
    <a class="label-a" href="#"><HTML></a>
        <a class="label-b" href="#"><CSS></a>
            <a class="label-c" href="#"><JavaScript></a>
                </div>
                <div class="job-posted">
                    Posted 2 mins ago
                    </div>
                    </div>    
                    
                    <div class="job-card">
        <div class="job-name">
            <img class="job-profile" src="images/YouTube-Logo.wine.svg" >
<div class="job-details">
    <h4>Youtube</h4>
    <h3>UI UX Designer</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>  
    </div>       
    </div>   
    <div class="job-label"></div>
    <a class="label-a" href="#"><HTML></a>
        <a class="label-b" href="#"><CSS></a>
            <a class="label-c" href="#"><JavaScript></a>
                </div>
                <div class="job-posted">
                    Posted an hour ago
                    </div>
                    </div>
<div class="job-card">
        <div class="job-name">
            <img class="job-profile" src="images/Amazon_(company)-Logo.wine.svg" >
<div class="job-details">
    <h4>Amazon</h4>
    <h3>Software Engineer</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>  
    </div>       
    </div>   
    <div class="job-label"></div>
    <a class="label-a" href="#"><HTML></a>
        <a class="label-b" href="#"><CSS></a>
            <a class="label-c" href="#"><JavaScript></a>
                </div>
                <div class="job-posted">
                    Posted an hour ago
                    </div>
                    </div>
                    <button class="job-more">More List</button>
                    </section>

                    <!--join-->
                    <section class="join">
                        <div class="join-detail">
                            <h1 class="section-title">LETS START YOUR NEW JOB WITH US</h1>
                            <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis nisi exercitationem similique facilis sequi ipsa quia? Sequi possimus ut officiis dolorum necessitatibus! Recusandae, quo voluptate expedita dolor rem cumque obcaecati.</P>
                        </div>
                        <button class="join-button">Join Now</button>
                    </section>
                         </body>
                         </html>
                                   