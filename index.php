<!DOCTYPE html>
<html lang="en">
<?php
require('head.php');
?>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="sk-circle">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->
    <?php
    require('navbar.php');
    ?>
    <!-- HOME START-->
    <section class="bg-home-1" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="title-heading">
                                <h1 class="heading text-white mb-3 text-primary">Smart Investment with your finger</h1>
                                <p class="para-desc text-white-50">Vim gives you the convenience and ease of Investing crypto in a Decentralized Exchange that supports 12 blockchain networks securely.</p>
                                <div class="mt-4 pt-2">
                                    <a href="#project" class="btn btn-custom mb-2 mr-2">Explore VIM</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-5 col-md-6 mt-4 pt-2">
                            <div class="home-img text-md-right">
                                <lottie-player src="https://assets1.lottiefiles.com/private_files/lf30_c9jqieok.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
                                <!-- <img src="images/home/mobile01.png" class="img-fluid mover-img" alt=""> -->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
            <!--end home desc center-->
        </div>
        <!--end home center-->
    </section>

    <section class="section" style="background-color: #0a0f12;" id="project">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_wu6paacy.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
                </div>
                <!--end col-->

                <div class="col-md-7 mt-4 mt-sm-0 pt-2 pt-sm-0" id="vimswap">
                    <div class="about-app ml-lg-4">
                        <h4 class="text-secondary title text-uppercase mt-2 mb-3">VIM Swap</h4>
                        <p class="text-muted">Swap platform or decentralized currency exchange users can exchange their currency for the currency they want.</p>
                        <a href="javascript:void(0)" class="btn btn-custom mt-2">Launch Swap</a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row mt-5 align-items-center" id="vimwallet">
                <div class="col-md-7 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                    <div class="about-app mr-lg-4">
                        <h4 class="text-secondary title text-uppercase mt-2 mb-3">VIM Wallet</h4>
                        <p class="text-muted">Is a smart digital wallet that integrates a currency exchange platform and a marketplace in real-time that allows users to sell currencies or other assets pear to pear.</p>
                        <a href="javascript:void(0)" class="btn btn-custom mt-2">Launch Wallet</a>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-5 order-1 order-md-2">
                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_wp8virhg.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
                    <!-- <img src="images/ab02.png" class="img-fluid" data-aos="fade-left" alt=""> -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- About End -->

    <!-- Feature Start -->
    <section class="section bg-primary" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h4 class="title text-secondary text-uppercase mt-3 mb-5">Smart Wallet Features</h4>
                        <p class="text-muted mx-auto para-desc mb-0">Splash your dream color Bring your home to lively Colors. We make it a priotity to offer flexible services to accomodate your needs</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row services align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="core-service">
                        <div class="core-service-content mt-4 pt-2 fea-right text-right">
                            <div class="icon ml-4 mt-4">
                                <i class="mdi mdi-wallet"></i>
                            </div>
                            <div class="content">
                                <h4 class="title mb-2 text-secondary">Manage All Your Crypto Assets</h4>
                                <p class="text-muted mb-0">in vim wallet you can send, receive and securely store assets in various network chains.</p>
                            </div>
                        </div>

                        <div class="core-service-content mt-4 pt-2 fea-right text-right">
                            <div class="icon ml-4 mt-4">
                                <i class="mdi mdi-autorenew"></i>
                            </div>
                            <div class="content">
                                <h4 class="title mb-2 text-secondary">Sync External Wallet</h4>
                                <p class="text-muted mb-0">You can synchronize crypto assets with external wallets such as metamask or trustwallet.</p>
                            </div>
                        </div>

                        <div class="core-service-content mt-4 pt-2 fea-right text-right">
                            <div class="icon ml-4 mt-4">
                                <i class="mdi mdi-security"></i>
                            </div>
                            <div class="content">
                                <h4 class="title mb-2 text-secondary">Your Security Data is Priority</h4>
                                <p class="text-muted mb-0">We are very focused on user security, so they can manage their assets safely and comfortably.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 mt-4 pt-2 core-service-img">
                    <div class="ml-lg-4 mr-lg-4">
                        <img src="images/features.png?v=1.1" class="img-fluid mx-auto" alt="">
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6">
                    <div class="core-service">
                        <div class="core-service-content mt-4 pt-2 fea-left">
                            <div class="icon mr-4 mt-4">
                                <i class="mdi mdi-cellphone-link"></i>
                            </div>
                            <div class="content">
                                <h4 class="title mb-2 text-secondary">Use On Any Device</h4>
                                <p class="text-muted mb-0">Vim Apps can be used on your favorite platforms such as laptops, tablets, and mobile phones.</p>
                            </div>
                        </div>

                        <div class="core-service-content mt-4 pt-2 fea-left">
                            <div class="icon mr-4 mt-4">
                                <i class="mdi mdi-animation"></i>
                            </div>
                            <div class="content">
                                <h4 class="title mb-2 text-secondary">Amazing User Experience</h4>
                                <p class="text-muted mb-0">Vim wallet is very easy to use, minimalistic in appearance but has great features. so that it can be operated by everyone.</p>
                            </div>
                        </div>

                        <div class="core-service-content mt-4 pt-2 fea-left">
                            <div class="icon mr-4 mt-4">
                                <i class="mdi mdi-message"></i>
                            </div>
                            <div class=" content">
                                <h4 class="title mb-2 text-secondary">Send Your Message</h4>
                                <p class="text-muted mb-0">You can send a short message to loved ones, friends, business partners in every transaction on any chain network.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Feature End -->
    <!-- Available Feature Start -->
    <section class="section" style="background-color: #0a0f12;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h4 class="title text-secondary text-uppercase mt-3 mb-5">The App Is Available For</h4>
                        <p class="text-muted mx-auto para-desc mb-0">We make it a priority to offer flexible applications for you to access anywhere and anytime.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="device-feature device-border text-center">
                        <div class="icon mb-4 position-relative d-inline-block">
                            <img src="images/icon/pc.png" class="img-fluid" alt="">
                        </div>
                        <div class="content">
                            <h4 class="text-secondary title mb-3">PC / Laptop</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="device-feature device-border text-center">
                        <div class="icon mb-4 position-relative d-inline-block">
                            <img src="images/icon/ipad.png" class="img-fluid" alt="">
                        </div>
                        <div class="content">
                            <h4 class="text-secondary title mb-3">Tablet / Ipad</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="device-feature text-center">
                        <div class="icon mb-4 position-relative d-inline-block">
                            <img src="images/icon/app.png" class="img-fluid" alt="">
                        </div>
                        <div class="content">
                            <h4 class="text-secondary title mb-3">Cell Phone</h4>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center mt-5 pt-2">
                <div class="col-9">
                    <img src="images/mobile-hori.png" class="img-fluid mover-img" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="section" id="review" style="background-color: #070b0d;padding-bottom: 0;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-4 col-12" style="padding: 10px 0;"><img src="images/binance.svg" class="img-fluid" alt=""></div>
                <div class="col-lg-3 col-md-4 col-12" style="padding: 10px 0;"><img src="images/bscscan.svg" class="img-fluid" alt=""></div>
                <div class="col-lg-3 col-md-4 col-12" style="padding: 10px 0;"><img src="images/cmc.svg" class="img-fluid" alt=""></div>
                <div class="col-lg-3 col-md-4 col-12" style="padding: 10px 0;"><img src="images/cg.svg" class="img-fluid" alt=""></div>
            </div>
        </div>

    </section>


    <section class="section" id="download">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h4 class="title text-secondary text-uppercase text-light mt-3 mb-5">App Download</h4>
                        <p class="text-white-50 mx-auto para-desc mb-0">Splash your dream color Bring your home to lively Colors. We make it a priotity to offer flexible services to accomodate your needs</p>
                        <br>
                        <p class="text-white mx-auto para-desc mb-0">-- Coming Soon --</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <ul class="list-unstyled mb-0 app-download text-center">
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/apple.png" class="img-fluid mt-2" alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/google.png" class="img-fluid mt-2" alt=""></a></li>
                    </ul>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>


    <?php
    require('footer.php');
    ?>

</body>

</html>