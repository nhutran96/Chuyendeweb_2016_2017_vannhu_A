<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="css/bootstrap.min.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/261.less', 'css/261.css');
        ?>
        <link href="css/261.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-261">
            <div class="info">
                <div class="container">
                    <div class="distance">
                        <div class="row">
                            <!----------INFO CATEGORIES-------->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <h2>Extra Categories</h2>
                                <div class="line">
                                    <span class="line-mask"></span>                                    
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum...</p>
                                </div>
                                <div class="btn-see">
                                    <a href="#">See All</a>
                                </div>
                            </div>
                            <!----------icon computers------------->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="icon">
                                    <div class="thumb-icon">
                                        <i class="fa fa-laptop" aria-hidden="true"></i>
                                        <p>Computers</p>
                                    </div>
                                </div>
                            </div>
                            <!----------icon home------------->

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="icon">
                                    <div class="thumb-icon">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <p>Computers</p>
                                    </div>
                                </div>
                            </div>

                            <!----------icon images------------->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="icon">
                                    <div class="thumb-icon">
                                        <i class="fa fa-image" aria-hidden="true"></i>
                                        <p>Computers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
