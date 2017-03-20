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
        $less->compileFile('less/265.less', 'css/265.css');
        ?>
        <link href="css/265.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-265">
            <div class="banner">
                <div class="container">
                    <div class="categories">
                        <h1>Contact</h1>
                        <p>Over 17 working discount & coupon codes is active for 3 users, enjoy!</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <!-------type shop name-------->
                        <div class="col-md-6 col-xs-12">
                            <form class="form-horizontal search-coupon" role="search">
                                <div class="form-group has-feedback">
                                    <span class="fa fa-search form-control-feedback icon-left"></span>
                                    <input type="text" name="search" id="search" class="form-control" placeholder="Type shop name">
                                    <span class="fa fa-angle-down form-control-feedback"></span>
                                </div>
                            </form>
                        </div>
                        <!-------categori-------->
                        <div class="col-md-6 xs-12">
                            <div class="btn-group btn-categories form-control">
                                <button type="button" class="btn btn-categories btn-default btn-default btn-lg dropdown-toggle form-control" data-toggle="dropdown">
                                    <span class="fa fa-bars btn-left-icon">    Categories</span>									
                                    <span class="fa fa-angle-down pull-right categories-angle-icon"></span>
                                </button>
                                <ul class="dropdown-menu dd-custom dd-widget" role="menu">
                                    <li><a href="#"><i class="fa fa-laptop fa-fw"></i> Computers</a></li>
                                    <li><a href="#"><i class="fa fa-home fa-fw"></i> House</a></li>
                                    <li><a href="#"><i class="fa fa-picture-o fa-fw"></i> Photography</a></li>
                                    <li><a href="#"><i class="fa fa-users fa-fw"></i> Students</a></li>
                                    <li><a href="#"><i class="fa fa-scissors fa-fw"></i> Technology</a></li>
                                    <li><a href="#"><i class="fa fa-child fa-fw"></i> Baby</a></li>
                                    <li><a href="#"><i class="fa fa-book fa-fw"></i> Books &amp; Movies</a></li>
                                    <li><a href="#"><i class="fa fa-car fa-fw"></i> Cars</a></li>
                                    <li><a href="#"><i class="fa fa-music fa-fw"></i> Music</a></li>
                                    <li><a href="#"><i class="fa fa-paw fa-fw"></i> Pet Care</a></li>
                                    <li><a href="#"><i class="fa fa-plane fa-fw"></i> Travel</a></li>								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

