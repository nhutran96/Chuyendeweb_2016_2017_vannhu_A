<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> 

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/267.less', 'css/267.css');
    ?>
    <link href="css/267.css" rel="stylesheet" type="text/css"/>

    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.js" type="text/javascript"></script>

</head>

<body>
    <div class="type-267">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 logo" style="text-align: center;">               
                        <div id="owl-demo" class="owl-carousel">
                            <div class="item"><img src="images/logotype-12.png" alt=""/></div>
                            <div class="item"><img src="images/logotype-22.png" alt=""/></div>
                            <div class="item"> <img src="images/logotype-32.png" alt=""/></div>
                            <div class="item"<img src="images/logotype-42.png" alt=""/></div>
                            <div class="item"> <img src="images/logotype-52.png" alt=""/></div>
                            <div class="item"><img src="images/logotype-62.png" alt=""/></div>
                            <div class="item"><img src="images/logotype-72.png" alt=""/></div>
                            <div class="item"> <img src="images/logotype-82-68x75.png" alt=""/></div>
                            <div class="item"> <img src="images/logotype-12.png" alt=""/></div> 

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                items: 5,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });

        });
    </script>
</body>