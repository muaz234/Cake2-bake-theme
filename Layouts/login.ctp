<!DOCTYPE html>
<html lang="en" class="app">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo strip_tags(Configure::read('Site.title')); ?></title>
        <meta name="author" content="abuarif" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="keywords" content=""/>
        <link href="<?php echo $this->webroot.'theme/Inspinia/img/prasarana_ico.png'; ?>" rel="apple-touch-icon" type="image/x-icon" />
        <link href="<?php echo $this->webroot.'theme/Inspinia/img/prasarana_ico.png'; ?>" rel="shortcut icon" type="image/x-icon"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

        <meta name="HandheldFriendly" content="false"/>
        <meta name="MobileOptimized" content="320"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-touch-fullscreen" content="yes"/>

<style type="text/css">

.bg-image {
background: url('<?php echo $this->webroot.'theme/Inspinia/img/buzy_office_scenery.jpeg'; ?>');
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
            '../theme/Inspinia/css/bootstrap.min.css',
        '../theme/Inspinia/css/font-awesome/css/font-awesome.css',
        '../theme/Inspinia/css/plugins/toastr/toastr.min.css',
        '../theme/Inspinia/js/plugins/gritter/jquery.gritter.css',

        '../theme/Inspinia/css/animate.css',
        '../theme/Inspinia/css/style.css',
            
        ));

  ?>

  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
  
</head>
<body class="bg-image">
    <section id="content" class="wrapper wrapper-content animated fadeInRight">  

        <!-- <div class=""> -->
                <div class="container-fluid" style="width: 550px;">
                    <?php  echo $this->Layout->sessionFlash(); ?>
                </div>
                    <?php echo $this->fetch('content'); ?>
                    <?php echo $this->fetch('body_content'); ?>

        

                  
        <!-- </div> -->
    </section>

  <!-- </section> -->

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

</body>
</html>