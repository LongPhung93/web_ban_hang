@extends('frontend.master.master')
@section('content')
		<!-- main -->
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<h3>Thôn tin liên hệ</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> Số 23 lô TT01 - Khu đô thị HD Mon City - Mỹ
                                    Đình 2 - Nam Từ Liêm - Hà Nội</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://02462538829">02462538829</a>
								</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a
										href="mailto:info@yoursite.com">info@codegym.vn</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">http://codegym.vn</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<div class="contact-wrap">
							<h3>Liên hệ</h3>
							<form action="#">
								<div class="row form-group">
									<div class="col-md-12 padding-bottom">
										<label for="fname">Họ & Tên</label>
										<input type="text" id="fname" class="form-control" placeholder="Họ và tên">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="email">Email</label>
										<input type="text" id="email" class="form-control"
											placeholder="Email của bạn">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="subject">Chủ đề</label>
										<input type="text" id="subject" class="form-control" placeholder="Nhập chủ đề">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="message">Lời nhắn</label>
										<textarea name="message" id="message" cols="30" rows="10" class="form-control"
											placeholder="Nói gì đó cho chúng tôi"></textarea>
									</div>
								</div>
								<div class="form-group text-center">
									<input type="submit" value="Gửi liên hệ" class="btn btn-primary">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="map" class="colorlib-map"></div>
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
		<!--end  subscribe -->
@endsection
