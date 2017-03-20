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
        $less->compileFile('less/263.less', 'css/263.css');
        ?>
        <link href="css/263.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-263">
            <!-----info footer ------>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs12">
                            <div class="title-footer">
                                <h2>Newsletter</h2>
                                <p>Latest discounts and coupons</p>
                            </div>
                            <div class="input-email">
                                <form action="#" method="post">
                                    <input type="text" placeholder="Email address" />
                                </form>
                            </div>
                            <div class="btn-sub">
                                <a href="#">Subscribe</a>
                            </div>
                        </div>
                        <!-----FAQ--------->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs12">
                            <div class="title-footer">
                                <h2>FAQ</h2>
                            </div>
                            <div class="text-footer">
                                <p>Duis aute irure dolor?</p>
                                <p>Sunt in culpa qui officia?</p>
                                <p>Cillum dolore eu fugiat?</p>
                                <p>Lorem Ipsum dolor sit?</p>
                                <p>Dolor Sit Amet?</p>
                                <p>Set Do Eiusmod?</p>
                                <p>Excepteur sint occaecat?</p>
                            </div>
                        </div>
                        <!-----About us--------->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs12">
                            <div class="title-footer">
                                <h2>About us</h2>
                            </div>
                            <div class="text-footer">
                                <p>Sed ut perspiciatis unde</p>
                                <p>Omnis iste natus error</p>
                                <p>Sit voluptatem accusantium</p>
                                <p>Doloremque laudantium</p>
                                <p>Totam rem aperiameaque</p>
                                <p>Ipsa quae ab illo inventore veritatis</p>
                            </div>
                        </div>
                        <!----Follow us------------>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs12">
                            <div class="title-footer">
                                <h2>Follow us</h2>
                            </div>
                            <div class="text-footer">
                                <ul class="list-inline">
                                    <li><a href="#" class="active"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#" class="active"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#" class="active"><i class="fa fa-google-plus-square"></i></a></li>
                                </ul>
                            </div>
                            <div class="img-footer">
                                <img src="images/logo_g2.png" alt=""/>
                            </div>
                                
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

