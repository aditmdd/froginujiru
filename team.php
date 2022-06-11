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
                                <h1 class="heading text-white mb-3 text-primary">Core Team</h1>
                                <p class="para-desc text-white-50">The Vim team is very experienced in the cryptocurrency field. and each has its own focus, starting from solidity programming, business development, and community building.</p>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-5 col-md-6 mt-4 pt-2 order-first order-md-last">
                            <div class="home-img text-md-right">
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_wg0utmug.json" background="transparent" speed="1" style="width: 90%;height: 90%;display: block;margin: 0 auto;" loop autoplay></lottie-player>
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
                <div class="row">
                    <div class="col-12 col-md-3" style="padding-bottom: 40px;">
                        <div class="team">
                            <div class="teampic" align="center">
                                <img src="images/ceo.svg?v=1.1" alt="Vim Finance" width="150">
                            </div>
                            <br>
                            <p style="text-align:center;" class="text-primary">Grissham Adley - CEO</p>
                            <ul class="list-unstyled text-center social-icon social mb-0 mt-4 mt-sm-0">
                                <li class="list-inline-item"><a href="https://t.me/grissham_vim/"><i class="mdi mdi-telegram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-3" style="padding-bottom: 40px;">
                        <div class="team">
                            <div class="teampic" align="center">
                                <img src="images/cto.svg?v=1.1" alt="Vim Finance" width="150">
                            </div>
                            <br>
                            <p style="text-align:center;" class="text-primary">Cleve Alfie - CTO</p>
                            <ul class="list-unstyled text-center social-icon social mb-0 mt-4 mt-sm-0">
                                <li class="list-inline-item"><a href="https://t.me/typescript7/"><i class="mdi mdi-telegram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-3" style="padding-bottom: 40px;">
                        <div class="team">
                            <div class="teampic" align="center">
                                <img src="images/cpo.svg?v=1.1" alt="Vim Finance" width="150">
                            </div>
                            <br>
                            <p style="text-align:center;" class="text-primary">Steven Kent - CPO</p>
                            <ul class="list-unstyled text-center social-icon social mb-0 mt-4 mt-sm-0">
                                <li class="list-inline-item"><a href="https://t.me/steventech/"><i class="mdi mdi-telegram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-3" style="padding-bottom: 40px;">
                        <div class="team">
                            <div class="teampic" align="center">
                                <img src="images/cmo.svg?v=1.1" alt="Vim Finance" width="150">
                            </div>
                            <br>
                            <p style="text-align:center;" class="text-primary">James Billy - CMO</p>
                            <ul class="list-unstyled text-center social-icon social mb-0 mt-4 mt-sm-0">
                                <li class="list-inline-item"><a href="https://t.me/Vim_finance2335/"><i class="mdi mdi-telegram"></i></a></li>
                            </ul>
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