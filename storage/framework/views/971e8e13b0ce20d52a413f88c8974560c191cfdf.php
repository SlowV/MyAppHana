<?php $__env->startSection('page-title', 'Đơn hàng - Hana Store'); ?>

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
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/user-cart.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m"
	         style="background-image: url('<?php echo e(asset('img/bg-cart.jpg')); ?>');width: 100%;height: 239px">
		
		
		
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
		<?php if(Count($myOrder) != 0): ?>
			<!-- Cart item -->
				<div class="container-table-cart pos-relative">
					<div class="wrap-table-shopping-cart bgwhite">
						<table class="table-shopping-cart">
							<tr class="table-head">
								<th class="column-1"></th>
								<th class="column-2 text-center">Mã</th>
								<th class="column-3 text-center">Người đặt</th>
								<th class="column-4 text-center">Tên sản phẩm</th>
								<th class="column-5 text-center">Tổng tiền</th>
								<th>Trạng thái</th>
							</tr>
							<?php $__currentLoopData = $myOrder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr class="table-row">
									<td class="column-1 text-center">
										<div class="cart-img-product b-rad-4 o-f-hidden">
											<img src="<?php echo e(($item->images)); ?>" alt="IMG-PRODUCT">
										</div>
									</td>
									<td class="column-2 text-center name-product"><?php echo e($item->id); ?></td>
									<td class="column-3 text-center unit-price"><?php echo e($item->shipName); ?></td>
									<td class="column-4 text-center unit-price"><?php echo e($item->name); ?></td>
									<td class="column-5 text-center price"><?php echo e(number_format( $item->totalPrice,0,',','.')); ?> vnđ</td>
									<?php if($item->status == 0): ?>
									<td style="padding-right: 20px; font-size: 10px; text-align: center">
										<div class="alert alert-warning" role="alert" style="border-radius: 30px">Chờ</div>
									</td>
									<?php elseif($item->status == 1): ?>
										<td style="padding-right: 20px;font-size: 10px; text-align: center">
											<div class="alert alert-info" role="alert" style="border-radius: 30px">Đã nhận</div>
										</td>
									<?php elseif($item->status == 2): ?>
										<td style="padding-right: 20px;font-size: 10px; text-align: center">
											<div class="alert alert-success" role="alert" style="border-radius: 30px">Hoàn thành</div>
										</td>
									<?php endif; ?>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</table>
					</div>
				</div>
			<?php else: ?>
				<div>
					<div class="alert alert-success " role="alert" style="border-radius: 5px">
						Hiện chưa có sản phẩm nào trong giỏ hàng, bấm vào <a href="<?php echo e(route('listProductClient')); ?>"
						                                                     style="color: red; font-size: 1rem">đây</a>
						để mua hàng.
					</div>
				</div>
			<?php endif; ?>
		</div>
		<?php if(Session::has('delete')): ?>
			<div class="alert alert-success " role="alert" id="messageDeleteCart" style="border-radius: 5px">
				<?php echo e(Session::get('delete')); ?>

			</div>
		<?php endif; ?>
		<?php if(Session::has('order-success')): ?>
			<div class="alert alert-success " role="alert" id="messageOrderCart" style="border-radius: 5px">
				<?php echo e(Session::get('order-success')); ?>

			</div>
		<?php endif; ?>
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
	<script type="text/javascript" src="<?php echo e(asset('vendor/sweetalert/sweetalert.min.js')); ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo e(asset('js/main.js')); ?>"></script>
	<script src="<?php echo e(asset('js/cart.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>