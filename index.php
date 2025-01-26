<?php
session_start();
if(!empty($_SESSION['uname']))
{
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="x-icon" href="images/small-logo.png" />
    <title>Welcome to InfiniteAI - Technology company powerd by AI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta
      name="keywords"
      content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive"
    />
    <meta name="author" content="FREEHTML5.CO" />
    <!-- 
		//////////////////////////////////////////////////////

		FREE HTML5 TEMPLATE 
		DESIGNED & DEVELOPED by FREEHTML5.CO
			
		Website: 		http://freehtml5.co/
		Email: 			info@freehtml5.co
		Twitter: 		http://twitter.com/fh5co
		Facebook: 		https://www.facebook.com/fh5co

		//////////////////////////////////////////////////////
		-->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico" />

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300"
      rel="stylesheet"
      type="text/css"
    />

    <link href="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- back forbiden -->
    <script type="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null;}
    </script>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css" />
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css" />
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css" />
    <!-- CS Select -->
    <link rel="stylesheet" href="css/cs-select.css" />
    <link rel="stylesheet" href="css/cs-skin-border.css" />

    <link rel="stylesheet" href="css/style.css" />

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="fh5co-wrapper">
      <div id="fh5co-page">
        <header id="fh5co-header-section" class="sticky-banner">
          <div class="container">
            <div class="nav-header">
              <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"
                ><i></i
              ></a>
              <!-- <h1 id="fh5co-logo"><a href="index.html"><i class="icon-home"></i>Home<span>state</span></a></h1> -->
              <a href="index.html"
                ><img
                  src="images/logo.png"
                  class="logo"
                  id="fh5co-logo"
                  alt="InfiniteAI"
                  srcset=""
              /></a>
              <!-- START #fh5co-menu-wrap -->
              <nav id="fh5co-menu-wrap" role="navigation">
                <ul class="sf-menu" id="fh5co-primary-menu">
                  <li><a href="aboutus.html">About Us</a></li>
                  <li>
                    <a href="services.html" class="fh5co-sub-ddown">Services</a>
                  </li>
                  <li><a href="our_products.html">Our Products</a></li>
                  <li><a href="our_work.html">Our Work</a></li>
                  <li><a href="whyus.html">Why Us</a></li>
                  <li><a href="partner.html">Our Partners</a></li>
                  <li>
                    <a class="btn btn-primary btn-lg-1" href="contact.html"
                      >Get In Touch</a
                    >
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </header>

        <!-- end:header-top -->

        <div class="alert alert-success" id="alert-box" role="alert">
          <h4 class="alert-heading"><?php
          echo "Welcome! " . $_SESSION['uname'];  ?></h4>
          <p>You successfully Logged in our Website.</p>
          <hr>
          <form action="logout.php">
            <input type="submit" class="btn" name="submit" value="Logout">
          </form>
          <!-- <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> -->
        </div>

        <aside id="fh5co-hero" class="js-fullheight">
          <div class="flexslider js-fullheight">
            <div class="slides">
              <li style="background-image: url()">
                <div class="container-fluid">
                  <div class="row">
                    <div
                      class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text"
                    >
                      <div class="slider-text-inner">
                        <div class="desc">
                          <div class="desc2">
                            <div class="about-slide">
                              <img
                                class="devel"
                                src="images/powerofdata.png"
                                alt="InfiniteAI Data Analysis"
                                srcset=""
                              />
                            </div>
                            <div class="about-slide-desc">
                              <div class="about-slide-head">
                                <!-- <span class="status">Mobile & Web Development</span> -->
                                <h1>
                                  Power Of Data Analytics at your fingertips
                                </h1>
                                <!-- <h2 class="price">$4,000.00</h2> -->
                              </div>
                              <div class="slide-desc">
                                <p>
                                  Drive business productivity, efficiency and
                                  revenue growth by taking right decisions at
                                  right time using machine learning & artificial
                                  intelligence
                                </p>
                              </div>
                              <p>
                                <a
                                  class="btn btn-primary btn-lg"
                                  href="services.html"
                                  >How Can We Serve</a
                                >
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li style="background-image: url()">
                <div class="container-fluid">
                  <div class="row">
                    <div
                      class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text"
                    >
                      <div class="slider-text-inner">
                        <div class="desc">
                          <div class="desc2">
                            <div class="about-slide">
                              <img
                                class="devel"
                                src="images/webdev.png"
                                alt="InfiniteAI Data Analysis"
                                srcset=""
                              />
                            </div>
                            <div class="about-slide-desc">
                              <div class="about-slide-head">
                                <!-- <span class="status">Mobile & Web Development</span> -->
                                <h1>Mobile & Web Development</h1>
                                <!-- <h2 class="price">$4,000.00</h2> -->
                              </div>
                              <div class="slide-desc">
                                <p>
                                  Build better brand image, provide excellent
                                  customer services and create new revenue
                                  opportunities with custom built websites &
                                  mobile applications
                                </p>
                              </div>
                              <p>
                                <a
                                  class="btn btn-primary btn-lg"
                                  href="services.html"
                                  >How Can We Serve</a
                                >
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li style="background-image: url()">
                <div class="container-fluid">
                  <div class="row">
                    <div
                      class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text"
                    >
                      <div class="slider-text-inner">
                        <div class="desc">
                          <div class="desc2">
                            <div class="about-slide">
                              <img
                                class="devel"
                                src="images/erp.png"
                                alt="InfiniteAI Data Analysis"
                                srcset=""
                              />
                            </div>
                            <div class="about-slide-desc">
                              <div class="about-slide-head">
                                <!-- <span class="status">Mobile & Web Development</span> -->
                                <h1>Custom ERP Solutions</h1>
                                <!-- <h2 class="price">$4,000.00</h2> -->
                              </div>
                              <div class="slide-desc">
                                <p>
                                  Looking for one stop solution to all your
                                  software needs? We have years of experience
                                  creatign customised solution for your buisness
                                  needs
                                </p>
                              </div>
                              <p>
                                <a
                                  class="btn btn-primary btn-lg"
                                  href="services.html"
                                  >How Can We Serve</a
                                >
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li style="background-image: url()">
                <div class="container-fluid">
                  <div class="row">
                    <div
                      class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text"
                    >
                      <div class="slider-text-inner">
                        <div class="desc">
                          <div class="desc2">
                            <div class="about-slide">
                              <img
                                class="devel"
                                src="images/blockchain.png"
                                alt="InfiniteAI Data Analysis"
                                width="350px"
                                srcset=""
                              />
                            </div>
                            <div class="about-slide-desc">
                              <div class="about-slide-head">
                                <!-- <span class="status">Blockchain Development</span> -->
                                <h1>Blockchain Development</h1>
                                <!-- <h2 class="price">$4,000.00</h2> -->
                              </div>
                              <div class="slide-desc">
                                <p>
                                  Secure your business transactions by
                                  leveraging power of cutting edge technology.
                                  Use smart contracts to build trust in your
                                  customers
                                </p>
                              </div>
                              <p>
                                <a
                                  class="btn btn-primary btn-lg"
                                  href="services.html"
                                  >How Can We Serve</a
                                >
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </div>
          </div>
        </aside>

        <div id="ng-content-main">
          <div class="ngcontent">
            <div class="ngcontent-img">
              <img
                src="images/undraw_project_team_lc5a.svg"
                class="ng-img"
                alt="InfiniteAI Data Analysis"
                srcset=""
              />
            </div>
            <div class="ngcontent-text">
              <div class="aboutus"><h3>ABOUT US</h3></div>
              <div class="title-text">
                <h2>
                  You Can Trust Us <br />
                  With Your Development Needs
                </h2>
              </div>
              <div class="content-text">
                <p>
                  We believe in solving business pain areas by providing simple
                  yet effective technology solutions. With 95% customer
                  satisfaction score and more than 90% on-time project delivery,
                  we can help achieve your business goals with right solutions.
                </p>
              </div>
              <div class="about-btn">
                <a class="btn btn-primary btn-lg" href="aboutus.html"
                  >Know More</a
                >
              </div>
            </div>
          </div>
        </div>

        <div id="approch-main">
          <div class="aproch-titile">
            <h2>Our Approach Towards Quality Development</h2>
          </div>
          <div class="sub-approch">
            <div class="approch-part">
              <div class="approch-icon">
                <div class="icon1">
                  <img
                    src="images/chat.svg"
                    class="icon1-img"
                    width="80px"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="icon2">
                  <img
                    src="images/animated-line-image-0242.gif"
                    class="icon2-img"
                    alt=""
                  />
                </div>
                <div class="icon3">
                  <img
                    src="images/vertical-animated-line-image-0242-ezgif.com-rotate.gif"
                    class="icon3-img"
                    alt=""
                  />
                </div>
              </div>
              <div class="approch-detail">
                <div class="detail-head">
                  <h3>Analyze</h3>
                </div>
                <div class="detail-text">
                  <p>
                    Clear understanding of requirements is key for successful
                    project delivery. We work closely with our clients to
                    clearly define what is needed.
                  </p>
                </div>
              </div>
            </div>
            <div class="approch-part">
              <div class="approch-icon">
                <div class="icon1">
                  <img
                    src="images/puzzle.png"
                    class="icon1-img"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="icon2">
                  <img
                    src="images/animated-line-image-0242.gif"
                    class="icon2-img"
                    alt=""
                  />
                </div>
                <div class="icon3">
                  <img
                    src="images/vertical-animated-line-image-0242-ezgif.com-rotate.gif"
                    class="icon3-img"
                    alt=""
                  />
                </div>
              </div>
              <div class="approch-detail">
                <div class="detail-head">
                  <h3>Architect</h3>
                </div>
                <div class="detail-text">
                  <p>
                    High performing softwares require highly customisable
                    architecture. We have years of experience designing high
                    performing applications.
                  </p>
                </div>
              </div>
            </div>
            <div class="approch-part">
              <div class="approch-icon">
                <div class="icon1">
                  <img
                    src="images/develop.webp"
                    alt="Development"
                    class="icon1-img"
                    srcset=""
                  />
                </div>
                <div class="icon2">
                  <img
                    src="images/animated-line-image-0242.gif"
                    class="icon2-img"
                    alt=""
                  />
                </div>
                <div class="icon3">
                  <img
                    src="images/vertical-animated-line-image-0242-ezgif.com-rotate.gif"
                    class="icon3-img"
                    alt=""
                  />
                </div>
              </div>
              <div class="approch-detail">
                <div class="detail-head">
                  <h3>Develop</h3>
                </div>
                <div class="detail-text">
                  <p>
                    Robust products requires robust technologies. We have
                    expertise building scalable solutions using state-of-the-art
                    technology.
                  </p>
                </div>
              </div>
            </div>
            <div class="approch-part">
              <div class="approch-icon">
                <div class="icon1">
                  <img
                    src="images/cloud.svg"
                    alt="Development"
                    class="icon1-img"
                    srcset=""
                  />
                </div>
                <div class="icon2">
                  <!-- <img src="images/dashed.svg" class="icon2-img" alt=""> -->
                </div>
              </div>
              <div class="approch-detail">
                <div class="detail-head">
                  <h3>Deliver</h3>
                </div>
                <div class="detail-text">
                  <p>
                    We believe in quick time-to-market strategy. With our
                    iterative approach, we ensure our customer gets basic
                    product quickly.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper mySwiper">
          <div class="swiper-head1"><h2>Our Offerings</h2></div>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="swiper-part">
                <div class="swiper-col">
                  <div class="swiper-imgs">
                    <img
                      src="images/undraw_real_time_analytics_re_yliv.svg"
                      alt=""
                      srcset=""
                    />
                  </div>
                  <div class="swiper-detail">
                    <div class="swiper-head"><h2>MSBI Experts</h2></div>
                    <div class="swiper-txt">
                      <p>
                        The most simplest, powerful and advanced analytics can
                        be delivered using Microsoft SQL Server Integration
                        Services & Power BI. Get in touch with us for expert
                        opinion
                      </p>
                    </div>
                  </div>
                  <div class="about-btn">
                    <a class="btn btn-primary-btn btn-lg" href="data.html"
                      >Read More</a
                    >
                  </div>
                </div>

                <div class="swiper-col swiper-yellow">
                  <div class="swiper-imgs">
                    <img src="images/net-seeklogo.com.svg" alt="" srcset="" />
                  </div>
                  <div class="swiper-detail">
                    <div class="swiper-head"><h2>.NET Experts</h2></div>
                    <div class="swiper-txt">
                      <p>
                        Develop your applications using the number one platform
                        chosen by enterprises. We have years of experience
                        developing ASP.NET MVC, Core & Desktop applications
                      </p>
                    </div>
                  </div>
                  <div class="about-btn">
                    <a class="btn btn-primary-btn btn-lg" href="fullstack.html"
                      >Read More</a
                    >
                  </div>
                </div>

                <div class="swiper-col">
                  <div class="swiper-imgs">
                    <img
                      src="images/undraw_cloud_hosting_aodd.svg"
                      alt=""
                      srcset=""
                    />
                  </div>
                  <div class="swiper-detail">
                    <div class="swiper-head"><h2>Cloud & DevOps</h2></div>
                    <div class="swiper-txt">
                      <p>
                        Looking to go Cloud or have effective delivery pipeline?
                        We have experience deploying apps to AWS, Azure or
                        Google Cloud
                      </p>
                    </div>
                  </div>
                  <div class="about-btn">
                    <a class="btn btn-primary-btn btn-lg" href="blockchain.html"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-part">
                <div class="swiper-col">
                  <div class="swiper-imgs">
                    <img
                      src="images/undraw_team_page_re_cffb.png"
                      alt=""
                      srcset=""
                    />
                  </div>
                  <div class="swiper-detail">
                    <div class="swiper-head"><h2>Hire Expertise</h2></div>
                    <div class="swiper-txt">
                      <p>
                        We can be dedicated technology team for your
                        organization. We assure you of high professionalism with
                        excellent skills to help your business growth
                      </p>
                    </div>
                  </div>
                  <div class="about-btn">
                    <a class="btn btn-primary-btn btn-lg" href="hire.html"
                      >Read More</a
                    >
                  </div>
                </div>

                <div class="swiper-col swiper-yellow">
                  <div class="swiper-imgs">
                    <img
                      src="images/undraw_charts_re_5qe9.svg"
                      alt=""
                      srcset=""
                    />
                  </div>
                  <div class="swiper-detail">
                    <div class="swiper-head"><h2>Data Scientist</h2></div>
                    <div class="swiper-txt">
                      <p>
                        Thinking of implementing Data & Analytics pipeline in
                        your organization? We have team of experts having years
                        of experience implementing Big Data and Data Science
                        Projects
                      </p>
                    </div>
                  </div>
                  <div class="about-btn">
                    <a class="btn btn-primary-btn btn-lg" href="data.html"
                      >Read More</a
                    >
                  </div>
                </div>

                <div class="swiper-col">
                  <div class="swiper-imgs">
                    <img
                      src="images/undraw_bitcoin_p2p_re_1xqa.svg"
                      alt=""
                      srcset=""
                    />
                  </div>
                  <div class="swiper-detail">
                    <div class="swiper-head">
                      <h2>Blockchain Development</h2>
                    </div>
                    <div class="swiper-txt">
                      <p>
                        Be it writing smart contract, creating DeFi Applications
                        or creating your own NFT marketplace, we have got you
                        covered
                      </p>
                    </div>
                  </div>
                  <div class="about-btn">
                    <a class="btn btn-primary-btn btn-lg" href="blockchain.html"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-part">
                <div class="swiper-col">
                  <div class="swiper-imgs">
                    <img
                      src="images/undraw_code_typing_re_p8b9.svg"
                      alt=""
                      srcset=""
                    />
                  </div>
                  <div class="swiper-detail">
                    <div class="swiper-head"><h2>Go Lang Experts</h2></div>
                    <div class="swiper-txt">
                      <p>
                        Looking to launch your product in shortest time
                        possible? Go Lang can help. Create Enterprise grade apps
                        with quickest possible time
                      </p>
                    </div>
                  </div>
                  <div class="about-btn">
                    <a class="btn btn-primary-btn btn-lg" href="fullstack.html"
                      >Read More</a
                    >
                  </div>
                </div>

                <div class="swiper-col swiper-yellow">
                  <div class="swiper-imgs">
                    <img
                      src="images/undraw_react_re_g3ui.svg"
                      alt=""
                      srcset=""
                    />
                  </div>
                  <div class="swiper-detail">
                    <div class="swiper-head"><h2>Full Stack Experts</h2></div>
                    <div class="swiper-txt">
                      <p>
                        We have certified developers having experience in React,
                        Angular, Vue, PHP, Laravel or NodeJS. You can be sure
                        that your modern application development needs are
                        covered
                      </p>
                    </div>
                  </div>
                  <div class="about-btn">
                    <a class="btn btn-primary-btn btn-lg" href="fullstack.html"
                      >Read More</a
                    >
                  </div>
                </div>

                <div class="swiper-col">
                  <div class="swiper-imgs">
                    <img
                      src="images/undraw_flutter_dev_wvqj.svg"
                      alt=""
                      srcset=""
                    />
                  </div>
                  <div class="swiper-detail">
                    <div class="swiper-head"><h2>Mobile Experts</h2></div>
                    <div class="swiper-txt">
                      <p>
                        Need custom native (iOS, Android) or hybrid (React
                        Native, Flutter) mobile app for your business? We can
                        build one in shortest time possible.
                      </p>
                    </div>
                  </div>
                  <div class="about-btn">
                    <a class="btn btn-primary-btn btn-lg" href="mobileapp.html"
                      >Read More</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="swiper-slide">Slide 2</div>
					  <div class="swiper-slide">Slide 3</div>
					  <div class="swiper-slide">Slide 4</div>
					  <div class="swiper-slide">Slide 5</div>
					  <div class="swiper-slide">Slide 6</div>
					  <div class="swiper-slide">Slide 7</div>
					  <div class="swiper-slide">Slide 8</div>
					  <div class="swiper-slide">Slide 9</div> -->
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <!-- <div class="swiper-pagination"></div> -->
        </div>

        <div class="swiper mySwiper1">
          <div class="swiper-head1"><h2>Our Offerings</h2></div>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="swiper-col">
                <div class="swiper-imgs">
                  <img
                    src="images/undraw_real_time_analytics_re_yliv.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="swiper-detail">
                  <div class="swiper-head"><h2>MSBI Experts</h2></div>
                  <div class="swiper-txt">
                    <p>
                      The most simplest, powerful and advanced analytics can be
                      delivered using Microsoft SQL Server Integration Services
                      & Power BI. Get in touch with us for expert opinion
                    </p>
                  </div>
                </div>
                <div class="about-btn">
                  <a class="btn btn-primary-btn btn-lg" href="data.html"
                    >Read More</a
                  >
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="swiper-col swiper-yellow">
                <div class="swiper-imgs">
                  <img src="images/net-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="swiper-detail">
                  <div class="swiper-head"><h2>.NET Experts</h2></div>
                  <div class="swiper-txt">
                    <p>
                      Develop your applications using the number one platform
                      chosen by enterprises. We have years of experience
                      developing ASP.NET MVC, Core & Desktop applications
                    </p>
                  </div>
                </div>
                <div class="about-btn">
                  <a class="btn btn-primary-btn btn-lg" href="fullstack.html"
                    >Read More</a
                  >
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="swiper-col">
                <div class="swiper-imgs">
                  <img
                    src="images/undraw_cloud_hosting_aodd.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="swiper-detail">
                  <div class="swiper-head"><h2>Cloud & DevOps</h2></div>
                  <div class="swiper-txt">
                    <p>
                      Looking to go Cloud or have effective delivery pipeline?
                      We have experience deploying apps to AWS, Azure or Google
                      Cloud
                    </p>
                  </div>
                </div>
                <div class="about-btn">
                  <a class="btn btn-primary-btn btn-lg" href="blockchain.html"
                    >Read More</a
                  >
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="swiper-col">
                <div class="swiper-imgs">
                  <img
                    src="images/undraw_team_page_re_cffb.png"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="swiper-detail">
                  <div class="swiper-head"><h2>Hire Expertise</h2></div>
                  <div class="swiper-txt">
                    <p>
                      We can be dedicated technology team for your organization.
                      We assure you of high professionalism with excellent
                      skills to help your business growth
                    </p>
                  </div>
                </div>
                <div class="about-btn">
                  <a class="btn btn-primary-btn btn-lg" href="hire.html"
                    >Read More</a
                  >
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="swiper-col swiper-yellow">
                <div class="swiper-imgs">
                  <img
                    src="images/undraw_charts_re_5qe9.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="swiper-detail">
                  <div class="swiper-head"><h2>Data Scientist</h2></div>
                  <div class="swiper-txt">
                    <p>
                      Thinking of implementing Data & Analytics pipeline in your
                      organization? We have team of experts having years of
                      experience implementing Big Data and Data Science Projects
                    </p>
                  </div>
                </div>
                <div class="about-btn">
                  <a class="btn btn-primary-btn btn-lg" href="data.html"
                    >Read More</a
                  >
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="swiper-col">
                <div class="swiper-imgs">
                  <img
                    src="images/undraw_bitcoin_p2p_re_1xqa.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="swiper-detail">
                  <div class="swiper-head"><h2>Blockchain Development</h2></div>
                  <div class="swiper-txt">
                    <p>
                      Be it writing smart contract, creating DeFi Applications
                      or creating your own NFT marketplace, we have got you
                      covered
                    </p>
                  </div>
                </div>
                <div class="about-btn">
                  <a class="btn btn-primary-btn btn-lg" href="blockchain.html"
                    >Read More</a
                  >
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="swiper-col">
                <div class="swiper-imgs">
                  <img
                    src="images/undraw_code_typing_re_p8b9.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="swiper-detail">
                  <div class="swiper-head"><h2>Go Lang Experts</h2></div>
                  <div class="swiper-txt">
                    <p>
                      Looking to launch your product in shortest time possible?
                      Go Lang can help. Create Enterprise grade apps with
                      quickest possible time
                    </p>
                  </div>
                </div>
                <div class="about-btn">
                  <a class="btn btn-primary-btn btn-lg" href="fullstack.html"
                    >Read More</a
                  >
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="swiper-col swiper-yellow">
                <div class="swiper-imgs">
                  <img src="images/undraw_react_re_g3ui.svg" alt="" srcset="" />
                </div>
                <div class="swiper-detail">
                  <div class="swiper-head"><h2>Full Stack Experts</h2></div>
                  <div class="swiper-txt">
                    <p>
                      We have certified developers having experience in React,
                      Angular, Vue, PHP, Laravel or NodeJS. You can be sure that
                      your modern application development needs are covered
                    </p>
                  </div>
                </div>
                <div class="about-btn">
                  <a class="btn btn-primary-btn btn-lg" href="fullstack.html"
                    >Read More</a
                  >
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="swiper-col">
                <div class="swiper-imgs">
                  <img
                    src="images/undraw_flutter_dev_wvqj.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="swiper-detail">
                  <div class="swiper-head"><h2>Mobile Experts</h2></div>
                  <div class="swiper-txt">
                    <p>
                      Need custom native (iOS, Android) or hybrid (React Native,
                      Flutter) mobile app for your business? We can build one in
                      shortest time possible.
                    </p>
                  </div>
                </div>
                <div class="about-btn">
                  <a class="btn btn-primary-btn btn-lg" href="mobileapp.html"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="swiper-button-next"></div> -->
          <!-- <div class="swiper-button-prev"></div> -->
          <!-- <div class="swiper-pagination"></div> -->
        </div>

        <div id="why-main">
          <div class="why-title">
            <h2>Why Us?</h2>
          </div>
          <div class="why-sub">
            <div class="text-detail">
              <div class="title-text">
                <h1>50+</h1>
              </div>
              <div class="subtitle-text">
                <h2>Projects Delivered</h2>
              </div>
            </div>
            <div class="text-detail">
              <div class="title-text">
                <h1>80%</h1>
              </div>
              <div class="subtitle-text">
                <h2>Repeated Clients</h2>
              </div>
            </div>
            <div class="text-detail">
              <div class="title-text">
                <h1>9.5/10</h1>
              </div>
              <div class="subtitle-text">
                <h2>Customer Satisfaction</h2>
              </div>
            </div>
            <div class="text-detail">
              <div class="title-text">
                <h1>100%</h1>
              </div>
              <div class="subtitle-text">
                <h2>Certified Employees</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="tech"><h2>Our Technology Expertise</h2></div>

        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button
              class="nav-link active"
              id="nav-big-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-big"
              type="button"
              role="tab"
              aria-controls="nav-big"
              aria-selected="true"
            >
              Big Data & Analytics
            </button>
            <button
              class="nav-link"
              id="nav-web-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-web"
              type="button"
              role="tab"
              aria-controls="nav-web"
              aria-selected="false"
            >
              Web
            </button>
            <button
              class="nav-link"
              id="nav-mobile-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-mobile"
              type="button"
              role="tab"
              aria-controls="nav-mobile"
              aria-selected="false"
            >
              Mobile
            </button>
            <button
              class="nav-link"
              id="nav-backend-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-backend"
              type="button"
              role="tab"
              aria-controls="nav-backend"
              aria-selected="false"
            >
              Backend & APIs
            </button>
            <button
              class="nav-link"
              id="nav-enterprise-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-enterprise"
              type="button"
              role="tab"
              aria-controls="nav-enterprise"
              aria-selected="false"
            >
              Enterprise
            </button>
            <button
              class="nav-link"
              id="nav-cms-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-cms"
              type="button"
              role="tab"
              aria-controls="nav-cms"
              aria-selected="false"
            >
              CMS
            </button>
            <button
              class="nav-link"
              id="nav-cloud-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-cloud"
              type="button"
              role="tab"
              aria-controls="nav-cloud"
              aria-selected="false"
            >
              Cloud & DevOps
            </button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane show active"
            id="nav-big"
            role="tabpanel"
            aria-labelledby="nav-big-tab"
            tabindex="0"
          >
            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/python-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Python</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/R-logo.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>R</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/hadoop-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Hadoop</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/Apache_Hive_logo.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Hive</h4></div>
              </div>
            </div>

            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img
                    src="images/kafka-seeklogo.com (1).svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="mytab-txt"><h4>Kafka</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img
                    src="images/tableau-software-seeklogo.com.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="mytab-txt"><h4>Tableau</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/Power_bi_logo_black.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Power BI</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/spark-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Spark</h4></div>
              </div>
            </div>

            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/talend-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Talend</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img
                    src="images/tensorflow-seeklogo.com.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="mytab-txt"><h4>Tenserflow</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/sql-server.png" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>SSIS</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img
                    src="images/azuresynapseanalytics.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="mytab-txt"><h4>Synapse</h4></div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane"
            id="nav-web"
            role="tabpanel"
            aria-labelledby="nav-web-tab"
            tabindex="0"
          >
            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img
                    src="images/html5-with-wordmark-color.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="mytab-txt"><h4>HTML5</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/css3.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>CSS3</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/javascript-vertical.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>JavaScript</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img
                    src="images/wordpress-seeklogo.com.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="mytab-txt"><h4>WordPress</h4></div>
              </div>
            </div>

            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/php-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>PHP</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/laravel-icon.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Laravel</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/NET_Core_Logo.png" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>ASP.NET</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/java-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Java</h4></div>
              </div>
            </div>

            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/react-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>React</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/angular.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Angular</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/vuejs-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>VueJS</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/drupal-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Drupal</h4></div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane"
            id="nav-mobile"
            role="tabpanel"
            aria-labelledby="nav-mobile-tab"
            tabindex="0"
          >
            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/apple-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>iOS</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/android-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Android</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/flutter-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Flutter</h4></div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane"
            id="nav-backend"
            role="tabpanel"
            aria-labelledby="nav-backend-tab"
            tabindex="0"
          >
            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/nodejs-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>NodeJS</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/expressjs.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>ExpressJS</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/NET_Core_Logo.png" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>.NET Core</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/laravel-icon.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Laravel</h4></div>
              </div>
            </div>

            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/sql-server.png" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>SQL Server</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/oracle-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Oracle</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/mongodb-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>MongoDB</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/mysql-official.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>MySQL</h4></div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane"
            id="nav-enterprise"
            role="tabpanel"
            aria-labelledby="nav-enterprise-tab"
            tabindex="0"
          >
            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/go-language-official.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>GO Lang</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/nodejs-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>NodeJS</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/NET_Core_Logo.png" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>.NET Core</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/java-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Java</h4></div>
              </div>
            </div>

            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img
                    src="images/Microsoft_Dynamics_Logo.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="mytab-txt"><h4>MS Dynamics 365</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/SAP_2011_logo.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>SAP</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/ZOHO.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>ZOHO</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/oracle-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Oracle Fusion</h4></div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane"
            id="nav-cms"
            role="tabpanel"
            aria-labelledby="nav-cms-tab"
            tabindex="0"
          >
            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/shopify-icon.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Shopify</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img
                    src="images/wordpress-seeklogo.com.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="mytab-txt"><h4>WordPress</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/joomla-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>Joomla</h4></div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane"
            id="nav-cloud"
            role="tabpanel"
            aria-labelledby="nav-cloud-tab"
            tabindex="0"
          >
            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/go-language-official.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>GO Lang</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img
                    src="images/google-cloud-seeklogo.com.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="mytab-txt"><h4>Google Cloud</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img src="images/aws-seeklogo.com.svg" alt="" srcset="" />
                </div>
                <div class="mytab-txt"><h4>AWS</h4></div>
              </div>
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img
                    src="images/microsoft-azureicon-seeklogo.com.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="mytab-txt"><h4>Azure</h4></div>
              </div>
            </div>

            <div class="mytab-main">
              <div class="mytab-detail">
                <div class="mytab-img">
                  <img
                    src="images/firebase-seeklogo.com.svg"
                    alt=""
                    srcset=""
                  />
                </div>
                <div class="mytab-txt"><h4>Firebase</h4></div>
              </div>
            </div>
          </div>
        </div>

        <div id="satisfaction-main">
          <div class="satis-content">
            <div class="satis-img">
              <img
                src="images/agreement.svg"
                class="satis-image"
                alt="InfiniteAI Data Analysis"
                srcset=""
              />
            </div>
            <div class="satis-text">
              <div class="satis"><h3>Customer Satisfaction Guranteed</h3></div>
              <div class="title-text">
                <h2>Quality Delivery, Rest Assured</h2>
              </div>
              <div class="satis-content-text">
                <p>
                  Want to <b> develop great product?</b> Experience the
                  professionalism with personal attention to each and every
                  details of our project journey together.
                </p>
              </div>
              <div class="subsatis-text">
                <h3>Your first 40 man hours are on us</h3>
              </div>
              <div class="about-btn">
                <a class="btn btn-primary btn-lg" href="contact.html"
                  >Start Conversation</a
                >
              </div>
            </div>
          </div>
        </div>

        <aside id="fh5co-hero" class="js-fullheight">
          <div class="flexslider js-fullheight">
            <div class="slides">
              <li style="background-image: url()">
                <div class="container-fluid">
                  <div class="row">
                    <div
                      class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text"
                    >
                      <div class="slider-text-inner">
                        <div class="desc">
                          <div class="desc2">
                            <div class="slider-div">
                              <div class="slide-img">
                                <img
                                  class="slide-image"
                                  src="images/client_nikunj_popat.jpeg"
                                  alt=""
                                  srcset=""
                                />
                              </div>
                              <h2>NIKUNJ POPAT</h2>
                              <h3>Director, SimBeez</h3>
                              <div class="ceo-detail">
                                <p>
                                  I have never came across such a swift team.
                                  They delivered precisely what was needed in
                                  quickest possible time. I am certainly
                                  delighted.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li style="background-image: url()">
                <div class="container-fluid">
                  <div class="row">
                    <div
                      class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text"
                    >
                      <div class="slider-text-inner">
                        <div class="desc">
                          <div class="desc2">
                            <div class="slider-div">
                              <div class="slide-img">
                                <img
                                  class="slide-image"
                                  src="images/client_firoz_sheikh.jpeg"
                                  alt=""
                                  srcset=""
                                />
                              </div>
                              <h2>Feroz Sheikh</h2>
                              <h3>Director, Harvices</h3>
                              <div class="ceo-detail">
                                <p>
                                  InfiniteAI team below my mind when I requested
                                  them for the React & Node web application.
                                  They have delivered beyond my expectations. I
                                  will never go anywhere else now.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li style="background-image: url()">
                <div class="container-fluid">
                  <div class="row">
                    <div
                      class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text"
                    >
                      <div class="slider-text-inner">
                        <div class="desc">
                          <div class="desc2">
                            <div class="slider-div">
                              <div class="slide-img">
                                <img
                                  class="slide-image"
                                  src="images/client_ujash_joshi.jpg"
                                  alt=""
                                  srcset=""
                                />
                              </div>
                              <h2>Ujash Joshi</h2>
                              <h3>Founder & CEO, Creensight</h3>
                              <div class="ceo-detail">
                                <p>
                                  Thank you team InfiniteAI for your support on
                                  Laravel's critical issues which you guys have
                                  completed on time with 100% accuracy.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </div>
          </div>
        </aside>

        <div id="develop-main">
          <div class="develop">
            <h3>LET'S DEVELOP EXCITING PRODUCTS</h3>
          </div>
          <div class="talk">
            <h2>Let's Talk</h2>
          </div>
          <div class="touch">
            <a class="btn btn-primary1 btn-lg" href="contact.html"
              >Get In Touch</a
            >
          </div>
        </div>

        <footer>
          <div id="footer">
            <div class="footer-container">
              <div class="cont1">
                <div class="cont1-img">
                  <img
                    src="images/logo.png"
                    class="logo"
                    id="footer-logo"
                    alt="InfiniteAI"
                    srcset=""
                  />
                </div>
                <div class="estimate">
                  <h4>Get Free Estimation</h4>
                </div>
                <div class="mail">
                  <a href=""> <link /> hello@infiniteai.io</a>
                </div>
                <div class="call"><h3>Call</h3></div>
                <div class="no1">India (Mobile/WhatsApp): +91 9890 290 778</div>
                <div class="no2">India (Land Line): +91 (281) 299 11 31</div>
                <div class="us">US: +1 (646) 403-6884</div>
                <div class="uk">UK: +44 7502 757572</div>
                <div class="social">
                  <a href="https://www.instagram.com/admin.infiniteai/"
                    ><img
                      src="images/instagram.svg"
                      alt="Instagram"
                      class="footer-social-icon"
                      srcset=""
                  /></a>
                  <a
                    href="https://www.facebook.com/people/Infinite-AI-Technology-Pvt-Ltd/100077904582148/"
                    ><img
                      src="images/facebook.svg"
                      alt="Facebook"
                      class="footer-social-icon"
                      srcset=""
                  /></a>
                  <a
                    href="https://www.linkedin.com/company/infiniteai-technology-private-limited/"
                    ><img
                      src="images/linkedin.svg"
                      alt="Linked In"
                      class="footer-social-icon"
                      srcset=""
                  /></a>
                  <a href=""
                    ><img
                      src="images/twitter.svg"
                      alt="Twitter"
                      class="footer-social-icon"
                      srcset=""
                  /></a>
                  <a
                    href="https://www.youtube.com/channel/UCr7Salm26COC6rWBj3HdL4w"
                    ><img
                      src="images/youtube.svg"
                      alt="youtube"
                      class="footer-social-icon"
                      srcset=""
                  /></a>
                </div>
              </div>
              <div class="cont2">
                <div class="cont2-1">
                  <div class="company"><h3>Company</h3></div>
                  <div class="footer-service">
                    <a href="aboutus.html">About Us</a>
                  </div>
                  <div class="footer-service">
                    <a href="services.html">Services</a>
                  </div>
                  <div class="footer-service">
                    <a href="our_work.html">Our Work</a>
                  </div>
                  <div class="footer-service">
                    <a href="whyus.html">Why Us</a>
                  </div>
                </div>
              </div>
              <div class="cont3">
                <div class="Service-head"><h3>Services</h3></div>
                <div class="count3-0">
                  <div class="count3-1">
                    <div class="sub-service">
                      <a href="hire.html">Hire Dedicated Talent</a>
                    </div>
                    <div class="sub-service">
                      <a href="data.html">BI, Data Analytics Services</a>
                    </div>
                    <div class="sub-service">
                      <a href="">Data Science Implementation</a>
                    </div>
                    <div class="sub-service">
                      <a href="blockchain.html">Blockchain Implementation</a>
                    </div>
                    <div class="sub-service">
                      <a href="blockchain.html">Cloud & DevOps Services</a>
                    </div>
                    <div class="sub-service">
                      <a href="enterprise.html">Enterprise Development</a>
                    </div>
                    <div class="sub-service">
                      <a href="fullstack.html">Full Stack Development</a>
                    </div>
                  </div>
                  <div class="count3-2">
                    <div class="sub-service">
                      <a href="">Web Apps Development</a>
                    </div>
                    <div class="sub-service">
                      <a href="mobileapp.html">Native & Hybrid Mobile Apps</a>
                    </div>
                    <div class="sub-service"><a href="">QA Services</a></div>
                    <div class="sub-service">
                      <a href="services.html">Consulting Services</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div id="last">
          <div class="rights">
            <div class="rights-text">
              <h3>Copyrights © 2024, InfiniteAI Technology Private Limited</h3>
            </div>
            <div class="design">
              <h3>Design By : Darsh Tank & Hitarth Vaghela</h3>
            </div>
          </div>
        </div>
      </div>
      <!-- END fh5co-page -->
    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->

    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/sticky.js"></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.min.js"></script>
    <!-- CS Select -->
    <script src="js/classie.js"></script>
    <script src="js/selectFx.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

    <!-- Swiper JS -->
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper1", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

    <!-- Main JS -->
    <script src="js/main.js"></script>
  </body>
</html>
<?php
}
else
{
  echo "Please Login First.";
  
}
?>