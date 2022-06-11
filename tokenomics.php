<!DOCTYPE html>
<html lang="en">
<?php
require('head.php');
?>


<body>

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
                        <div class="col-lg-12 col-md-12">
                            <div class="title-heading">
                                <h1 class="heading text-white mb-3 text-primary">Token Information</h1>
                                <p class="para-desc text-white-50">VIM uses a tokenomics system that is friendly to all investors.</p>
                                <ul style="color: #ffffff95;">
                                    <li>Total Supply: 100,000,000,000.</li>
                                    <li>Slippage Buy: 6%. </li>
                                    <li>Slippage Sell: 9%. </li>
                                </ul>
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
                    <div class="col-md-6 col-xs-12" style="padding: 20px;">
                        <canvas id="tokenDistribution" width="100" height="100"></canvas>
                    </div>
                    <div class=" col-md-6 col-xs-12" style="padding: 20px;">
                        <canvas id="Tokenomics" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    require('footer.php');
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <script>
        new Chart(document.getElementById("tokenDistribution"), {
            type: 'pie',
            data: {
                labels: ["Private Sale (10%)", "Presale (45.6%)", "Pancake Supply (27.3%)"],
                datasets: [{
                    label: "Population (millions)",
                    backgroundColor: ["#eb3b5a", "#3867d6", "#20bf6b"],
                    data: [3, 5, 2],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    position: "top",
                    text: "Token Distribution",
                    fontSize: 18,
                    fontColor: "#5ff",
                },
                legend: {
                    display: true,
                    position: 'bottom'
                }
            }
        });
    </script>
    <script>
        new Chart(document.getElementById("Tokenomics"), {
            type: 'pie',
            data: {
                labels: ["Dev Wallet (3%)", "Marketing (5%)", "RND (2%)", "Manual Burn (4.1%)", "Private Sale (10%)", "Presale (45.6%)", "Pancake (27.3%)", "Team Wallet (3%)"],
                datasets: [{
                    label: "Population (millions)",
                    backgroundColor: ["#eb3b5a", "#fa8231", "#20bf6b", "#0fb9b1", "#2d98da", "#3867d6", "#8854d0", "#4b6584"],
                    data: [3, 5, 2, 4.1, 10, 45.6, 27.3, 3, ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    position: "top",
                    text: ['Tokenomics'],
                    fontSize: 18,
                    fontColor: "#5ff",
                },
                legend: {
                    display: true,
                    position: 'bottom'
                }
            }
        });
    </script>
</body>

</html>