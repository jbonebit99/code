<!doctype html>
<?php
$chucnang = $controller;

if (isset($_GET["ctl"])) {
    $chucnang = $_GET["ctl"];
}
//if (isset($_SESSION["user_info_admin"])) {
//    if (isset($_SESSION["user_info_admin"]["chucvuid"])) {
//        if ($_SESSION["user_info_admin"]["chucvuid"] == 1) {
//
//            UtilityController::gotoPage("admin/index.php");
//        }
//    }
//}
?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<!--    <meta charset="UTF-8">-->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang tổng hợp tin tức công nghê</title>
<!--    Sủ dụng thư viện bootstrap 4-->

    <link href="<?php echo TEMPLATE_HOME_URL; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo TEMPLATE_HOME_URL; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo TEMPLATE_HOME_URL?>/css/style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Source Code Pro' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Sủ dụng thư viện javascript-->
    <script src="<?php echo TEMPLATE_HOME_URL; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo TEMPLATE_HOME_URL; ?>/js/bootstrap.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
        body {font-family: "Segoe UI", Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        .bg-img {
            /* The image used */
            background-image:url("<?php echo TEMPLATE_HOME_URL?>/img/bground.png");

            min-height: 380px;

            /* Center and scale the image nicely */
            /*background-position: center;*/
            background-repeat: no-repeat;
            background-size: cover;

            /* Needed to position the navbar */
            position: relative;
        }

        /* Position the navbar container inside the image */
        .container1 {
            position: absolute;
            margin: 20px;
            width: auto;
        }

        /* The navbar */
        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        /* Navbar links */
        .topnav a {
            /*float: left;*/
            color: #f2f2f2;
            text-align: center;
            padding: 18px 50px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
        .clear{
            clear:both;
        }
    </style>
</head>
<body>

<div class="container-fluid" style="margin-top:30px">
<div class="bg-img">
    <div class="container1" style="margin-top: 325px">
        <div class="topnav" >
            <a class="navbar-toggler" href="<?php echo ROOT_URL; ?>"><img src="<?php echo TEMPLATE_HOME_URL?>/img/logohome.png" alt="logo" style="width:40px;"></a>
            <a href="<?= ROOT_URL ?>/index.php?ctl=TinTuc&act=indextcn">Công nghệ</a>
            <a href="<?= ROOT_URL ?>/index.php?ctl=TinTuc&act=indextk">Tin khác</a>
            <a href="<?= ROOT_URL ?>/index.php?ctl=Gioithieu">Giới thiệu</a>
        </div>
    </div>
</div>
    <section class="light-bg">

        <div class="container">
            <?php
            if ($chucnang == "TinTuc" && $act== "indextcn" || $act=="chitiet" ) {
                $Slider = new SliderController();
                $Slider->headtcn();
            }
            ?>
            <?php
            if ($chucnang == "TinTuc" && $act== "indextk" && $act=="chitiet") {
                $Slider = new SliderController();
                $Slider->headtk();
            }
            ?>
            <?php
            require_once HOME_CONTROLLER_DIRECTORY . DS . "Router.php";
            ?>
        </div>
    </section>
    <?php
    $FooterController = new FooterController();
    $FooterController->index();
    ?>

</body>
</html>