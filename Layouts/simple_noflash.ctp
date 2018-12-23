<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo Configure::read('Site.title');  ?></title>

    <?php     echo $this->Html->css(array(
        '../theme/Inspinia/css/bootstrap.min.css',
        '../theme/Inspinia/css/font-awesome/css/font-awesome.css',
        '../theme/Inspinia/css/plugins/toastr/toastr.min.css',
        '../theme/Inspinia/js/plugins/gritter/jquery.gritter.css',

        '../theme/Inspinia/css/animate.css',
        '../theme/Inspinia/css/style.css',
    ));  
    ?>

   <!-- <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script> -->

    <?php
    // echo $this->Html->script(array(
    //     '../theme/Inspinia/js/jquery-2.1.1.js',
    //     '../theme/Inspinia/js/inspinia.js',
    //     '../theme/Inspinia/js/plugins/pace/pace.min.js',
    //     '../theme/Inspinia/js/inspinia.js',
    //     '../theme/Inspinia/js/plugins/pace/pace.min.js',
    // ));
    ?> 
   

</head>

<body>
    <!-- <div id="wrapper"> -->
        
        <!-- <?php //echo $this->element('menu'); ?> -->

        <!-- <div id="page-wrapper" class="gray-bg"> -->
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header" >
            <div class="container" style=" position: relative; height:5%; top: 10!important; left: 5!important;">
            <img src="<?php echo $this->webroot.'./theme/Inspinia/img/prasarana_logo.png';?>" >
            
            </div>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <!-- <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome <?php echo $this->Session->read('Auth.User.name');  ?></span>
                </li> -->
                


                <li>
                <div style="position: relative;top: 8!important;">
                <button class="btn btn-success"  onclick=" location.href ='<?php echo $this->webroot.'users/users/login'; ?>' "; return false;"  role="button"><i class="fa fa-lock"></i>&nbsp;&nbsp;<span class="bold">Admin</span></a>
                </div>
                <!-- <button class="btn btn-success " type="button"><i class="fa fa-upload"></i>&nbsp;&nbsp;<span class="bold">Upload</span></button> -->
                </li> 

                <li>
                    <!-- <a href="<?php echo $this->webroot.'users/users/login'; ?>" class="btn btn-primary">Admin</a> -->
                </li>

            </ul>

        </nav>
        </div>
            
                <div class="row  border-bottom">
                        <?php  //echo $this->Layout->sessionFlash(); ?>

                        <?php echo $this->fetch('content'); ?>

                        <?php echo $this->fetch('body_content'); ?>



                    
                </div> 
                <div class="footer" style="position:fixed;bottom:0;">
                  
                    <div style="text-align: center">
                    <strong>Developed by: </strong> X-Team, Strategic and Transformation Office (GCOO)  
                    </div>
                </div>
            <!-- </div> -->
            <!-- <div class="small-chat-box fadeInRight animated">

           

        </div> -->
        <!-- <div id="small-chat">

            <span class="badge badge-warning pull-right">5</span>
                <a class="open-small-chat">
                    <i class="fa fa-comments"></i>

                </a>
        </div> -->
        <!-- <div id="right-sidebar"> -->
            <!-- <div class="sidebar-container"> -->
<!--  -->

            <!-- </div> -->



        <!-- </div>         -->
<!-- </div> -->

        
        
        
        
    <!-- </div> -->


    <?php  

            echo $this->Html->script(array(
                '../theme/Inspinia/js/jquery-2.2.4.min.js',
                '../theme/Inspinia/js/bootstrap.js',
                '../theme/Inspinia/js/plugins/metisMenu/jquery.metisMenu.js',
                '../theme/Inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js',
                
                '../theme/Inspinia/js/plugins/flot/jquery.flot.js',
                '../theme/Inspinia/js/plugins/flot/jquery.flot.tooltip.min.js',
                '../theme/Inspinia/js/plugins/flot/jquery.flot.spline.js',
                '../theme/Inspinia/js/plugins/flot/jquery.flot.resize.js',
                '../theme/Inspinia/js/plugins/flot/jquery.flot.pie.js',
                '../theme/Inspinia/js/plugins/flot/jquery.flot.time.js',

                '../theme/Inspinia/js/plugins/peity/jquery.peity.min.js',
                '../theme/Inspinia/js/demo/peity-demo.js',
                
                '../theme/Inspinia/js/plugins/jquery-ui/jquery-ui.min.js',
                '../theme/Inspinia/js/plugins/gritter/jquery.gritter.min.js',
                '../theme/Inspinia/js/plugins/sparkline/jquery.sparkline.min.js',
                '../theme/Inspinia/js/demo/sparkline-demo.js',
                '../theme/Inspinia/js/plugins/chartJs/Chart.min.js',
                '../theme/Inspinia/js/plugins/toastr/toastr.min.js',

                '../theme/Inspinia/js/plugins/pace/pace.min.js',
                '../theme/Inspinia/js/demo/flot-demo.js',


            ));

?>

    <!-- Mainly scripts -->
    <!-- <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script> -->

    <!-- Flot -->
    <!-- <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script> -->

    <!-- Peity -->
    <!-- <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script> -->

    <!-- Custom and plugin javascript -->
    <!-- <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script> -->

    <!-- jQuery UI -->
    <!-- <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script> -->

    <!-- GITTER -->
    <!-- <script src="js/plugins/gritter/jquery.gritter.min.js"></script> -->

    <!-- Sparkline -->
    <!-- <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script> -->

    <!-- Sparkline demo data  -->
    <!-- <script src="js/demo/sparkline-demo.js"></script> -->

    <!-- ChartJS-->
    <!-- <script src="js/plugins/chartJs/Chart.min.js"></script> -->

    <!-- Toastr -->
    <!-- <script src="js/plugins/toastr/toastr.min.js"></script> -->


    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                // toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#464f88"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };

            // var ctx = document.getElementById("doughnutChart").getContext("2d");
            // var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#b5b8cf",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };
            // var ctx = document.getElementById("polarChart").getContext("2d");
            // var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>
</body>
</html>
