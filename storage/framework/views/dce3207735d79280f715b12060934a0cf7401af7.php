<?php $__env->startSection('page-title', 'Sản phẩm chi tiết - Hana Store'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/themify/themify-icons.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/elegant-font/html-css/style.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/animate/animate.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/css-hamburgers/hamburgers.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/animsition/css/animsition.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/select2/select2.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/daterangepicker/daterangepicker.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/slick/slick.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/lightbox2/css/lightbox.min.css')); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/util.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main.css')); ?>">
    <style>
        .img-fly{
            position: absolute;
            z-index: 9999;
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 100%;
            border: 1.5px solid rgba(255, 191, 182, 0.78);
            transition: all 1s ease;
            animation: MyAnimation 1.5s;
        }

        @keyframes  MyAnimation {
            0%   {transform: scale(0.4)}
            25%  {transform: scale(1)}
            75%  {transform: scale(1)}
            100% {transform: scale(0.4)}
        }
        .disable-scoll{
            overflow: hidden;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- breadcrumb -->
    <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
        <a href="<?php echo e(route('homeClient')); ?>}" class="s-text16">
            Trang chủ
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="<?php echo e(route('listProductClient')); ?>" class="s-text16">
            Danh sách
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <span class="s-text17">
            <?php echo e($product->name); ?>

		</span>
    </div>

    <!-- Product Detail -->
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>

                    <div class="slick3">
                        <div class="item-slick3" data-thumb="<?php echo e($product->images); ?>">
                            <div class="wrap-pic-w">
                                <img src="<?php echo e($product->images); ?>" alt="IMG-PRODUCT">
                            </div>
                        </div>

                        <div class="item-slick3" data-thumb="<?php echo e($product->images); ?>">
                            <div class="wrap-pic-w">
                                <img src="<?php echo e($product->images); ?>" alt="IMG-PRODUCT">
                            </div>
                        </div>

                        <div class="item-slick3" data-thumb="<?php echo e($product->images); ?>">
                            <div class="wrap-pic-w">
                                <img src="<?php echo e($product->images); ?>" alt="IMG-PRODUCT">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                    <?php echo e($product->name); ?>

                </h4>

                <span class="m-text17 price-product-detail">
					<?php echo e(number_format($product->price,0,',','.')); ?> vnđ
				</span>

                <p class="s-text8 p-t-10">
                    <?php echo e($product->description); ?>

                </p>

                <!--  -->
                <div class="p-t-33 p-b-60">
                    <div class="flex-r-m flex-w p-t-10">
                        <div class="w-size16 flex-m flex-w">
                            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10 add-to-cart"
                                 id="add-cart-detail-<?php echo e($product->id); ?>">
                                <!-- Button -->
                                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                    Thêm vào giỏ
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-b-45">
                    <div class="s-text8 p-b-10">Bộ sưu tập: <?php echo e($product->collection->name); ?></div>
                    <div class="s-text8">Danh mục: <?php echo e($product->category->name); ?></div>
                </div>
                <!--  -->
                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Thông tin
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            <?php echo e($product->description); ?>.
                        </p>
                    </div>
                </div>

                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Chi tiết
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            <?php echo e($product->detail); ?>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Relate Product -->
    <section class="relateproduct bgwhite p-t-45 p-b-138">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    Sản phẩm liên quan
                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    <?php $__currentLoopData = $productRelate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item-slick2 p-l-15 p-r-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative<?php echo e($item->sale != 0 && $item->new != 1?' block2-labelsale':''); ?><?php echo e($item->new == 1 && $item->sale == 0? ' block2-labelnew':''); ?><?php echo e($item->sale != 0 && $item->new == 1 ? ' block2-labelsaleandnew' : ''); ?>">
                                    <img src="<?php echo e($item->images); ?>" alt="IMG-PRODUCT"
                                         style="height: 350px;object-fit: cover;">
                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4 add-to-cart"
                                             id="add-cart-<?php echo e($item->id); ?>">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                Thêm vào giỏ
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="/hanastore/product/<?php echo e($item->id); ?>"
                                       class="block2-name dis-block s-text3 p-b-5">
                                        <?php echo e($item->name); ?>

                                    </a>
                                    <?php if($item->sale == 0): ?>
                                        <span class="block2-price m-text6 p-r-5">
                                                <?php echo e(number_format($item->price,0,',','.')); ?> <span
                                                    style="text-transform: lowercase">vnđ</span>
                                            </span>
                                    <?php else: ?>
                                        <span class="block2-price m-text6 p-r-5 text-decoration">
                                                <?php echo e(number_format($item->price,0,',','.')); ?> <span
                                                    style="text-transform: lowercase">vnđ</span>
                                            </span>
                                        <span class="block2-sale m-text6 p-r-5" style="color: #F8A300">
                                                <?php echo e(number_format($item->sale,0,',','.')); ?> <span
                                                    style="text-transform: lowercase">vnđ</span>
                                            </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('selection'); ?>
    <!-- Container Selection -->
    <div id="dropDownSelect1"></div>
    <div id="dropDownSelect2"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?php echo e(asset('vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?php echo e(asset('vendor/animsition/js/animsition.min.js')); ?>"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?php echo e(asset('vendor/bootstrap/js/popper.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?php echo e(asset('vendor/select2/select2.min.js')); ?>"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?php echo e(asset('vendor/slick/slick.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/slick-custom.js')); ?>"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?php echo e(asset('vendor/sweetalert/sweetalert.min.js')); ?>"></script>
    <script type="text/javascript">

        $('.btn-addcart-product-detail').each(function () {
            var id = $(this).attr('id').replace('add-cart-detail-', '');
            var nameProduct = $('.product-detail-name').html();
            $(this).click(function () {
                $.ajax({
                    url: '/hanastore/add-cart/' + id,
                    method: 'post',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        swal({
                            title: 'Thêm vào giỏ hàng thành công!',
                            text: nameProduct,
                            type: 'success',
                            showCancelButton: false,
                            confirmButtonText: 'Ok',
                        }).then((result) => {
                            if (result.value) {
                                window.location.href = '/hanastore/cart';
                            }
                        })
                    },
                    error: function (msg) {
                    }
                });
            })
        });
    </script>
    <!--===============================================================================================-->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('user.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>