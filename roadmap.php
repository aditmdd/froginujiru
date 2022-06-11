<!DOCTYPE html>
<html lang="en">
<?php
require('head.php');
?>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="css/timeline.min.css" rel="stylesheet">

<body>

    <?php
    require('navbar.php');
    ?>
    <!-- HOME START-->
    <section class="bg-home-1" style="background-image:url('images/bg-1.jpg')" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="title-heading">
                                <h1 class="heading text-white mb-3 text-primary">Vim Roadmap</h1>
                                <p class="para-desc text-white-50">vim finance is a long term project, we designed a roadmap with 4 phases. where each phase becomes an important point in a journey.</p>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-5 col-md-6 mt-4 pt-2">
                            <div class="home-img text-md-right">
                                <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_Pq51ZX.json" background="transparent" speed="1" style="width: 90%;height: 90%;display: block;margin: 0 auto;" loop autoplay></lottie-player>
                                <!-- <img src="images/home/mobile01.png" class="img-fluid mover-img" alt=""> -->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                </div>
                <!--end container-->
            </div>
            <!--end home desc center-->
        </div>
        <!--end home center-->
    </section>
    <main style="background-color:#070b0d;padding-top:30px;">
        <section class="page-section">
            <div class="container">
                <div class="timeline">
                    <div class="timeline__wrap">
                        <div class="timeline__items">
                            <div class="timeline__item">
                                <div class="timeline__content">
                                    <h2>1st Phase</h2>
                                    <ul>
                                        <li>Private Sale</li>
                                        <li>Main Website Launch</li>
                                        <li>Community Building</li>
                                        <li>Presale Start</li>
                                        <li>Public Launch</li>
                                        <li>CMC-CG listing</li>
                                        <li>CEX listing - p2pb2b.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content">
                                    <h2>2nd Phase</h2>
                                    <ul>
                                        <li>VIM Swap & Vim Wallet Launch</li>
                                        <li>Utility Branding</li>
                                        <li>Top Influencer Promotion</li>
                                        <li>VIM Ads Banner Marketing</li>
                                        <li>CEX listing - xt.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content">
                                    <h2>3rd Phase</h2>
                                    <ul>
                                        <li>Website V2 Improvement </li>
                                        <li>VIM Finance Eco-System</li>
                                        <li>Manual Burn Event</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content">
                                    <h2>4th Phase</h2>
                                    <ul>
                                        <li>Business Expantion </li>
                                        <li>VIM Paylater Release</li>
                                        <li>Partnership</li>
                                        <li>More CEX Listing - Gate.io</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content">
                                    <h2>5th Phase</h2>
                                    <p>TBA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    require('footer.php');
    ?>
    <script type="text/javascript" src="js/timeline.min.js"></script>
    <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
    </script>
</body>

</html>