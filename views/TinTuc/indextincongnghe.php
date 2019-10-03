<?php
$root_ctl = "Tincongnghe";
//?>
<?php
//$sql="select * from baiviet order by idbaiviet desc limit 10";
//$baiviet=mysqli_query($connect,$sql);
//
//?>
<!--<ul>-->
<!--    --><?php
//    while($dong=mysqli_fetch_array($baiviet)){
//        ?>
<!--        <img src="--><?php //echo $dong['anhminhhoa'] ?><!--" width="50" height="50"  style="float:left;"/>-->
<!--        <li style="list-style:none;margin-left:55px;"><a href="index.php?xem=chitiet&id=--><?php //echo $dong['idbaiviet'] ?><!--">-->
<!--                --><?php
//                echo $dong['tenbaiviet'];
//                ?>
<!--            </a></li>-->
<!--        <div class="clear"></div>-->
<!--        --><?php
//    }
//    die();
//    ?>
<!--</ul>-->

<!--<div class="page-header">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-10">-->
<!--                <ul class="page-header-breadcrumb">-->
<!--                    <li><a href="--><?php //echo ROOT_URL?><!--">Trang chủ</a></li>-->
<!--                    <li>Tin công nghệ</li>-->
<!--                </ul>-->
<!--                <h1>TIN CÔNG NGHỆ</h1>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <!-- post -->
                    <div class="col-md-12">
                        <div class="post post-thumb">
                            <a class="post-img" href=""><img src="<?php echo TEMPLATE_HOME_URL?>/img/post-1.jpg" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="#">JavaScript</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="">Javascript : Prototype vs Class</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="blog-post.html"><img src="<?php echo TEMPLATE_HOME_URL?>/img/post-4.jpg" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="#">JavaScript</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href=""><img src="<?php echo TEMPLATE_HOME_URL?>/img/post-6.jpg" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="#">JavaScript</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->

                    <div class="clearfix visible-md visible-lg"></div>

                    <!-- ad -->
                    <div class="col-md-12">
                        <div class="section-row">
                            <a href="#">
                                <img class="img-responsive center-block" src="<?php echo TEMPLATE_HOME_URL?>/img/ad-2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- ad -->

                    <!-- post -->


                    <?php
                    foreach ($list as $item ) {?>
                        <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="<?= 'index.php?ctl=TinTuc&act=chitiet&idbaiviet=' . $item['idbaiviet'] ?>"><img src="<?= ROOT_ADMIN_URL . DS . $item['anhminhhoa'] ?>" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="#">JavaScript</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="<?= 'index.php?ctl=TinTuc&act=chitiet&idbaiviet=' . $item['idbaiviet'] ?>"><?= $item['tenbaiviet'];?></a></h3>
                                    <p><?= $item['tomtat']?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>

            <div class="col-md-4">
                <!-- ad -->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="<?php echo TEMPLATE_HOME_URL?>/img/ad-1.jpg" alt="">
                    </a>
                </div>
                <!-- /ad -->

                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Tin Khác</h2>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href=""><img src="<?php echo TEMPLATE_HOME_URL?>/img/widget-1.jpg" alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
                        </div>
                    </div>

                </div>
                <!-- /post widget -->

                <!-- catagories -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Catagories</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            <li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
                            <li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
                            <li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
                            <li><a href="#" class="cat-3">CSS<span>35</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /catagories -->

                <!-- tags -->
                <div class="aside-widget">
                    <div class="tags-widget">
                        <ul>
                            <li><a href="#">Chrome</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">Tutorial</a></li>
                            <li><a href="#">Backend</a></li>
                            <li><a href="#">JQuery</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">JavaScript</a></li>
                            <li><a href="#">Website</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /tags -->

                <!-- archive -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Archive</h2>
                    </div>
                    <div class="archive-widget">
                        <ul>
                            <li><a href="#">Jan 2018</a></li>
                            <li><a href="#">Feb 2018</a></li>
                            <li><a href="#">Mar 2018</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /archive -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
