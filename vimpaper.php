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
                                <h1 class="heading text-white mb-3 text-primary">Vim Paper</h1>
                                <p class="para-desc text-white-50">Understand about VIM project, VIM business, dan VIM Vision (10 Min Read)</p>
                                <a href="whitepaper.pdf" target="_blank" class="btn btn-custom mt-2">View Paper</a>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-5 col-md-6 mt-4 pt-2">
                            <div class="home-img text-md-right">
                                <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_zprhw85m.json" background="transparent" speed="1" style="width: 90%;height: 90%;display: block;margin: 0 auto;" loop autoplay></lottie-player>
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