<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />


    <meta charset="<?php bloginfo( 'charset' ); ?>" />


    <meta name="description" content="CarCare  -  Car Repairing  and Servicing Html Template Responsive Template">
    <meta name="keywords" content="Repair ,Servicing ,Mechanic">
    <meta name="author" content="Theme Moor">
    <!-- Page Title -->


    <title><?php bloginfo( 'name' ) ?></title>

    
    <!-- Apple Touch Icons &Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/apple-icon-152x152.html">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/fav-icon/favicon-16x16.png">
    <!-- Master css File Here -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/master.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php wp_head() ?>

</head>

<body class="home">
    <!-- start preloader -->
    <div id="preLoaderBox">
        <div id="preLoaderBoxStatus"></div>
    </div>

    <!-- End preloader -->
    <!-- header start area -->




    <?php get_header( )?>




    <!-- Header area end -->

    <!--Main Slider-->



<?php get_template_part( 'slider' );?>





    <!-- Slider End -->


    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray pdb-28 news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="row">



<?php if(have_posts()):while(have_posts()) : the_post();?>



                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
                                        <a href=""><img class="img-responsive transition7s" src="<?php echo get_template_directory_uri(); ?>/images/resource/blog-1.jpg" alt=""></a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i><?php the_author();?></li>
                                                <!-- <li><i class="fa fa-calendar"></i> <?php the_time( 'g:i a' )?> </li> -->
                                                <li><i class="fa fa-comment"></i> <?php comments_popup_link( 'No Comment', '1 Comment >>', '% Comments');?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                                        <div class="text-des">
                                        <?php the_excerpt();?>
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a class="btn btn-primary transition7s" href="news-single.html"><i class="fa fa-calendar"></i> <?php the_time( 'M d Y' )?></a>
                                        </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="<?php the_permalink();?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
<?php endwhile; else : ?>
 <p><?php esc_html_e('Sorry. No post matched with your criteria.'); ?></p>
    <?php endif; ?>









                       
                        <div class="col-md-12">
                            <div class="pagination-area tac">
                                <nav>
                                    <ul class="pagination pagination-lg">
                                        <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                


<?php get_template_part( 'sidebar' );?>






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
                        <button class="btn btn-primary transition7s" type="submit">APPOINTMENT Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--===/ Right Fixed Appiontment Form ===-->
    <!-- Footer
    ============================================= -->
    

<?php get_footer( );?>



    <!-- /Footer  -->

    <!-- copyright
    ============================================= -->
    <div id="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="copyright">
                        <p>&copy; Copyright 2017, All Rights Reserved. <span> A Product Design by <a href="http://thememoor.com"> Theme Moor</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /copyright   -->
    <a href="#" id="scrollTopButton">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>
    <!-- Footer Scripts Area -->
    <!-- All JS File Here -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.4.min.js"></script>
    <!-- Bootstrap Min Js File -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <!--  wow Js File  -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owlcarousel/owl.carousel.min.js"></script>
    <!-- jquery ui -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
    <!-- jquery Counter -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.counterup.min.js"></script>
    <!-- hero menu -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/accordian-a2r.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.meanmenu.js"></script>
    <!-- Skillbar -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/skill.bars.jquery.js"></script>
    <!-- mixit-up -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.filterizr.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/filterize-controls.js"></script>
    <!-- magnific-popup -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
    <!-- Custom JS File -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>



<?php wp_footer() ?>



</body>

</html>