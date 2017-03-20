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
        $less->compileFile('less/262.less', 'css/262.css');
        ?>
        <link href="css/262.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-262">
            <div class="container">

                <!----------Title blog--------->
                <div class="blog">
                    <h2>Blog Latest</h2>
                </div>
                <!----Line and backgroud green--->
                <div class="distance">
                    <div class="line"></div>
                    <div class="bg-green"></div>
                </div>
            </div>

            <!-----thumb images-------------->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thum-img">
                            <img src="images/Fotolia_12377076_XXL2-350x215.jpg" alt=""/>
                            <div class="plus">
                                <i class="fa fa-plus-square-o"></i>
                            </div>
                            <!------Info text------->
                            <div class="blog-content">
                                <div class="text">
                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Deleniti, libero, quibusdam sint ex aspernatur
                                        repellendus ipsam labore…</p>
                                </div>
                            </div>
                            <!------blog meta ------->
                            <div class="item-meta">
                                <div class="icon-clock">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i><span class="date"> June 19, 2015</span>
                                </div>
                                <div class="icon-plus">
                                    <i class="fa fa-plus-square-o"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!----Building------->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thum-img">
                            <img src="images/building.jpg" alt=""/>
                            <div class="plus">
                                <i class="fa fa-plus-square-o"></i>
                            </div>
                            <!------Info text------->
                            <div class="blog-content">
                                <div class="text">
                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Deleniti, libero, quibusdam sint ex aspernatur
                                        repellendus ipsam labore…</p>
                                </div>
                            </div>
                            <!------blog meta ------->
                            <div class="item-meta">
                                <div class="icon-clock">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i><span class="date"> June 26, 2014</span>
                                </div>
                                <div class="icon-plus">
                                    <i class="fa fa-plus-square-o"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!----woman glass------->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="thum-img">
                            <img src="images/women-glass.jpg" alt=""/>
                            <div class="plus">
                                <i class="fa fa-plus-square-o"></i>
                            </div>
                            <!------Info text------->
                            <div class="blog-content">
                                <div class="text">
                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Deleniti, libero, quibusdam sint ex aspernatur
                                        repellendus ipsam labore…</p>
                                </div>
                            </div>
                            <!------blog meta ------->
                            <div class="item-meta">
                                <div class="icon-clock">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i><span class="date"> June 26, 2014</span>
                                </div>
                                <div class="icon-plus">
                                    <i class="fa fa-plus-square-o"></i>
                                </div>
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

