<!-- Header desktop --> <!--Header rên máy tính-->
<div class="container-menu-header">
    <div class="topbar">
        <div class="topbar-social">
            <a href="https://www.facebook.com/HanaStore-376911052841875" class="topbar-social-item fa fa-facebook"
               target="_blank"></a>
            <a href="https://www.instagram.com/hanastore205/" class="topbar-social-item fa fa-instagram"></a>
            <a href="https://www.pinterest.com/hanastore205/hoa-h%E1%BB%93ng/"
               class="topbar-social-item fa fa-pinterest-p"></a>
            <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
            <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
        </div>

        <span class="topbar-child1">
            
            Giao hàng miễn phí cho tất cả đơn hàng trên 1.000.000 vnđ
        </span>

        <div class="topbar-child2">
					<span class="topbar-email">
						hanastore@gmail.com
					</span>

            <div class="topbar-language rs1-select2">
                <select class="selection-1" name="time">
                    <option value="1">VN</option>
                    
                </select>
            </div>
        </div>
    </div>

    <div class="wrap_header">
        <!-- Logo -->
        <a href="<?php echo e(route('homeClient')); ?>" class="logo">
            <img src="<?php echo e(asset('images/icons/logo.png')); ?>" alt="IMG-LOGO">
        </a>

        <!-- Menu --> <!-- Menu máy tính bình thường hoặc nhỏ hơn xíu-->
        <div class="wrap_menu">
            <nav class="menu">
                <ul class="main_menu">
                    <li class="<?php echo e(url()->current() == route('homeClient')?'sale-noti':''); ?>">
                        <a href="<?php echo e(route('homeClient')); ?>">Trang chủ</a>

                    </li>

                    <li class="<?php echo e(url()->current() == route('listProductClient')?'sale-noti':''); ?>">
                        <a href="<?php echo e(route('listProductClient')); ?>">Danh sách</a>

                    </li>

                    <li class="<?php echo e(url()->current() == route('saleClient')?'sale-noti':''); ?>">
                        <a href="<?php echo e(route('saleClient')); ?>">Sale</a>
                    </li>

                    <li>
                        <a href="javascript:void(0)">Bộ sưu tập</a>
                        <ul class="sub_menu">
                            <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('listProductClient').'?collectionId='.$item->id); ?>"><?php echo e($item->name); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)">Danh mục</a>
                        <ul class="sub_menu">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('listProductClient').'?categoryId='.$item->id); ?>"><?php echo e($item->name); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>

                    <li class="<?php echo e(url()->current() == route('blogClient')?'sale-noti':''); ?>">
                        <a href="<?php echo e(route('blogClient')); ?>">Bài viết</a>
                    </li>

                    <li class="<?php echo e(url()->current() == route('contactClient')?'sale-noti':''); ?>">
                        <a href="<?php echo e(route('contactClient')); ?>">Liên hệ</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Header Icon --> <!-- Icon User-->
        <div class="header-icons">
            <?php if(auth()->guard()->guest()): ?>
                <a href="javascript:void(0)" class="header-wrapicon1 dis-block user-account">
                    <img src="<?php echo e(asset('images/icons/icon-header-01.png')); ?>" class="header-icon1" alt="ICON">
                </a>
            <?php else: ?>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right list-item-user" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:void (0)" id="infoUser">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> Thông tin
                        </a>
                        <a class="dropdown-item" href="<?php echo e(route('myOrder')); ?>">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i> Đơn hàng
                        </a>
                        <a class="dropdown-item" href="javascript:void (0)" id="logout">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất
                        </a>
                    </div>
                </li>
            <?php endif; ?>
            <span class="linedivide1"></span>

            <div class="header-wrapicon2" id="cart-icon-header">
                <img src="<?php echo e(asset('images/icons/icon-header-02.png')); ?>" class="header-icon1 js-show-header-dropdown"
                     alt="ICON">
                <span class="header-icons-noti" id="header-icons-noti"><?php echo e($countItemCart); ?></span>

                <!-- Header cart noti --> <!-- Xem nhanh giỏ hàng -->
                <div class="header-cart header-dropdown">
                    <ul class="header-cart-wrapitem style4" id="header-cart-wrapitem">
                        
                        
                        
                        
                        

                        
                        
                        
                        

                        
                        
                        
                        
                        
                        
                        <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemCart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="header-cart-item bo10">
                                <div class="header-cart-item-img">
                                    <img src="<?php echo e($itemCart->options->img); ?>" alt="IMG-PRODUCT-CART">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        <?php echo e($itemCart->name); ?>

                                    </a>

                                    <span class="header-cart-item-info">
                            <?php echo e($itemCart->qty); ?> x <?php echo e(number_format($itemCart->price,0,',','.')); ?>

                            </span>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                    <div class="header-cart-total" id="header-cart-total">
                        Tổng tiền: <?php echo e($total); ?>vnđ
                    </div>

                    <div class="header-cart-buttons">
                        <div class="header-cart-wrapbtn" style="margin-left: 25%">
                            <!-- Button -->
                            <a href="<?php echo e(route('giohang')); ?>"
                               class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                giỏ hàng
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal login-->
    <div class="modal fade" id="modalSocia">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: rgba(0,0,0,0.14);">
                    <h4 class="modal-title">Đăng nhập</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label class="control-label">Tài khoản:</label>
                            <input type="text" class="form-control" placeholder="Tên tài khoản" name="username">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mật khẩu:</label>
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                        </div>
                        <div class="form-group div-btn1">
                            <button type="button" class="btn-register">
                                Đăng ký
                            </button>
                        </div>
                        <div class="form-group div-btn2">
                            <button type="button" class="btn-login">
                                Đăng nhập
                            </button>
                        </div>
                    </form>
                    <div class="title-social">
                        Đăng nhập nhanh bằng mạng xã hội!
                    </div>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('facebook.login')); ?>">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/auth/google">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fa fa-google" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Modal info user-->
    <div class="modal fade" id="modalInfoUser">
        <div class="modal-dialog" role="document">
            <div style="text-align: center;">
                <?php if(auth()->guard()->guest()): ?>

                <?php else: ?>
                    <div class="box-user active-box">
                        <div class="imgBx">
                            <img src="<?php echo e(Auth::user()->avatar); ?>" alt="AVATAR-USER" class="avatarUser">
                            <ul class="social-icon">
                                <li>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#" id="edit-user"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="details-user">
                            <h2><?php echo e(Auth::user()->name); ?> <br> <span>3 vòng như 1</span></h2>
                        </div>
                    </div>
                    <div class="box-edit-user">
                        <div class="imgBx">
                            <img src="<?php echo e(Auth::user()->avatar); ?>" alt="AVATAR-USER" class="avatarUser">
                            <form action="#" type="post" id="form-edit-user">
                                <div class="form-group">
                                    <label> Tên </label>
                                    <input type="text" name="username" value="<?php echo e(Auth::user()->name); ?>"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Link facebook
                                        <small> &lt; có thể để trống &gt;</small>
                                    </label>
                                    <input type="text" name="facebook"
                                           value="<?php echo e(isset(Auth::user()->facebook) ? Auth::user()->facebook: ''); ?>"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>
                                        Link google plus
                                    </label>
                                    <input type="text" name="gmail"
                                           value="<?php echo e(isset(Auth::user()->gmail) ? Auth::user()->gmail: ''); ?>"
                                           class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="group-btn-submit-edit-user">

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>

<!-- Header Mobile --> <!-- Header dành cho điện thoại -->
<div class="wrap_header_mobile">
    <!-- Logo moblie -->
    <a href="<?php echo e(route('homeClient')); ?>" class="logo-mobile">
        <img src="<?php echo e(asset('images/icons/logo.png')); ?>" alt="IMG-LOGO">
    </a>

    <!-- Button show menu -->
    <div class="btn-show-menu">
        <!-- Header Icon mobile -->
        <div class="header-icons-mobile">
            <a href="javascript:void (0)" class="header-wrapicon1 dis-block">
                <img src="<?php echo e(asset('images/icons/icon-header-01.png')); ?>" class="header-icon1" alt="ICON">
            </a>

            <span class="linedivide2"></span>

            <div class="header-wrapicon2">
                <img src="<?php echo e(asset('images/icons/icon-header-02.png')); ?>" class="header-icon1 js-show-header-dropdown"
                     alt="ICON">
                <span class="header-icons-noti"><?php echo e($countItemCart); ?></span>

                <!-- Header cart noti -->
                <div class="header-cart header-dropdown " id="style-4">
                    <ul class="header-cart-wrapitem style4" id="header-cart-wrapitem">
                        <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemCart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="header-cart-item bo10">
                                <div class="header-cart-item-img">
                                    <img src="<?php echo e($itemCart->options->img); ?>" alt="IMG-PRODUCT-CART">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        <?php echo e($itemCart->name); ?>

                                    </a>

                                    <span class="header-cart-item-info">
                                        <?php echo e($itemCart->qty); ?> x <?php echo e(number_format($itemCart->price,0,',','.')); ?>

                                    </span>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                    <div class="header-cart-total">
                        Tổng tiền: vnđ
                    </div>

                    <div class="header-cart-buttons">
                        <div class="header-cart-wrapbtn">
                            <!-- Button -->
                            <a href="<?php echo e(route('giohang')); ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                giỏ hàng
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>
</div>

<!-- Menu Mobile --> <!--Menu của điện thoại-->
<div class="wrap-side-menu">
    <nav class="side-menu">
        <ul class="main-menu">
            <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							
                            Giao hàng miễn phí cho tất cả đơn hàng trên 1.000.000 vnđ
						</span>
            </li>

            <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                <div class="topbar-child2-mobile">
							<span class="topbar-email">
								hanastore@gmail.com
							</span>

                    <div class="topbar-language rs1-select2">
                        <select class="selection-1" name="time">
                            <option>VN</option>
                            <option>EN</option>
                        </select>
                    </div>
                </div>
            </li>

            <li class="item-topbar-mobile p-l-10">
                <div class="topbar-social-mobile">
                    <a href="https://www.facebook.com/HanaStore-376911052841875"
                       class="topbar-social-item fa fa-facebook"
                       target="_blank"></a>
                    <a href="https://www.instagram.com/hanastore205/" class="topbar-social-item fa fa-instagram"></a>
                    <a href="https://www.pinterest.com/hanastore205/hoa-h%E1%BB%93ng/"
                       class="topbar-social-item fa fa-pinterest-p"></a>
                    <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                    <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                </div>
            </li>

            <li class="item-menu-mobile">
                <a href="<?php echo e(route('homeClient')); ?>">Trang chủ</a>
            </li>

            <li class="item-menu-mobile">
                <a href="<?php echo e(route('listProductClient')); ?>">Danh sách</a>
            </li>

            <li class="item-menu-mobile">
                <a href="<?php echo e(route('saleClient')); ?>">Sale</a>
            </li>

            <li class="item-menu-mobile">
                <a href="javascript:void(0)">Bộ sưu tập</a>
                <ul class="sub-menu">
                    <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('listProductClient').'?collecyionId='.$item->id); ?>"><?php echo e($item->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
                <a href="javascript:void(0)">Danh mục</a>
                <ul class="sub-menu">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('listProductClient').'?categoryId='.$item->id); ?>"><?php echo e($item->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
            </li>

            <li class="item-menu-mobile">
                <a href="<?php echo e(route('blogClient')); ?>">Bài viết</a>
            </li>

            <li class="item-menu-mobile">
                <a href="<?php echo e(route('contactClient')); ?>">Liên hệ</a>
            </li>
        </ul>
    </nav>
</div>
