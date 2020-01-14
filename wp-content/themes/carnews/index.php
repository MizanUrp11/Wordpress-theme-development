<!DOCTYPE html>
<html <?php language_attributes();?>>
   <?php wp_head() ?>


<?php get_header(); ?>


<body class="home">
    <!-- start preloader -->
    <div id="preLoaderBox">
        <div id="preLoaderBoxStatus"></div>
    </div>

    <!-- End preloader -->
    <!-- header start area -->




    <?php get_header( )?>
    
    

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
                            <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
                            <div class="responsive-menu"></div>
                        </div>
                        <div class="col-md-9">
                            <div class="nav-wrapper">
                                <nav class="main-navigation">
                                    

<?php 
wp_nav_menu(
    array(
        'theme_location'    => 'header_menu', 
        'container_class'   => 'main-navigation', 
        'items_wrap'        => '<ul class="main-menu">%3$s</ul>',
        ) );
?>





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
                                                 <li><i class="fa fa-calendar"></i> <?php the_time( 'g:i a' )?> </li> 
                                                <li><i class="fa fa-comment"></i> <?php comments_popup_link( 'No Comment', '1 Comment >>', '% Comments');?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                                        <div class="text-des">
                                        <?php the_excerpt(); ?>
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
    



<?php wp_footer() ?>



</body>

</html>