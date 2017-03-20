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
        $less->compileFile('less/264.less', 'css/264.css');
        ?>
        <link href="css/264.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-264">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <!-- copy -->
                        <div class="col-md-4">
                            <div class="navbar-header">
                                <small>All rights reserved 2014-by pebas</small>
                            </div>
                        </div>
                        <!-- bottom-nav -->
                        <div class="col-md-8">
                            <nav class="navbar navbar-default collapsed bottom-nav" role="navigation">
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">					
                                    <ul class="nav navbar-nav">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-38 current_page_item menu-item-397"><a title="Home" href="#" class=" active">Home</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a title="All Shops" href="#">All Shops</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-398"><a title="Top 20" href="#">Top 20</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-395"><a title="Daily Offers" href="#">Daily Offers</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-396"><a title="Expiring" href="#">Expiring</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-399"><a title="Categories" href="#">Categories</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394"><a title="Contact" href="#">Contact</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-400"><a title="Blog" href="#">Blog</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

