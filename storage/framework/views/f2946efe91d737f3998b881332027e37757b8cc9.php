<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="<?php echo e(asset("img/favicon.ico")); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Fashion - Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet"/>

    
    <link href="<?php echo e(asset('css/animate.min.css')); ?>" rel="stylesheet"/>

    
    <link href=" <?php echo e(asset("css/light-bootstrap-dashboard.css?v=1.4.0")); ?>" rel="stylesheet"/>

    
    <link href=" <?php echo e(asset("css/demo.css")); ?>" rel="stylesheet"/>

    
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo e(asset("css/pe-icon-7-stroke.css")); ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo e(asset("css/style.css")); ?>">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-image="<?php echo e(asset("img/bg.jpg")); ?>">
        
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="/admin/product" class="simple-text">
                    <img src="<?php echo e(asset("img/logo.png")); ?>" style="height: 29px;">
                    <small class="text-muted"><?php echo e(__('menu.admin')); ?></small>
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/admin/product">
                        <i class="pe-7s-home"></i>
                        <p><?php echo e(__('menu.tong.quan')); ?></p>
                    </a>
                </li>
                <li class="active">
                    <a href="/admin/product">
                        <i class="pe-7s-menu"></i>
                        <p><?php echo e(__('menu.danh.sach.san.pham')); ?></p>
                    </a>
                </li>
                <li>
                    <a href="/admin/product/create">
                        <i class="pe-7s-plus"></i>
                        <p><?php echo e(__('menu.dang.san.pham.moi')); ?></p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-note2"></i>
                        <p><?php echo e(__('menu.don.hang')); ?></p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-graph"></i>
                        <p><?php echo e(__('menu.phan.tich')); ?></p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-graph3"></i>
                        <p><?php echo e(__('menu.doanh.thu')); ?></p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="#" target="_blank">
                        <i class="pe-7s-rocket"></i>
                        <p><?php echo e(__('menu.sang.ben.website')); ?></p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navigation-example-2">
                        <span class="sr-only"><?php echo e(__('menu.tong.quan')); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/admin/product"><?php echo e(__('menu.danh.sach.san.pham')); ?></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-globe"></i>
                                
                                <span class="notification hidden-sm hidden-xs"></span>
                                <p class="hidden-lg hidden-md">
                                     <?php echo e(__('menu.thong.bao')); ?>

                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Thông báo 1</a></li>
                                <li><a href="#">Thông báo 2</a></li>
                                <li><a href="#">Thông báo 3</a></li>
                                <li><a href="#">Thông báo 4</a></li>
                                <li><a href="#">Thông báo khác</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md"><?php echo e(__('menu.tim.kiem')); ?></p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="">
                                <p><?php echo e(__('menu.tai.khoan')); ?></p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p>
                                    <?php echo e(__('menu.danh.muc')); ?>

                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                
                                    
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img
                                        src="https://scontent.fhan5-5.fna.fbcdn.net/v/t1.0-9/12106718_434803413381789_4303510610024269186_n.jpg?_nc_cat=0&oh=03951231d9028870451cf034a8051ec9&oe=5BCC0DC1"
                                        alt="" class="avatar-admin">
                                <span>SlowV</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><?php echo e(__('menu.thong.tin.tai.khoan')); ?></a></li>
                                <li><a href="#"><?php echo e(__('menu.dang.xuat')); ?></a></li>
                            </ul>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="row">
                                        <th>&nbsp;</th>
                                        <th class="text-center"><?php echo e(__('content.ma')); ?></th>
                                        <th class="text-center"><?php echo e(__('content.ten')); ?></th>
                                        <th class="text-center"><?php echo e(__('content.anh')); ?></th>
                                        <th class="text-center"><?php echo e(__('content.danh.muc')); ?></th>
                                        <th class="text-center"><?php echo e(__('content.gia')); ?></th>
                                        <th class="text-center"><?php echo e(__('content.thong.tin')); ?></th>
                                        <th class="text-center"><?php echo e(__('content.ngay.tao')); ?></th>
                                        <th class="text-center"><?php echo e(__('content.trang.thai')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                        
                                            
                                                
                                                    
                                                           
                                                    
                                                
                                            
                                            
                                            
                                            
                                                
                                                     
                                                    
                                                            
                                                            
                                                    
                                                
                                            
                                            
                                            
                                            
                                            
                                            
                                                
                                                
                                            
                                                
                                                        
                                                        
                                                    
                                                
                                                
                                                        
                                                        
                                                        
                                                    
                                                
                                            
                                        
                                    
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="checkbox form-group col-md-2 ">
                                        <input id="checkbox-all" type="checkbox" class="form-control">
                                        <label for="checkbox-all"><?php echo e(__('content.tat.ca')); ?></label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <select name="" id="select-action" class="form-control selcls">
                                            <option value="0"><?php echo e(__('content.chon.phuong.thuc')); ?></option>
                                            <option value="1"><?php echo e(__('content.xoa.muc.da.chon')); ?></option>
                                            <option value="2"><?php echo e(__('content.chuc.nang.khac')); ?></option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary"
                                                id="btn-apply"><?php echo e(__('content.thuc.hien')); ?></button>
                                    </div>
                                    <div class="col-md-4 form-group text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

        
        <div class="alert alert-success" role="alert" id="messageSuccess"></div>
        <div class="alert alert-danger" role="alert" id="messageError"></div>
        

        
    <!-- Modal -->
        <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo e((__('content.modal.sua.san.pham'))); ?></h4>
                    </div>
                    <div class="modal-body">
                        <form action="" name="form-edit">
                            <input type="hidden" name="id-product-edit">
                            <div class="form-group">
                                <label class="control-label"><?php echo e(__('content.ten')); ?> :</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?php echo e(__('content.gia')); ?> :</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?php echo e(__('content.anh')); ?> :</label>
                                <input type="text" name="images" class="form-control">
                                <div id="img-old">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?php echo e(__('content.trang.thai')); ?> :</label>
                                <select name="status" class="form-control">
                                    <option value="1">Còn hàng</option>
                                    <option value="2">Hết hàng</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal"><?php echo e(__('content.quay.lai')); ?></button>
                        <button type="button" class="btn btn-primary"
                                id="btn-update-product"><?php echo e(__('content.cap.nhat')); ?></button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

</body>


<script src="<?php echo e(asset("js/jquery.3.2.1.min.js")); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset("js/bootstrap.min.js")); ?>" type="text/javascript"></script>


<script src="<?php echo e(asset("js/chartist.min.js")); ?>"></script>


<script src="<?php echo e(asset("js/bootstrap-notify.js")); ?>"></script>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>


<script src="<?php echo e(asset("js/light-bootstrap-dashboard.js?v=1.4.0")); ?>"></script>


<script src="<?php echo e(asset("js/demo.js")); ?>"></script>
<script src="<?php echo e(asset('js/index.js')); ?>"></script>
</html>


