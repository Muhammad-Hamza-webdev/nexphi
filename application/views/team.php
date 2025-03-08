<!DOCTYPE html>
<html lang="zxx">

<head>

    <?php
    $this->load->view('components/header_links');
    ?>
</head>

<body>

    <!-- wrapper -->
    <div class="mil-wrapper" id="top">

        <!-- cursor -->
        <div class="mil-ball">
            <span class="mil-icon-1">
                <svg viewBox="0 0 128 128">
                    <path
                        d="M106.1,41.9c-1.2-1.2-3.1-1.2-4.2,0c-1.2,1.2-1.2,3.1,0,4.2L116.8,61H11.2l14.9-14.9c1.2-1.2,1.2-3.1,0-4.2	c-1.2-1.2-3.1-1.2-4.2,0l-20,20c-1.2,1.2-1.2,3.1,0,4.2l20,20c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9c1.2-1.2,1.2-3.1,0-4.2	L11.2,67h105.5l-14.9,14.9c-1.2,1.2-1.2,3.1,0,4.2c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9l20-20c1.2-1.2,1.2-3.1,0-4.2L106.1,41.9	z" />
                </svg>
            </span>
            <div class="mil-more-text">More</div>
            <div class="mil-choose-text">Сhoose</div>
        </div>
        <!-- cursor end -->

        <!-- preloader -->
        <?php
        $this->load->view("components/preloader");
        ?>
        <!-- preloader end -->

        <!-- scrollbar progress -->
        <div class="mil-progress-track">
            <div class="mil-progress"></div>
        </div>
        <!-- scrollbar progress end -->

        <!-- menu start-->
        <?php
        $this->load->view("components/header");
        ?>
        <!-- menu end-->

        <!-- curtain -->
        <div class="mil-curtain"></div>
        <!-- curtain end -->


        <!-- frame -->
        <?php
        $this->load->view("components/logo-frame");
        ?>
        <!-- frame end-->

        <!-- content -->
        <div class="mil-content">
            <div id="swupMain" class="mil-main-transition">

                <!-- banner -->
                <div class="mil-inner-banner">
                    <div class="mil-banner-content mil-up">
                        <div class="mil-animation-frame">
                            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6"
                                data-value-2="1.4"></div>
                        </div>
                        <div class="container">
                            <ul class="mil-breadcrumbs mil-mb-60">
                                <li><a href="<?=base_url()?>">Homepage</a></li>
                                <li><a>Team</a></li>
                            </ul>
                            <h1 class="mil-mb-60">Meet <span class="mil-thin">Our</span><br> Creative <span
                                    class="mil-thin">Team</span></h1>
                            <a href="#team" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                                <span>Our team</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- banner end -->

                <!-- team -->
                <section id="team">
                    <div class="container mil-p-120-90">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">

                                <div class="mil-team-card mil-up mil-mb-30">
                                    <img src="img/faces/1.jpg" alt="Team member">
                                    <div class="mil-description">
                                        <div class="mil-secrc-text">
                                            <h5 class="mil-muted mil-mb-5"><a>Anna Oldman</a></h5>
                                            <p class="mil-link mil-light-soft mil-mb-10">Art Director</p>
                                            <ul class="mil-social-icons mil-center">
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-behance"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-github"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">

                                <div class="mil-team-card mil-up mil-mb-30">
                                    <img src="img/faces/3.jpg" alt="Team member">
                                    <div class="mil-description">
                                        <div class="mil-secrc-text">
                                            <h5 class="mil-muted mil-mb-5"><a>Oscar Freeman</a></h5>
                                            <p class="mil-link mil-light-soft mil-mb-10">Frontend Dev</p>
                                            <ul class="mil-social-icons mil-center">
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-behance"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-github"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">

                                <div class="mil-team-card mil-up mil-mb-30">
                                    <img src="img/faces/2.jpg" alt="Team member">
                                    <div class="mil-description">
                                        <div class="mil-secrc-text">
                                            <h5 class="mil-muted mil-mb-5"><a>Emma Newman</a></h5>
                                            <p class="mil-link mil-light-soft mil-mb-10">Founder</p>
                                            <ul class="mil-social-icons mil-center">
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-behance"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-github"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">

                                <div class="mil-team-card mil-up mil-mb-30">
                                    <img src="img/faces/4.jpg" alt="Team member">
                                    <div class="mil-description">
                                        <div class="mil-secrc-text">
                                            <h5 class="mil-muted mil-mb-5"><a>Lisa Trueman</a></h5>
                                            <p class="mil-link mil-light-soft mil-mb-10">UI/UX Designer</p>
                                            <ul class="mil-social-icons mil-center">
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-behance"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-github"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">

                                <div class="mil-team-card mil-up mil-mb-30">
                                    <img src="img/faces/5.jpg" alt="Team member">
                                    <div class="mil-description">
                                        <div class="mil-secrc-text">
                                            <h5 class="mil-muted mil-mb-5"><a>Tom Oldman</a></h5>
                                            <p class="mil-link mil-light-soft mil-mb-10">Art Director</p>
                                            <ul class="mil-social-icons mil-center">
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-behance"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-github"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">

                                <div class="mil-team-card mil-up mil-mb-30">
                                    <img src="img/faces/6.jpg" alt="Team member">
                                    <div class="mil-description">
                                        <div class="mil-secrc-text">
                                            <h5 class="mil-muted mil-mb-5"><a>Corey Trueman</a></h5>
                                            <p class="mil-link mil-light-soft mil-mb-10">Art Director</p>
                                            <ul class="mil-social-icons mil-center">
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-behance"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-github"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">

                                <div class="mil-team-card mil-up mil-mb-30">
                                    <img src="img/faces/7.jpg" alt="Team member">
                                    <div class="mil-description">
                                        <div class="mil-secrc-text">
                                            <h5 class="mil-muted mil-mb-5"><a>Justin Newman</a></h5>
                                            <p class="mil-link mil-light-soft mil-mb-10">Art Director</p>
                                            <ul class="mil-social-icons mil-center">
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-behance"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-dribbble"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"> <i
                                                            class="fab fa-github"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">

                                <div class="mil-team-card mil-up mil-mb-30">
                                    <img src="img/faces/8.jpg" alt="Team member">
                                    <div class="mil-description">
                                        <div class="mil-secrc-text">
                                            <h5 class="mil-muted mil-mb-5"><a>Spunkie</a></h5>
                                            <p class="mil-link mil-light-soft mil-mb-10">Paw giver</p>
                                            <ul class="mil-social-icons mil-center">
                                                <li><a href="#." target="_blank" class="social-icon"><i
                                                            class="fab fa-instagram"></i></a></li>
                                                <li><a href="#." target="_blank" class="social-icon"><i
                                                            class="fab fa-tiktok"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- team end -->

                <!-- call to action -->
                <section class="mil-soft-bg">
                    <div class="container mil-p-120-120">
                        <div class="row">
                            <div class="col-lg-10">

                                <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">Looking to make
                                    your mark? We'll help you turn <br> your project into a success story.</span>

                            </div>
                        </div>
                        <div class="mil-center">
                            <h2 class="mil-up mil-mb-60">Ready to bring your <span class="mil-thin">ideas to</span>
                                life? <br> We're <span class="mil-thin">here to help</span></h2>
                            <div class="mil-up"><a href="contact.html" class="mil-button mil-arrow-place"><span>Contact
                                        us</span></a></div>
                        </div>
                    </div>
                </section>
                <!-- call to action end -->

                <!-- Footer start -->
                <?php
                 $this->load->view('components/footer');
                 ?>
                <!-- Footer end -->

            </div>
        </div>
        <!-- content -->
    </div>
    <!-- wrapper end -->


    <?php
        $this->load->view('components/footer_links');
    ?>

</body>

</html>