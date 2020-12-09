@extends('frontend.master.master')
@section('content')
		<!-- main -->
		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-push-3">
						<div class="row row-pb-lg">
                            @foreach($products as $product)
							<div class="col-md-4 text-center">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(/backend/img/{{$product->img}});">

										<div class="cart">
											<p>
												<span class="addtocart"><a href="{{route('addCart',$product->id)}}"><i
															class="icon-shopping-cart"></i></a></span>
												<span><a href="{{route('detail',$product->id)}}"><i class="icon-eye"></i></a></span>


											</p>
										</div>
									</div>
									<div class="desc">
										<h3><a href="{{route('detail',$product->id)}}">{{$product->name}}</a></h3>
										<p class="price"><span>{{number_format($product->price,2,'.',',')}} đ</span></p>
									</div>
								</div>
							</div>
			                @endforeach
						</div>
						<div class="row" align="right">
							<div class="col-md-12">
								<ul class="pagination">
                                    {{$products->links()}}

								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-pull-9">
						<div class="sidebar">
							<div class="side">
								<h2>Danh mục</h2>
								<div class="fancy-collapse-panel">
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										@foreach($categories as $category)
                                            @if($category->parent==0)

                                        <div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingOne">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#menu{{$category->id}}"
														aria-expanded="true" aria-controls="collapseOne">{{$category->name}}
													</a>
												</h4>
											</div>
											<div id="menu{{$category->id}}" class="panel-collapse collapse" role="tabpanel"
												aria-labelledby="headingOne">
												<div class="panel-body">
													<ul>
                                                        @foreach($categories as $value)
                                                            @if($category->id == $value->parent)
														<li><a href="{{route('getProductByCategory',$value->id)}}">{{$value->name}}</a></li>
														    @endif
                                                        @endforeach
													</ul>
												</div>
											</div>
										</div>
                                            @endif
                                        @endforeach


									</div>
								</div>
							</div>
							<div class="side">
								<h2>Khoảng giá</h2>
								<form method="get" action="{{route('filter')}}" class="colorlib-form-2">

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="guests">Từ:</label>
												<div class="form-field">
													<i class="icon icon-arrow-down3"></i>
													<select name="start" id="people" class="form-control">
														<option value="100000">100.000 VNĐ</option>
														<option value="200000">200.000 VNĐ</option>
														<option value="300000">300.000 VNĐ</option>
														<option value="500000">500.000 VNĐ</option>
														<option value="1000000">1.000.000 VNĐ</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="guests">Đến:</label>
												<div class="form-field">
													<i class="icon icon-arrow-down3"></i>
													<select name="end" id="people" class="form-control">
														<option value="2000000">2.000.000 VNĐ</option>
														<option value="4000000">4.000.000 VNĐ</option>
														<option value="6000000">6.000.000 VNĐ</option>
														<option value="8000000">8.000.000 VNĐ</option>
														<option value="10000000">10.000.000 VNĐ</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<button type="submit" style="width: 100%;border: none;height: 40px;">Tìm
										kiếm</button>
								</form>
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
		<!--end  subscribe -->
@endsection
