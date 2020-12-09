@extends('frontend.master.master')
@section('content')
		<!-- main -->
		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Giỏ hàng</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Thanh toán</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Hoàn tất thanh toán</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-name">
							<div class="one-forth text-center">
								<span>Chi tiết sản phẩm</span>
							</div>
							<div class="one-eight text-center">
								<span>Giá</span>
							</div>
							<div class="one-eight text-center">
								<span>Số lượng</span>
							</div>
							<div class="one-eight text-center">
								<span>Tổng</span>
							</div>
							<div class="one-eight text-center">
								<span>Xóa</span>
							</div>
						</div>
                        @foreach($carts as $key=>$cart)
						<div class="product-cart">
							<div class="one-forth">
								<div class="product-img">
									<img class="img-thumbnail cart-img" src="images/{{$cart->options->img}}">
								</div>
								<div class="detail-buy">
									<h4>Mã : {{$cart->id}}</h4>
									<h5>{{$cart->name}}</h5>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">{{number_format($cart->price,0,'.',',')}} </span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<input type="number" name="quantity"
										class="form-control input-number text-center quantity" data-id="{{$cart->rowId}}" value="{{$cart->qty}}">
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price" id="price-{{$cart->rowId}}">{{number_format($cart->price*$cart->qty,0,'.',',')}} </span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm ?')" href="{{route('cart.destroy',$cart->rowId)}}" class="closed"></a>
								</div>
							</div>
						</div>
                        @endforeach

					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="total-wrap">
							<div class="row">
								<div class="col-md-8">

								</div>
								<div class="col-md-3 col-md-push-1 text-center">
									<div class="total">
{{--										<div class="sub">--}}
{{--											<p><span>Tổng:</span> <span>{{$total}} đ</span></p>--}}
{{--										</div>--}}
										<div class="grand-total">
											<p><span><strong>Tổng cộng:</strong></span> <span id="totalCart">{{$total}} </span></p>
											<a href="{{route('checkout.getAll')}}" class="btn btn-primary">Đặt hàng <i
													class="icon-arrow-right-circle"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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
											<input type="text" class="form-control" id="email"
												placeholder="Nhập email của bạn">
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
@endsection


