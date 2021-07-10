<!--header-->
<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">

    <head>
        <title>The Kraft Packaging  </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <link rel="stylesheet" href="{{URL::asset('web/js/vendor/essential-grid/css/settings.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{URL::asset('web/css/essential-grid.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{URL::asset('web/js/vendor/revslider/css/settings.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{URL::asset('web/css/revslider.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{URL::asset('web/css/font-icons/css/trx_addons_icons-embedded.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{URL::asset('web/js/vendor/swiper/swiper.min.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{URL::asset('web/js/vendor/magnific/magnific-popup.min.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{URL::asset('web/css/trx_addons_full.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{URL::asset('web/css/trx_addons.animation.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{URL::asset('web/css/font-face/Montserrat/stylesheet.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{URL::asset('web/css/font-face/Sofia-Pro-Light/stylesheet.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{URL::asset('web/css/font-face/Gilroy/stylesheet.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{URL::asset('web/css/font-face/PermanentMarker/stylesheet.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{URL::asset('web/css/fontello/css/fontello-embedded.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{URL::asset('web/css/style.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{URL::asset('web/css/colors.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{URL::asset('web/css/general.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{URL::asset('web/css/responsive.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{URL::asset('web/css/font-awesome/css/font-awesome.min.css')}}" type="text/css" media="all" />

        <link rel="icon" href="http://placehold.it/32x32.jpg" sizes="32x32" />
        <link rel="icon" href="http://placehold.it/192x192.jpg" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="http://placehold.it/180x180.jpg" />

    </head>

    <!-- <body class="home page custom-background body_tag scheme_default body_style_wide blog_style_excerpt sidebar_hide expand_content remove_margins header_style_header-custom-18 header_position_default menu_style_top no_layout"> -->
    <?php if(url()->current()==url('blog')){ ?>
    <body class="custom-background scheme_default blog_mode_blog body_style_wide sidebar_show sidebar_right header_style_header-custom-18 header_position_default menu_style_top no_layout">
    <?php }else{ ?>
        <body class="home page custom-background body_tag scheme_default body_style_wide blog_style_excerpt sidebar_hide expand_content remove_margins header_style_header-custom-18 header_position_default menu_style_top no_layout">
    <?php } ?>
        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <div class="page_wrap">
                <!-- Header -->
                <header class="top_panel top_panel_custom top_panel_custom_18 without_bg_image scheme_default">
                    <!-- Top panel -->
                    <div class="top_panel_container sc_layouts_row sc_layouts_row_type_compact sc_layouts_row_delimiter sc_layouts_row_fixed">
                        <div class="sc_layouts_column sc_layouts_column_align_right sc_layouts_column_icons_position_left">
                            <!-- Logo -->
                            <div class="sc_content sc_content_default sc_float_left sc_align_left">
                                <div class="sc_content_container">
                                    <div class="sc_layouts_item">
                                        <a href="#" class="sc_layouts_logo sc_layouts_logo_default">
                                            <img class="logo_image" src="images/kraftpackaging.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Logo -->
                            <!-- Menu -->
                            <div class="sc_layouts_item">
                                <nav class="sc_layouts_menu sc_layouts_menu_default menu_hover_slide_line hide_on_mobile" data-animation-in="fadeInUpSmall" data-animation-out="fadeOutDownSmall">
                                    <ul id="menu-main-menu" class="sc_layouts_menu_nav">
                                        <!-- Menu item : Home -->
                                        <li class="menu-item">
                                            <a href="{{route('home')}}">
                                                <span>Home</span>
                                            </a>
                        
                                        </li>
                                        <!-- /Menu item : Home -->
                                        
                                      
                                        <!-- Menu item : About -->
                                        <li class="menu-item">
                                            <a href="{{route('about')}}">
                                                <span>About</span>
                                            </a>
                        
                                        </li>
                                        <!-- /Menu item : About -->
                                        <!-- Menu item : Services -->
                                        <li class="menu-item">
                                            
                                            <div class="dropdown">
                                                <a href="#" style="padding: 0 1em;">
  <span>Services</span>
  <div class="dropdown-content">
     <a href="{{route('digital-printing')}}">Digital Printing</a>
    <a href="{{route('offset-printing')}}">Offset Printing</a>
    <a href="{{route('large-format')}}">Large Format</a>
  </div>
    </a>
</div>
                                          
                                            

                                            
                          <style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 5px 10px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>                  
                                            
                                            
                                            
                                            
                                        </li>
                                        <!-- /Menu item : Services -->
                                        <!-- Menu item : Blog -->
                                        <!--<li class="menu-item">-->
                                        <!--    <a href="{{route('blog')}}">-->
                                        <!--        <span>Blog</span>-->
                                        <!--    </a>-->
                                            
                                        <!--</li>-->
                                        <!-- /Menu item : Blog -->
                                        <!-- Menu item : Contacts -->
                                        <li class="menu-item">
                                            <a href="{{route('contact')}}">
                                                <span>Contacts</span>
                                            </a>
                                        </li>
                                        <!-- Menu item : Contacts -->
                                    </ul>
                                </nav>
                                <div class="sc_layouts_iconed_text sc_layouts_menu_mobile_button">
                                    <a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
                                        <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu">Menu</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Menu -->
                            <!-- E-mail -->
                            <div class="sc_layouts_item contacts">
                                <div class="sc_layouts_iconed_text">
                                    <a href="mailto:info@yoursite.com" class="sc_layouts_item_link sc_layouts_iconed_text_link">
                                        <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon icon-mail-empty"></span>
                                        <span class="sc_layouts_item_details sc_layouts_iconed_text_details">
                                            <span class="sc_layouts_item_details_line2 sc_layouts_iconed_text_line2">info@thekraftpackaging.com</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- /E-mail -->
                            <!-- Contact phone -->
                            <div class="sc_layouts_item contacts">
                                <div class="sc_layouts_iconed_text">
                                    <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon icon-phone-2"></span>
                                    <span class="sc_layouts_item_details sc_layouts_iconed_text_details">
                                        <span class="sc_layouts_item_details_line2 sc_layouts_iconed_text_line2">042-35872706</span>
                                    </span>
                                </div>
                            </div>
                            <!-- /Contact phone -->
                            <!-- Socials -->
                            <div class="sc_layouts_item">
                                <div class="sc_socials sc_socials_default sc_align_default">
                                    <div class="socials_wrap">
                                        <span class="social_item">
                                            <a href="#" target="_blank" class="social_icons social_twitter">
                                                <span class="trx_addons_icon-twitter"></span>
                                            </a>
                                        </span><span class="social_item">
                                            <a href="#" target="_blank" class="social_icons social_facebook">
                                                <span class="trx_addons_icon-facebook"></span>
                                            </a>
                                        </span><span class="social_item">
                                            <a href="#" target="_blank" class="social_icons social_gplus">
                                                <span class="trx_addons_icon-gplus"></span>
                                            </a>
                                        </span><span class="social_item">
                                            <a href="#" target="_blank" class="social_icons social_tumblr">
                                                <span class="trx_addons_icon-tumblr"></span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- /Socials -->
                        </div>
                    </div>
                    <!-- /Top panel -->
                </header>
                <!-- /Header -->
                <!-- Menu mobile -->
                <div class="menu_mobile_overlay"></div>
                <div class="menu_mobile menu_mobile_fullscreen scheme_dark">
                    <div class="menu_mobile_inner">
                        <a class="menu_mobile_close icon-cancel"></a>
                        <nav class="menu_mobile_nav_area">
                            <ul id="menu_mobile-main-menu" class="">
                                <!-- Menu item : Home -->
                                <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children">
                                    <a href="#">
                                        <span>Home</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-home current-menu-item">
                                            <a href="index.html">
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="homepage-boxed.html">
                                                <span>Home Boxed</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- /Menu item : Home -->
                                <!-- Menu item : Features -->
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">
                                        <span>Features</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <!-- Menu item : Tools -->
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">
                                                <span>Tools</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="typography.html">
                                                        <span>Typography</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shortcodes.html">
                                                        <span>Shortcodes</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- /Menu item : Tools -->
                                        <!-- Menu item : Pages -->
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">
                                                <span>Pages</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="team.html">
                                                        <span>Our Team</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="team-single.html">
                                                        <span>Team Member</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">
                                                        <span>Gallery</span>
                                                    </a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="gallery-grid.html">
                                                                <span>Gallery Grid</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="gallery-cobbles.html">
                                                                <span>Gallery Cobbles</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="gallery-masonry.html">
                                                                <span>Gallery Masonry</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- /Menu item : Pages -->
                                        <!-- Menu item : Support -->
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">
                                                <span>Support</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="support.html">
                                                        <span>Support</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="customization.html">
                                                        <span>Customization</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="video-tutorials.html">
                                                        <span>Video Tutorials</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- /Menu item : Support -->
                                    </ul>
                                </li>
                                <!-- /Menu item : Features -->
                                <!-- Menu item : About -->
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">
                                        <span>About</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a href="about-style-1.html">
                                                <span>Style 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="about-style-2.html">
                                                <span>Style 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- /Menu item : About -->
                                <!-- Menu item : Services -->
                                <li class="menu-item">
                                    <a href="services.html">
                                        <span>Services</span>
                                    </a>
                                </li>
                                <!-- /Menu item : Services -->
                                <!-- Menu item : Blog -->
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">
                                        <span>Blog</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a href="blog-streampage.html">
                                                <span>Streampage</span>
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">
                                                <span>Classic Style</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="blog-classic-2-columns.html">
                                                        <span>2 Columns</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-classic-3-columns.html">
                                                        <span>3 Columns</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">
                                                <span>Chess Style</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="blog-chess-2-columns.html">
                                                        <span>2 Columns</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-chess-4-columns.html">
                                                        <span>4 Columns</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-chess-6-columns.html">
                                                        <span>6 Columns</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- /Menu item : Blog -->
                                <!-- Menu item : Contacts -->
                                <li class="menu-item">
                                    <a href="contacts.html">
                                        <span>Contacts</span>
                                    </a>
                                </li>
                                <!-- /Menu item : Contacts -->
                            </ul>
                        </nav>
                        <!-- Search -->
                        <div class="search_wrap search_style_normal search_mobile">
                            <div class="search_form_wrap">
                                <form role="search" method="get" class="search_form" action="#">
                                    <input type="text" class="search_field" placeholder="Search" value="" name="s">
                                    <button type="submit" class="search_submit trx_addons_icon-search"></button>
                                </form>
                            </div>
                        </div>
                        <!-- /Search -->
                        <!-- Socials -->
                        <div class="socials_mobile">
                            <span class="social_item">
                                <a href="#" target="_blank" class="social_icons social_twitter">
                                    <span class="trx_addons_icon-twitter"></span>
                                </a>
                            </span><span class="social_item">
                                <a href="#" target="_blank" class="social_icons social_facebook">
                                    <span class="trx_addons_icon-facebook"></span>
                                </a>
                            </span><span class="social_item">
                                <a href="#" target="_blank" class="social_icons social_gplus">
                                    <span class="trx_addons_icon-gplus"></span>
                                </a>
                            </span><span class="social_item">
                                <a href="#" target="_blank" class="social_icons social_tumblr">
                                    <span class="trx_addons_icon-tumblr"></span>
                                </a>
                            </span>
                        </div>
                        <!-- /Socials -->
                    </div>
                </div>
                <!-- /Menu mobile -->



					@yield('tcp')


                <!-- Footer -->
                <footer class="footer_wrap footer_custom scheme_dark">
                    <div class="sc_content sc_content_default sc_content_width_1_1">
                        <div class="sc_content_container">
                            <!-- Button -->
                            <div class="sc_layouts_item">
                                <div class="sc_item_button sc_button_wrap">
                                    <a href="{{route('contact')}}" class="sc_button sc_button_pink sc_button_size_normal sc_button_icon_left">
                                        <span class="sc_button_text">
                                            <span class="sc_button_title">Contact us </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Button -->
                            <!-- Footer Menu -->
                            <div class="footer_custom_menu">
                                <div class="widget widget_nav_menu">
                                    <div class="menu-footer-menu-container">
                                        <ul id="menu-footer-menu" class="menu">
                                            <li class="menu-item menu-item-home">
                                                <a href="">Home</a>
                                            </li>
                                         
                                            <li class="menu-item">
                                                <a href="{{route('service')}}">Services</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('about')}}">About</a>
                                            </li>
                                            <!--<li class="menu-item">-->
                                            <!--    <a href="{{route('blog')}}">Blog</a>-->
                                            <!--</li>-->
                                            <li class="menu-item">
                                                <a href="{{route('contact')}}">Contacts</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Footer Menu -->
                            <!-- Socials -->
                            <div class="sc_layouts_item">
                                <div class="sc_socials sc_socials_default sc_align_default">
                                    <div class="socials_wrap">
                                        <span class="social_item">
                                            <a href="#" target="_blank" class="social_icons social_twitter">
                                                <span class="trx_addons_icon-twitter"></span>
                                            </a>
                                        </span><span class="social_item">
                                            <a href="#" target="_blank" class="social_icons social_facebook">
                                                <span class="trx_addons_icon-facebook"></span>
                                            </a>
                                        </span><span class="social_item">
                                            <a href="#" target="_blank" class="social_icons social_gplus">
                                                <span class="trx_addons_icon-gplus"></span>
                                            </a>
                                        </span><span class="social_item">
                                            <a href="#" target="_blank" class="social_icons social_tumblr">
                                                <span class="trx_addons_icon-tumblr"></span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- /Socials -->
                            <!-- Copyright -->
                            <div>
                                <p>© 2021 TheKraftPackaging</p>
                            </div>
                            <!-- /Copyright -->
                        </div>
                    </div>
                </footer>
                <!-- /Footer -->
            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->

        <script type="text/javascript" src="{{URL::asset('web/js/scripts.js')}}"></script>

        <script type="text/javascript" src="{{URL::asset('web/js/jquery/jquery.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('web/js/jquery/jquery-migrate.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('web/js/jquery/ui/core.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('web/js/jquery/ui/widget.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('web/js/jquery/ui/accordion.min.js')}}"></script>

        <script type="text/javascript" src="{{URL::asset('web/js/_main.js')}}"></script>

        <script type="text/javascript" src="{{URL::asset('web/js/vendor/essential-grid/js/lightbox.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('web/js/vendor/essential-grid/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('web/js/vendor/essential-grid/js/jquery.themepunch.essential.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('web/js/vendor/revslider/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('web/js/eg-projects.js')}}"></script>

        <script type="text/javascript" src="{{URL::asset('web/js/vendor/revslider/revsliderextensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('web/js/vendor/revslider/revsliderextensions/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('web/js/vendor/revslider/revsliderextensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('web/js/vendor/revslider/revsliderextensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('web/js/revslider-homepage.js')}}"></script>

        <script type="text/javascript" src="{{URL::asset('web/js/vendor/swiper/swiper.jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('web/js/vendor/magnific/jquery.magnific-popup.min.js')}}"></script>

        <script type="text/javascript" src="{{URL::asset('web/js/trx_addons.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('web/js/superfish.js')}}"></script>

        <script type="text/javascript" src="{{URL::asset('web/js/scripts.js')}}"></script>

        <script type='text/javascript' src='http://maps.googleapis.com/maps/api/js'></script>
        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>

    </body>

</html>






