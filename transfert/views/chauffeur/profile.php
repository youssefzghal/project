<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)

session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['motDePasse']))
{

    ?>
    <?PHP

    include "../../dbConfig/config.php";
    include "../../entities/transfert.php";
    include "../../core/transfertCore.php";


    $cCore=new transfertCore();
    $nombreDemandes=$cCore->nombreDemandes($_SESSION['login']);
    $nombreNext=$cCore->nombreNext($_SESSION['login']);
    $nombreEffectue=$cCore->nombreEffectue($_SESSION['login']);

    ?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <title>
            Tableau de bord | <?php echo  $_SESSION['prenom']." ". $_SESSION['nom']; ?>
        </title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Nucleo Icons -->
        <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="assets/demo/demo.css" rel="stylesheet" />
    </head>

    <body class="">
    <div class="wrapper">
        <div class="sidebar">
            <!--
              Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
          -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:void(0)" class="simple-text logo-mini">
                        <img src="assets/img/favicon.png"
                    </a>
                    <a href="javascript:void(0)" class="simple-text logo-normal">
                        <?php echo $_SESSION['login']; ?>
                    </a>
                </div>
                <ul class="nav">
                    <li class="active ">
                        <a href="./profile.php">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Tableau de bord</p>
                        </a>
                    </li>
                    <li >
                        <a href="./myprofile.php">
                            <i class="tim-icons icon-single-02"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="./notconfirmed.php">
                            <i class="tim-icons icon-bell-55"></i>
                            <p>Demandes de transferts</p>
                        </a>
                    </li>
                    <li>
                        <a href="./transferts.php">
                            <i class="tim-icons icon-delivery-fast"></i>
                            <p>Transferts acceptés</p>
                        </a>
                    </li>
                    <li>
                        <a href="./contactadmin.php">
                            <i class="tim-icons icon-email-85"></i>
                            <p>Contacter L'administration</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:void(0)"><?php echo  $_SESSION['prenom']." ". $_SESSION['nom']; ?></a>

                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">

                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="<?php echo $_SESSION['photo']; ?>" alt="Profile Photo">
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">
                                        Log out
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link">
                                        <a href="myprofile.php" class="nav-item dropdown-item">Profile</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="nav-link">
                                        <a href="logout.php" class="nav-item dropdown-item">Déconnexion</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
            <div class="content">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Nombre de demandes de transferts</h5>
                                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i><?php echo $nombreDemandes ; ?></h3>
                            </div>
                            <div hidden class="card-body">
                                <div class="chart-area"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                    <canvas id="chartLinePurple" width="311" height="220" class="chartjs-render-monitor" style="display: block; width: 311px; height: 220px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Nombre de prochains transferts</h5>
                                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i><?php echo $nombreNext ; ?></h3>
                            </div>
                            <div hidden class="card-body">
                                <div class="chart-area"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                    <canvas id="CountryChart" width="311" height="220" class="chartjs-render-monitor" style="display: block; width: 311px; height: 220px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Nombre de transfert effectué</h5>
                                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i><?php echo $nombreEffectue ; ?></h3>
                            </div>
                            <div  hidden class="card-body">
                                <div class="chart-area"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                    <canvas id="chartLineGreen" width="311" height="220" class="chartjs-render-monitor" style="display: block; width: 311px; height: 220px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-chart">
                            <div class="card-header ">
                                <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <h5 class="card-category">Statistique </h5>
                                        <h2 class="card-title">Nombre de transfert </h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                            <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                                <input type="radio" name="options" checked="">
                                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Par mois</span>
                                                <span class="d-block d-sm-none">
                          <i class="tim-icons icon-single-02"></i>
                        </span>
                                            </label>
                                            <label class="btn btn-sm btn-primary btn-simple" id="1">
                                                <input type="radio" class="d-none d-sm-none" name="options">
                                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Pars année</span>
                                                <span class="d-block d-sm-none">
                          <i class="tim-icons icon-gift-2"></i>
                        </span>
                                            </label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                    <canvas id="chartBig1" width="1014" height="220" class="chartjs-render-monitor" style="display: block; width: 1014px; height: 220px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <?php echo $_SESSION['login']; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <div class="copyright">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> made with <i class="tim-icons icon-heart-2"></i> by
                        <a href="javascripcard card-chartt:void(0)" target="_blank"><?php echo $_SESSION['login']; ?></a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->

    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');
                $main_panel = $('.main-panel');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



                $('.fixed-plugin a').click(function(event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data', new_color);
                    }

                    if ($main_panel.length != 0) {
                        $main_panel.attr('data', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data', new_color);
                    }
                });

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (white_color == true) {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }


                });

                $('.light-badge').click(function() {
                    $('body').addClass('white-content');
                });

                $('.dark-badge').click(function() {
                    $('body').removeClass('white-content');
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            type = ['primary', 'info', 'success', 'warning', 'danger'];

            demo = {
                initPickColor: function() {
                    $('.pick-class-label').click(function() {
                        var new_class = $(this).attr('new-class');
                        var old_class = $('#display-buttons').attr('data-class');
                        var display_div = $('#display-buttons');
                        if (display_div.length) {
                            var display_buttons = display_div.find('.btn');
                            display_buttons.removeClass(old_class);
                            display_buttons.addClass(new_class);
                            display_div.attr('data-class', new_class);
                        }
                    });
                },

                initDocChart: function() {
                    chartColor = "#FFFFFF";

                    // General configuration for the charts with Line gradientStroke
                    gradientChartOptionsConfiguration = {
                        maintainAspectRatio: false,
                        legend: {
                            display: false
                        },
                        tooltips: {
                            bodySpacing: 4,
                            mode: "nearest",
                            intersect: 0,
                            position: "nearest",
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        responsive: true,
                        scales: {
                            yAxes: [{
                                display: 0,
                                gridLines: 0,
                                ticks: {
                                    display: false
                                },
                                gridLines: {
                                    zeroLineColor: "transparent",
                                    drawTicks: false,
                                    display: false,
                                    drawBorder: false
                                }
                            }],
                            xAxes: [{
                                display: 0,
                                gridLines: 0,
                                ticks: {
                                    display: false
                                },
                                gridLines: {
                                    zeroLineColor: "transparent",
                                    drawTicks: false,
                                    display: false,
                                    drawBorder: false
                                }
                            }]
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 15,
                                bottom: 15
                            }
                        }
                    };

                    ctx = document.getElementById('lineChartExample').getContext("2d");

                    gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
                    gradientStroke.addColorStop(0, '#80b6f4');
                    gradientStroke.addColorStop(1, chartColor);

                    gradientFill = ctx.createLinearGradient(0, 170, 0, 50);
                    gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
                    gradientFill.addColorStop(1, "rgba(249, 99, 59, 0.40)");

                    myChart = new Chart(ctx, {
                        type: 'line',
                        responsive: true,
                        data: {
                            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                            datasets: [{
                                label: "Active Users",
                                borderColor: "#f96332",
                                pointBorderColor: "#FFF",
                                pointBackgroundColor: "#f96332",
                                pointBorderWidth: 2,
                                pointHoverRadius: 4,
                                pointHoverBorderWidth: 1,
                                pointRadius: 4,
                                fill: true,
                                backgroundColor: gradientFill,
                                borderWidth: 2,
                                data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 630]
                            }]
                        },
                        options: gradientChartOptionsConfiguration
                    });
                },

                initDashboardPageCharts: function() {

                    gradientChartOptionsConfigurationWithTooltipBlue = {
                        maintainAspectRatio: false,
                        legend: {
                            display: false
                        },

                        tooltips: {
                            backgroundColor: '#f5f5f5',
                            titleFontColor: '#333',
                            bodyFontColor: '#666',
                            bodySpacing: 4,
                            xPadding: 12,
                            mode: "nearest",
                            intersect: 0,
                            position: "nearest"
                        },
                        responsive: true,
                        scales: {
                            yAxes: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: false,
                                    color: 'rgba(29,140,248,0.0)',
                                    zeroLineColor: "transparent",

                                    stepSize: 2 ,

                                },
                                ticks: {
                                    suggestedMin: 0,
                                    suggestedMax: 20,
                                    padding: 20,
                                    fontColor: "#2380f7",
                                    stepSize: 2 ,
                                }
                            }],

                            xAxes: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: false,
                                    color: 'rgba(29,140,248,0.1)',
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    padding: 20,
                                    fontColor: "#2380f7"
                                }
                            }]
                        }
                    };

                    gradientChartOptionsConfigurationWithTooltipPurple = {
                        maintainAspectRatio: false,
                        legend: {
                            display: false
                        },

                        tooltips: {
                            backgroundColor: '#f5f5f5',
                            titleFontColor: '#333',
                            bodyFontColor: '#666',
                            bodySpacing: 4,
                            xPadding: 12,
                            mode: "nearest",
                            intersect: 0,
                            position: "nearest"
                        },
                        responsive: true,
                        scales: {
                            yAxes: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: false,
                                    color: 'rgba(29,140,248,0.0)',
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    suggestedMin: 0,
                                    suggestedMax: 20,
                                    padding: 20,
                                    fontColor: "#9a9a9a"
                                }
                            }],

                            xAxes: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: false,
                                    color: 'rgba(225,78,202,0.1)',
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    padding: 20,
                                    fontColor: "#9a9a9a"
                                }
                            }]
                        }
                    };

                    gradientChartOptionsConfigurationWithTooltipOrange = {
                        maintainAspectRatio: false,
                        legend: {
                            display: false
                        },

                        tooltips: {
                            backgroundColor: '#f5f5f5',
                            titleFontColor: '#333',
                            bodyFontColor: '#666',
                            bodySpacing: 4,
                            xPadding: 12,
                            mode: "nearest",
                            intersect: 0,
                            position: "nearest"
                        },
                        responsive: true,
                        scales: {
                            yAxes: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: false,
                                    color: 'rgba(29,140,248,0.0)',
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    suggestedMin: 0,
                                    suggestedMax: 20,
                                    padding: 20,
                                    fontColor: "#ff8a76"
                                }
                            }],

                            xAxes: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: false,
                                    color: 'rgba(220,53,69,0.1)',
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    padding: 20,
                                    fontColor: "#ff8a76"
                                }
                            }]
                        }
                    };

                    gradientChartOptionsConfigurationWithTooltipGreen = {
                        maintainAspectRatio: false,
                        legend: {
                            display: false
                        },

                        tooltips: {
                            backgroundColor: '#f5f5f5',
                            titleFontColor: '#333',
                            bodyFontColor: '#666',
                            bodySpacing: 4,
                            xPadding: 12,
                            mode: "nearest",
                            intersect: 0,
                            position: "nearest"
                        },
                        responsive: true,
                        scales: {
                            yAxes: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: false,
                                    color: 'rgba(29,140,248,0.0)',
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    suggestedMin: 0,
                                    suggestedMax: 20,
                                    padding: 20,
                                    fontColor: "#9e9e9e"
                                }
                            }],

                            xAxes: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: false,
                                    color: 'rgba(0,242,195,0.1)',
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    padding: 20,
                                    fontColor: "#9e9e9e"
                                }
                            }]
                        }
                    };


                    gradientBarChartConfiguration = {
                        maintainAspectRatio: false,
                        legend: {
                            display: false
                        },

                        tooltips: {
                            backgroundColor: '#f5f5f5',
                            titleFontColor: '#333',
                            bodyFontColor: '#666',
                            bodySpacing: 4,
                            xPadding: 12,
                            mode: "nearest",
                            intersect: 0,
                            position: "nearest"
                        },
                        responsive: true,
                        scales: {
                            yAxes: [{

                                gridLines: {
                                    drawBorder: false,
                                    color: 'rgba(29,140,248,0.1)',
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    suggestedMin: 0,
                                    suggestedMax: 20,
                                    padding: 20,
                                    fontColor: "#9e9e9e"
                                }
                            }],

                            xAxes: [{

                                gridLines: {
                                    drawBorder: false,
                                    color: 'rgba(29,140,248,0.1)',
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    padding: 20,
                                    fontColor: "#9e9e9e"
                                }
                            }]
                        }
                    };

                    var ctx = document.getElementById("chartLinePurple").getContext("2d");

                    var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

                    gradientStroke.addColorStop(1, 'rgba(72,72,176,0.2)');
                    gradientStroke.addColorStop(0.2, 'rgba(72,72,176,0.0)');
                    gradientStroke.addColorStop(0, 'rgba(119,52,169,0)'); //purple colors

                    var data = {
                        labels: ['JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
                        datasets: [{
                            label: "Data",
                            fill: true,
                            backgroundColor: gradientStroke,
                            borderColor: '#d048b6',
                            borderWidth: 2,
                            borderDash: [],
                            borderDashOffset: 0.0,
                            pointBackgroundColor: '#d048b6',
                            pointBorderColor: 'rgba(255,255,255,0)',
                            pointHoverBackgroundColor: '#d048b6',
                            pointBorderWidth: 20,
                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 15,
                            pointRadius: 4,
                            data: [80, 100, 70, 80, 120, 80],
                        }]
                    };

                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: data,
                        options: gradientChartOptionsConfigurationWithTooltipPurple
                    });


                    var ctxGreen = document.getElementById("chartLineGreen").getContext("2d");

                    var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

                    gradientStroke.addColorStop(1, 'rgba(66,134,121,0.15)');
                    gradientStroke.addColorStop(0.4, 'rgba(66,134,121,0.0)'); //green colors
                    gradientStroke.addColorStop(0, 'rgba(66,134,121,0)'); //green colors

                    var data = {
                        labels: ['JUL', 'AUG', 'SEP', 'OCT', 'NOV'],
                        datasets: [{
                            label: "Le nombre est ",
                            fill: true,
                            backgroundColor: gradientStroke,
                            borderColor: '#00d6b4',
                            borderWidth: 2,
                            borderDash: [],
                            borderDashOffset: 0.0,
                            pointBackgroundColor: '#00d6b4',
                            pointBorderColor: 'rgba(255,255,255,0)',
                            pointHoverBackgroundColor: '#00d6b4',
                            pointBorderWidth: 20,
                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 15,
                            pointRadius: 4,
                            data: [90, 27, 60, 12, 80],
                        }]
                    };

                    var myChart = new Chart(ctxGreen, {
                        type: 'line',
                        data: data,
                        options: gradientChartOptionsConfigurationWithTooltipGreen

                    });



                    var chart_labels = ['JAN', 'FEV', 'MAR', 'AVR', 'MAI', 'JUN', 'JUL', 'AUT', 'SEP', 'OCT', 'NOV', 'DEC'];
                    var chart_labels2 = ['2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024', '2025', '2026'];

                    var chart_data = [<?php echo nombreParMois($_SESSION['login'],"01");?>, <?php echo nombreParMois($_SESSION['login'],"02");?>, <?php echo nombreParMois($_SESSION['login'],"03");?>, <?php echo nombreParMois($_SESSION['login'],"04");?>, <?php echo nombreParMois($_SESSION['login'],"05");?>, <?php echo nombreParMois($_SESSION['login'],"06");?>, <?php echo nombreParMois($_SESSION['login'],"07");?>, <?php echo nombreParMois($_SESSION['login'],"08");?>, <?php echo nombreParMois($_SESSION['login'],"09");?>, <?php echo nombreParMois($_SESSION['login'],"10");?>, <?php echo nombreParMois($_SESSION['login'],"11");?>, <?php echo nombreParMois($_SESSION['login'],"12");?>];
                    var chart_data2 = [<?php echo nombreParAnnee($_SESSION['login'],"2015");?>, <?php echo nombreParAnnee($_SESSION['login'],"2016");?>, <?php echo nombreParAnnee($_SESSION['login'],"2017");?>, <?php echo nombreParAnnee($_SESSION['login'],"2018");?>, <?php echo nombreParAnnee($_SESSION['login'],"2019");?>, <?php echo nombreParAnnee($_SESSION['login'],"2020");?>, <?php echo nombreParAnnee($_SESSION['login'],"2021");?>, <?php echo nombreParAnnee($_SESSION['login'],"2022");?>, <?php echo nombreParAnnee($_SESSION['login'],"2023");?>, <?php echo nombreParAnnee($_SESSION['login'],"2024");?>, <?php echo nombreParAnnee($_SESSION['login'],"2025");?>, <?php echo nombreParAnnee($_SESSION['login'],"2026");?>];


                    var ctx = document.getElementById("chartBig1").getContext('2d');

                    var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

                    gradientStroke.addColorStop(1, 'rgba(72,72,176,0.1)');
                    gradientStroke.addColorStop(0.4, 'rgba(72,72,176,0.0)');
                    gradientStroke.addColorStop(0, 'rgba(119,52,169,0)'); //purple colors
                    var config = {
                        type: 'line',
                        data: {
                            labels: chart_labels,
                            datasets: [{
                                label: "Le nombre est ",
                                fill: true,
                                backgroundColor: gradientStroke,
                                borderColor: '#d346b1',
                                borderWidth: 2,
                                borderDash: [],
                                borderDashOffset: 0.0,
                                pointBackgroundColor: '#d346b1',
                                pointBorderColor: 'rgba(255,255,255,0)',
                                pointHoverBackgroundColor: '#d346b1',
                                pointBorderWidth: 20,
                                pointHoverRadius: 4,
                                pointHoverBorderWidth: 15,
                                pointRadius: 4,
                                data: chart_data,
                            }]
                        },
                        options: gradientChartOptionsConfigurationWithTooltipPurple
                    };
                    var myChartData = new Chart(ctx, config);
                    $("#0").click(function() {
                        var data = myChartData.config.data;
                        data.datasets[0].data = chart_data;
                        data.labels = chart_labels;
                        myChartData.update();
                    });
                    $("#1").click(function() {
                        var data = myChartData.config.data;
                        data.datasets[0].data = chart_data2;
                        data.labels = chart_labels2;
                        myChartData.update();
                    });

                    $("#2").click(function() {
                        var chart_data =  [<?php echo nombreParMois($_SESSION['login'],"01");?>, <?php echo nombreParMois($_SESSION['login'],"02");?>, <?php echo nombreParMois($_SESSION['login'],"03");?>, <?php echo nombreParMois($_SESSION['login'],"04");?>, <?php echo nombreParMois($_SESSION['login'],"05");?>, <?php echo nombreParMois($_SESSION['login'],"06");?>, <?php echo nombreParMois($_SESSION['login'],"07");?>, <?php echo nombreParMois($_SESSION['login'],"08");?>, <?php echo nombreParMois($_SESSION['login'],"09");?>, <?php echo nombreParMois($_SESSION['login'],"10");?>, <?php echo nombreParMois($_SESSION['login'],"11");?>, <?php echo nombreParMois($_SESSION['login'],"12");?>];

                        var data = myChartData.config.data;
                        data.datasets[0].data = chart_data;
                        data.labels = chart_labels;
                        myChartData.update();
                    });


                    var ctx = document.getElementById("CountryChart").getContext("2d");

                    var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

                    gradientStroke.addColorStop(1, 'rgba(29,140,248,0.2)');
                    gradientStroke.addColorStop(0.4, 'rgba(29,140,248,0.0)');
                    gradientStroke.addColorStop(0, 'rgba(29,140,248,0)'); //blue colors


                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        responsive: true,
                        legend: {
                            display: false
                        },
                        data: {
                            labels: ['USA', 'GER', 'AUS', 'UK', 'RO', 'BR'],
                            datasets: [{
                                label: "Countries",
                                fill: true,
                                backgroundColor: gradientStroke,
                                hoverBackgroundColor: gradientStroke,
                                borderColor: '#1f8ef1',
                                borderWidth: 2,
                                borderDash: [],
                                borderDashOffset: 0.0,
                                data: [53, 20, 10, 80, 100, 45],
                            }]
                        },
                        options: gradientBarChartConfiguration
                    });

                },

                initGoogleMaps: function() {
                    var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
                    var mapOptions = {
                        zoom: 13,
                        center: myLatlng,
                        scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
                        styles: [{
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#1d2c4d"
                            }]
                        },
                            {
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#8ec3b9"
                                }]
                            },
                            {
                                "elementType": "labels.text.stroke",
                                "stylers": [{
                                    "color": "#1a3646"
                                }]
                            },
                            {
                                "featureType": "administrative.country",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                    "color": "#4b6878"
                                }]
                            },
                            {
                                "featureType": "administrative.land_parcel",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#64779e"
                                }]
                            },
                            {
                                "featureType": "administrative.province",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                    "color": "#4b6878"
                                }]
                            },
                            {
                                "featureType": "landscape.man_made",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                    "color": "#334e87"
                                }]
                            },
                            {
                                "featureType": "landscape.natural",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#023e58"
                                }]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#283d6a"
                                }]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#6f9ba5"
                                }]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels.text.stroke",
                                "stylers": [{
                                    "color": "#1d2c4d"
                                }]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#023e58"
                                }]
                            },
                            {
                                "featureType": "poi.park",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#3C7680"
                                }]
                            },
                            {
                                "featureType": "road",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#304a7d"
                                }]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#98a5be"
                                }]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels.text.stroke",
                                "stylers": [{
                                    "color": "#1d2c4d"
                                }]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#2c6675"
                                }]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#9d2a80"
                                }]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "geometry.stroke",
                                "stylers": [{
                                    "color": "#9d2a80"
                                }]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#b0d5ce"
                                }]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "labels.text.stroke",
                                "stylers": [{
                                    "color": "#023e58"
                                }]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#98a5be"
                                }]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "labels.text.stroke",
                                "stylers": [{
                                    "color": "#1d2c4d"
                                }]
                            },
                            {
                                "featureType": "transit.line",
                                "elementType": "geometry.fill",
                                "stylers": [{
                                    "color": "#283d6a"
                                }]
                            },
                            {
                                "featureType": "transit.station",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#3a4762"
                                }]
                            },
                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [{
                                    "color": "#0e1626"
                                }]
                            },
                            {
                                "featureType": "water",
                                "elementType": "labels.text.fill",
                                "stylers": [{
                                    "color": "#4e6d70"
                                }]
                            }
                        ]
                    };

                    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        title: "Hello World!"
                    });

                    // To add the marker to the map, call setMap();
                    marker.setMap(map);
                },

                showNotification: function(from, align) {
                    color = Math.floor((Math.random() * 4) + 1);

                    $.notify({
                        icon: "tim-icons icon-bell-55",
                        message: "Welcome to <b>Black Dashboard</b> - a beautiful freebie for every web developer."

                    }, {
                        type: type[color],
                        timer: 8000,
                        placement: {
                            from: from,
                            align: align
                        }
                    });
                }

            };


            demo.initDashboardPageCharts();

        });
    </script>
    </body>

    </html>
<?php } else {

    header('Location:login.php');

} ?>