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