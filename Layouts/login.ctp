<!DOCTYPE html>
<html lang="en" class="app">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo strip_tags(Configure::read('Site.title')); ?></title>
        <meta name="author" content="abuarif" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="keywords" content=""/>
        <link href="<?php echo $this->webroot.'theme/LamanPuteri/images/prasarana_ico.png'; ?>" rel="apple-touch-icon" type="image/x-icon" />
        <link href="<?php echo $this->webroot.'theme/LamanPuteri/images/prasarana_ico.png'; ?>" rel="shortcut icon" type="image/x-icon"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

        <meta name="HandheldFriendly" content="false"/>
        <meta name="MobileOptimized" content="320"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-touch-fullscreen" content="yes"/>

<style type="text/css">

.myBody {
background:  url('<?php echo $this->webroot.'theme/LamanPuteri/images/buzy_office_scenery.jpeg'; ?>') no-repeat center left;
 background-size: 100% 100%;
width: 100%;
height: 100%;
height: auto !important;
min-height:100%;
}

.rcorner {
    /*border-radius: 25px;*/
    border: 10px solid #fff;
    padding: 20px;  
}

</style>
  <?php
        echo $this->Meta->meta();
        echo $this->Layout->feed();
        echo $this->Layout->js();

        echo $this->Html->css(array(
            '../theme/LamanPuteri/css/bootstrap.css',
            '../theme/LamanPuteri/css/animate.css',
            '../theme/LamanPuteri/css/font-awesome.min.css',
            '../theme/LamanPuteri/css/font.css',
            // '../theme/LamanPuteri/js/calendar/bootstrap_calendar.css',
            '../js/fuelux/fuelux.css',
            '../theme/LamanPuteri/js/datepicker/datepicker.css',
            '../theme/LamanPuteri/js/fullcalendar/fullcalendar.css',
            '../theme/LamanPuteri/js/fullcalendar/theme.css',
            '../theme/LamanPuteri/css/app.css',
            
        ));

  ?>

  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
  
</head>
<body class="myBody">
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">

                  <!-- <section class="panel panel-default">     -->
                    <?php //if($title_for_layout == 'MemberIndex') { ?>
                        <?php echo $this->Layout->sessionFlash(); ?>
                    <?php //} ?>
                    
                    <?php echo $this->fetch('content'); ?>
                    <?php echo $this->fetch('body_content'); ?>
                  <!-- </section> -->
                
    </div>
  </section>

  <?php
        // <!-- Bootstrap -->
        echo $this->Html->script(array(
            '../theme/LamanPuteri/js/jquery.min.js',
            '../theme/LamanPuteri/js/bootstrap.js',
            
        ));
        // <!-- App -->
        echo $this->Html->script(array(
            // '../theme/LamanPuteri/js/jquery.min.js',
            '../theme/LamanPuteri/js/app.js',
            '../theme/LamanPuteri/js/app.plugin.js',
            '../theme/LamanPuteri/js/slimscroll/jquery.slimscroll.min.js',
            '../theme/LamanPuteri/js/charts/easypiechart/jquery.easy-pie-chart.js',
            // '../theme/LamanPuteri/js/charts/flot/jquery.flot.pie.min.js',
            '../theme/LamanPuteri/js/charts/sparkline/jquery.sparkline.min.js',
            '../theme/LamanPuteri/js/charts/flot/jquery.flot.min.js',
            '../theme/LamanPuteri/js/charts/flot/jquery.flot.tooltip.min.js',
            '../theme/LamanPuteri/js/charts/flot/jquery.flot.resize.js',
            // '../theme/LamanPuteri/js/charts/flot/jquery.flot.pie.min.js',
            '../theme/LamanPuteri/js/charts/flot/jquery.flot.grow.js',
            '../theme/LamanPuteri/js/charts/flot/demo.js',
            '../theme/LamanPuteri/js/datepicker/bootstrap-datepicker.js',
            // '../theme/LamanPuteri/js/calendar/bootstrap_calendar.js',
            // '../theme/LamanPuteri/js/calendar/demo.js',
            '../theme/LamanPuteri/js/sortable/jquery.sortable.js'
        ));
        //  <!-- App -->
        echo $this->Html->script(array(
            '../theme/LamanPuteri/js/fuelux/fuelux.js',
            '../theme/LamanPuteri/js/jquery-ui-1.10.3.custom.min.js',
            // '../theme/LamanPuteri/js/jquery.ui.touch-punch.min.js',
            '../theme/LamanPuteri/js/fullcalendar/fullcalendar.min.js',
            '../theme/LamanPuteri/js/fullcalendar/demo.js',
        ));

?>  

</body>
</html>