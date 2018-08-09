<?php 
     
    require_once __DIR__."/../autoload/autoload.php";
    function module($module){
        echo baseUrl()."admin/modules/".$module."/index.php";
    }
    
?>

<head>
        
        <base href=".">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quản trị hệ thống</title>
        <link rel="shortcut icon" href="favicon.png">
        <link href="<?php echo baseUrl(); ?>public/frontend/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo  baseUrl(); ?>public/frontend/admin/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo  baseUrl(); ?>public/frontend/admin/css/admin.css" rel="stylesheet">
        <link href="css/introjs.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo  baseUrl(); ?>public/frontend/admin/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="<?php echo  baseUrl(); ?>public/frontend/admin/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo  baseUrl(); ?>public/frontend/admin/js/intro.min.js"></script>
        <script type="text/javascript" src="<?php  echo baseUrl(); ?>public/frontend/admin/js/admin.js"></script>
        
    </head>
    <body>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo baseUrl()."admin"; ?>"><i class="fa fa-cogs"></i> Quản trị hệ thống</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sang Nguyen<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Chỉnh sửa tài khoản</a></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div class="clearfix">
            <div id="sidebar-bg"></div>
            <div id="sidebar" role="navigation">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-th"></i><span> Danh mục quản lý</span>
                            <b class="fa fa-plus-sign visible-xs pull-right"></b>
                        </h3>
                    </div>
                    <ul id="menu" class="list-group">
                        <li class="list-group-item">
                            <a href="<?php module("news"); ?>">
                            <i class="fa fa-edit"></i> <span>Tin tức</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="product.html">
                            <i class="fa fa-fire"></i><span>Sản phẩm</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="type_product.html">
                            <i class="fa fa-bars"></i> <span>Loại sản phẩm</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="contact.html">
                            <i class="fa fa-envelope-o"></i> <span>Phản hồi<span class="badge pull-right">1</span></span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="slider.html">
                            <i class="fa fa-picture-o"></i> <span>Slider</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="user.html">
                            <i class="fa fa-user"></i> <span>Tài khoản</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="setting.html">
                            <i class="fa fa-wrench"></i> <span>Cấu hình</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            