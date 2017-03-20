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
        $less->compileFile('less/260.less', 'css/260.css');
        ?>
        <link href="css/260.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-1">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                            </button>
                            <a class="navbar-brand" href="#">
                                <img src="images/logo.png" alt=""/>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">All Shops</a></li>
                                <li><a href="#">Top 20</a></li> 
                                <li><a href="#">Daily Offers</a></li>
                                <li><a href="#">Expiring</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Contact</a></li> 
                                <li><a href="#">Blog</a></li>
                                <!-----Drop down------>
                                <li class="active dropdown" >
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-lock"></i> Login</a></li>
                                        <li><a href="#"><i class="fa fa-tags"></i> Submit</a> </li>
                                        <li><a href="#"><i class="fa fa-sign-in"></i> Register </a></li>
                                    </ul>
                                </li>

                                </nav>
                        </div>
                </div>
            </div>
    </body>
</html>
<script>
    $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $(this).toggleClass('open');
            });
</script>