@extends('user.layouts.master')

@section('page-title', 'Bài viết - Hana Store')

@section('css')
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/themify/themify-icons.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/elegant-font/html-css/style.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
@endsection

@section('content')
	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="{{route('homeClient')}}" class="s-text16">
			Trang chủ
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="{{route('blogClient')}}" class="s-text16">
			Blog
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			{{$article->title}}
		</span>
	</div>

	<!-- content page -->
	<section class="bgwhite p-t-60 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40">
							<div class="blog-detail-img wrap-pic-w">
								<img src="{{$article->images}}" alt="IMG-BLOG">
							</div>

							<div class="blog-detail-txt p-t-33">
								<h4 class="p-b-11 m-text24">
									{{$article->title}}
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By SlowV
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										{{$article->created_at->format('d-m-Y')}}
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										Hoa
									</span>
								</div>

								<p class="p-b-25">
									{{$article->title}}
								</p>

								<p class="p-b-25">
									{{$article->content}}
								</p>
							</div>
						</div>

						{{--<!-- Leave a comment -->--}}
						{{--<form class="leave-comment">--}}
						{{--<h4 class="m-text25 p-b-14">--}}
						{{--Leave a Comment--}}
						{{--</h4>--}}

						{{--<p class="s-text8 p-b-40">--}}
						{{--Your email address will not be published. Required fields are marked *--}}
						{{--</p>--}}

						{{--<textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" name="comment" placeholder="Comment..."></textarea>--}}

						{{--<div class="bo12 of-hidden size19 m-b-20">--}}
						{{--<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="name" placeholder="Name *">--}}
						{{--</div>--}}

						{{--<div class="bo12 of-hidden size19 m-b-20">--}}
						{{--<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="email" placeholder="Email *">--}}
						{{--</div>--}}

						{{--<div class="bo12 of-hidden size19 m-b-30">--}}
						{{--<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="website" placeholder="Website">--}}
						{{--</div>--}}

						{{--<div class="w-size24">--}}
						{{--<!-- Button -->--}}
						{{--<button class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">--}}
						{{--Post Comment--}}
						{{--</button>--}}
						{{--</div>--}}
						{{--</form>--}}
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="rightbar">
						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Danh mục
						</h4>

						<ul>
							@foreach($categories as $item)
								<li class="p-t-6 p-b-8 bo6">
									<a href="{{route('listProductClient').'?categoryId='.$item->id}}" class="s-text13 p-t-5 p-b-5">
										{{$item->name}}
									</a>
								</li>
							@endforeach
						</ul>

						<!-- Featured Products -->
						<h4 class="m-text23 p-t-65 p-b-34">
							Sản phẩm
						</h4>

						<ul class="bgwhite">
							@foreach($products as $item)
								<li class="flex-w p-b-20">
									<a href="/hanastore/product/{{$item->id}}" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
										<img src="{{$item->images}}" alt="IMG-PRODUCT">
									</a>

									<div class="w-size23 p-t-5">
										<a href="/hanastore/product/{{$item->id}}" class="s-text20">
											{{$item->name}}
										</a>

										<span class="dis-block s-text17 p-t-6">
											@if($item->sale == 0)
												{{number_format($item->price,0,',','.')}}
												<span style="text-transform: lowercase">vnđ</span>
											@else
												{{$item->discountPriceString}}
											@endif
										</span>
									</div>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('selection')
	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>
@endsection

@section('javascript')
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('vendor/select2/select2.min.js')}}"></script>
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
	<script src="{{asset('js/main.js')}}"></script>
@endsection