@extends('frontend.master.master')
@section('content')
		<!-- main -->
		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-detail-wrap">
							<div class="row">
								<div class="col-md-5">
									<div class="product-entry">
										<div class="product-img" style="background-image: url(/backend/img/{{$product->img}});">

										</div>

									</div>
								</div>
								<div class="col-md-7">
									<form action="{{route('addCart', $product->id)}}" method="get">

										<div class="desc">
											<h3>{{$product->name}}</h3>
											<p class="price">
												<span>{{number_format($product->price,2,'.',',')}} đ</span>
											</p>
											<p>{{$product->info}}</p>
											<p style="text-align: justify;">
												CODEGYM STORE sẽ giao hàng tận nơi khi chọn mua sản phẩm: Áo Sơ Mi Trắng Kem ASM844. Hoặc quí khách có thể đến tại địa chỉ shop có hiển thị bên dưới, khi chọn size phù hợp để xem và thử trực tiếp.

											</p>


											<div class="row row-pb-sm">
												<div class="col-md-4">
													<div class="input-group">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
																<i class="icon-minus2"></i>
															</button>
														</span>
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
																<i class="icon-plus2"></i>
															</button>
														</span>
													</div>
												</div>
											</div>
											<p><button class="btn btn-primary btn-addtocart" type="submit"> Thêm vào giỏ hàng</button></p>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-12 tabulation">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#description">Mô tả</a></li>
								</ul>
								<div class="tab-content">
									<div id="description" class="tab-pane fade in active">
                                        {{$product->describe}}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Sản phẩm Mới</span></h2>
					</div>
				</div>
				<div class="row">
                    @foreach($productNews as $productNew)
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(/backend/img/{{$productNew->img}});">
								<div class="cart">
									<p>
										<span class="addtocart"><a href="{{route('addCart',$productNew->id)}}}"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="{{route('detail',$productNew->id)}}"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="{{route('detail',$productNew->id)}}">{{$productNew->name}}</a></h3>
								<p class="price"><span>{{number_format($productNew->price,2,'.',',')}} đ</span></p>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
		<!-- end main -->
		<!-- subscribe -->
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6 text-center">
							<h2><i class="icon-paperplane"></i>Đăng ký nhận bản tin</h2>
						</div>
						<div class="col-md-6">
							<form class="form-inline qbstp-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Nhập email của bạn">
											<button type="submit" class="btn btn-primary">Đăng ký</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end  subscribe -->
@endsection

@section('script')
    @parent
			<script>
				var quantity=1;
				$('.quantity-right-plus').click(function () {
					var quantity = parseInt($('#quantity').val());
					$('#quantity').val(quantity + 1);
				});

				$('.quantity-left-minus').click(function (e) {
					var quantity = parseInt($('#quantity').val());
						if (quantity > 1) {
							$('#quantity').val(quantity - 1);
						}
				});
			</script>
@endsection
