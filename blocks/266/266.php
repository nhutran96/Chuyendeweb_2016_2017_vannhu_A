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
        $less->compileFile('less/266.less', 'css/266.css');
        ?>
        <link href="css/266.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="type-266">
            <div class="container">
                <!----------Title contact--------->
                <div class="contact">
                    <h2>Contact</h2>
                </div>
                <!----Line and backgroud green--->
                <div class="distance">
                    <div class="line"></div>
                    <div class="bg-green"></div>
                </div>
                <!-----clear------>
                <div class="clearfix"></div>
                <!-------send mail-------->
                <div class="row">
                    <div class="col-md-6">
                        <div class="line-right">
                            <div class="register ">
                                <h2>
                                    <span class="green"><i class="fa fa-envelope-o"></i>
                                    </span>Send Us A Mesage
                                </h2>
                            </div>
                            <!------form name------------->
                            <div class="form-group">
                                <label>Your name</label>
                                <input type="text" class="form-control form-control-custom"/>
                            </div>
                            <!-------form email------------>
                            <div class="form-group">
                                <label>Your email</label>
                                <input type="text" class="form-control form-control-custom"/>
                            </div>
                            <!--------form subject----------->
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control form-control-custom">
                            </div>
                            <!------------form messeage------>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control form-control-custom message-control" name="message"></textarea>
                            </div>
                            <!-----send Message------->
                            <div class="btn-send">
                                <a href="#">Send Messages</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="main-content">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, dolorum, placeat, pariatur fugit<br>
                                earum ex quidem esse mollitia maiores similique dicta quas hic delectus numquam aspernatur<br>
                                aperiam suscipit doloribus sint autem sequi eligendi tempora temporibus ad blanditiis debitis<br>
                                atque perspiciatis.</p>
                        </div>
                        <!-----main bottom------>
                        <div class="main-content">
                            <h3>Lorem ipsum dolor sit</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, dolorum, placeat, pariatur fugit<br>
                                earum ex quidem esse mollitia maiores similique dicta quas hic delectus numquam aspernatur<br>
                                aperiam suscipit doloribus sint autem sequi eligendi tempora temporibus ad blanditiis debitis<br>
                                atque perspiciatis.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, inventore laboriosam at error<br>
                                veniam ducimus commodi eius sint unde voluptate.
                            </p>

                            <p>Our address:</p>
                            <p>E-mail:info@gmail.com</p>
                            <p>Phone:+(000)111-222-444</p>
                            <p>Phone:+(000)111-222-444</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

