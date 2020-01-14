<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php get_header( )?>

<body class="home">
    <!-- start preloader -->
    <div id="preLoaderBox">
        <div id="preLoaderBoxStatus"></div>
    </div>

    <!-- End preloader -->
    <!-- header start area -->
    <header id="header_area" class="header">
        <div class="header-top-bar">
            <div class="container">
                <div class="row">
                    <div class="header_top_bar_content">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9 company">
                            <div class="company-info">
                                <ul>
                                    <li><i class="flaticon-close-envelope"></i><a href="#">example@gmail.com</a></li>
                                    <li><i class="flaticon-telephone"></i><a href="#">(000)-000-0000</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 social">
                            <div class="header-top-search">
                                <form action="#">
                                    <input type="text" placeholder="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav_area">
            <div class="header-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 logo">
                            <a href="index.html"><img src="images/logo.png" alt=""></a>
                            <div class="responsive-menu"></div>
                        </div>
                        <div class="col-md-9">
                            <div class="nav-wrapper">
                                <nav class="main-navigation">
                                    <ul class="main-menu">
                                        <li class="has-dropdown"><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Version 01</a></li>
                                                <li><a href="index-2.html">Home Version 02</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <!-- Dropdown Items -->
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">404 page</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">about us</a>
                                            <ul>
                                                <!-- Dropdown Items -->
                                                <li><a href="about-1.html">About V1</a></li>
                                                <li><a href="about-2.html">About V2</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Gellery</a>
                                            <ul>
                                                <!-- Dropdown Items -->
                                                <li><a href="gallery-2-col.html">Gallery Two Col</a></li>
                                                <li><a href="gallery-3-col.html">Gallery Three Col</a></li>
                                                <li><a href="gallery-4-col.html">Gallery Four Col</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Team</a>
                                            <ul>
                                                <!-- Dropdown Items -->

                                                <li><a href="team-2-col.html">Team 2 col</a></li>
                                                <li><a href="team-3-col.html">Team 3 col</a></li>
                                                <li><a href="team-4-col.html">Team 4 col</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">News</a>
                                            <ul>
                                                <!-- Dropdown Items -->
                                                <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                                                <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                                                <li><a href="news-single-fluid.html">News Details Fluid</a></li>
                                                <li><a href="news-single-left-sidebar.html">News Details  LSB</a></li>
                                                <li><a href="news-single-right-sidebar.html">News Details RSB</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="contact-us.html">services</a>
                                            <ul>
                                                <li><a href="service-1.html">Service One</a> </li>
                                                <li><a href="service-2.html">Service Two</a> </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Contact</a>
                                            <ul>
                                                <li><a href="contact-1.html">Contact One</a> </li>
                                                
                                                <li><a href="contact-3.html">Contact Two</a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->
    <!--Main Slider-->
    
    <?php if(have_posts()):while(have_posts()) : the_post();?>
    
    
<!--
    <section id="home-slider-v1" class="slider-v1">
        <div class="main-slider-v1 owl-item">
            <div class="item" style="background-image:url(images/resource/home-slide-1.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(images/resource/home-slide-2.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(images/resource/home-slide-3.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(images/resource/home-slide-4.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(images/resource/home-slide-5.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- Slider End -->

    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="single-page-details">
                        <h2>Nemo enim ipsam voluptatem quia</h2>
                        <?php the_content(); ?>
                    </div>
					
					<div class="row">
                        <div class="col-md-12">
                            <div class="bio-info-area">
                                <h4><span>Author : </span> <a href="http://localhost/mywordpress/blog/author/admin/" title="Posts by Ruhul amin" rel="author"><?php the_author(); ?></a> <strong>Total post : 14</strong></h4>
                                <img alt="" src="http://1.gravatar.com/avatar/42bb3bedeb706e06a38757a8126eb5e9?s=96&amp;r=g" srcset="http://1.gravatar.com/avatar/42bb3bedeb706e06a38757a8126eb5e9?s=96&amp;r=g 2x" class="avatar avatar-96 photo" width="96" height="96">                            
                                <p>Now testing Bangladesh is our home land and i love my country.Bangladesh is our home land and i love my country.Bangladesh is our home land and i love my country.Bangladesh is our home land and i love my country.Bangladesh is our home land and i love my country.</p>
                                <div class="author-info">
                                    <ul>
                                        <li><a href="#">View Author All Post</a> </li>
                                        <li><a href="http://www.twitter.com/ruhul2s">Twitter</a> </li>
                                        <li><a href="http://www.facebook.com/ruhul2s">Facebook</a> </li>
                                        <li><a href="http://www.googlePlus.com/ruhul2s">Google Plus</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="comment-area">
                                <h2 class="page-header">Comments</h2>
                                <div class="comment-list">
                                    <!-- First Comment -->
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 hidden-xs">
                                            <figure class="thumbnail">
                                                <img class="img-responsive" src="images/avatar.png" />
                                                <figcaption class="text-center">username</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-10 col-sm-10">
                                            <div class="panel panel-default arrow left">
                                                <div class="panel-body">
                                                    <header class="text-left">
                                                        <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                                                        <div class="comment-date"><i class="fa fa-clock-o"></i> Dec 16, 2014</div>
                                                    </header>
                                                    <div class="comment-post">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                        </p>
                                                    </div>
                                                    <p class="text-right"><a href="#" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Second Comment Reply -->
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
                                            <figure class="thumbnail">
                                                <img class="img-responsive" src="images/avatar.png" />
                                                <figcaption class="text-center">username</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="panel panel-default arrow left">
                                                <div class="panel-body">
                                                    <header class="text-left">
                                                        <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                                                        <div class="comment-date"><i class="fa fa-clock-o"></i> Dec 16, 2014</div>
                                                    </header>
                                                    <div class="comment-post">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                        </p>
                                                    </div>
                                                    <p class="text-right"><a href="#" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-comment">
                                    <h4>Leave a reply</h4>
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-item" name="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-item" name="email" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control form-item" rows="3" name="content" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Post comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sidebar-wrap">
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Search</h4>
                            <div class="search-form">
                                <input class="search-field" placeholder="Search" value="" type="text">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Category</h4>
                            <ul>
                                <li><a href="#">Higher Education<span>(15)</span></a></li>
                                <li><a href="#">Healthcare <span>(112)</span></a></li>
                                <li><a href="#">Senior Living <span>(4)</span></a></li>
                                <li><a href="#">Commercial <span>(14)</span></a></li>
                                <li><a href="#">Speciality <span>(90)</span></a></li>
                            </ul>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">ARCHIVES</h4>
                            <ul>
                                <li><a href="#">January 2017 <span>(15)</span></a></li>
                                <li><a href="#">Februaty 2017 <span>(112)</span></a></li>
                                <li><a href="#">March 2017 <span>(4)</span></a></li>
                                <li><a href="#">April 2017<span>(14)</span></a></li>
                                <li><a href="#">May 2017 <span>(90)</span></a></li>
                            </ul>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">RECENT NEWS</h4>
                            <div class="widget-news">
                                <a href="#"><img src="images/resource/blog-1.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="widget-news">
                                <a href="#"><img src="images/resource/blog-2.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="widget-news">
                                <a href="#"><img src="images/resource/blog-3.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Tags</h4>
                            <ul class="tag-list">
                                <li><a class="active transition3s" href="#">HTML</a></li>
                                <li><a class="transition3s" href="#">CSS3</a></li>
                                <li><a class="transition3s" href="#">PHP</a></li>
                                <li><a class="transition3s" href="#">Wordpress</a></li>
                                <li><a class="transition3s" href="#">Joomla</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /news table  -->
    <div id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1 class="subs-title">Subscribe to news letter :</h1>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="subcrb-form">
                    <form class="subscription registerForm">
                        <div class="input-group">
                            <input type="email" name="formInput[email]" value="" class="form-control" placeholder="Your Email:" required="" title="valid email is required" id="emaill">
                            <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit" value="submit" id="submit-btn"><i class="fa fa-paper-plane-o"></i></button>
                          </span>
                        </div>
                        <input type="hidden" name="action" value="submitform">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--=== Right Fixed Appiontment Form ===-->
    <div id="appiontment-now-box">
        <p class="toggle">APPOINTMENT</p>
        <div class="appiontment-now ">
            <div class="appiontment-form">
                <p>Instant online Appiontment</p>
                <form name="contact_us_popup" method="post" action="contact.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Name" class="form-control required name" name="name" aria-required="true" id="name1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control required email" name="email" aria-required="true" id="email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="form_appontment_date" class="form-control required date-picker" type="text" placeholder="Date" aria-required="true" id="datepicker1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Phone" class="form-control" name="phone" id="phone" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" placeholder="Vehicle Registration Num* " class="form-control required" name="subject" id="reg1" required>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message" rows="7" class="form-control required" name="message" required></textarea>
                    </div>
                    <div class="form-group tac">
                        <button class="btn btn-primary transition3s" type="submit">APPOINTMENT Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php endwhile; ?>
    <?php endif; ?>
    
    
    <!--===/ Right Fixed Appiontment Form ===-->
    <!-- Footer
    ============================================= -->
    
    
    
    
    
    <?php get_footer( );?>
    
    
    <!-- /Footer  -->

    

</body>

<?php wp_footer() ?>
</html>