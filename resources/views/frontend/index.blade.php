@extends('frontend.master.master')
@section('content')


        <!-- main -->
        <div id="colorlib-featured-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a  class="f-product-1" style="background-image: url(images/i1.jpg);">
                            <div class="desc">
                                <h2>Mẫu <br>cho <br>Nam</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <a class="f-product-2" style="background-image: url(images/i2.jpg);">
                                    <div class="desc">
                                        <h2> <br>Váy <br> Mới</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a class="f-product-2" style="background-image: url(images/i3.jpg);">
                                    <div class="desc">
                                        <h2>Sale <br>20% <br>off</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12">
                                <a class="f-product-2" style="background-image: url(images/i4.jpg);">
                                    <div class="desc">
                                        <h2>Giầy <br>cho <br>Nam</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-intro" class="colorlib-intro" style="background-image: url(images/banner-index.jpeg);"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro-desc">
                            <div class="text-salebox">
                                <div class="text-lefts">
                                    <div class="sale-box">
                                        <div class="sale-box-top">
                                            <h2 class="number">45</h2>
                                            <span class="sup-1">%</span>
                                            <span class="sup-2">Off</span>
                                        </div>
                                        <h2 class="text-sale">Sale</h2>
                                    </div>
                                </div>
                                <div class="text-rights">
                                    <h3 class="title">Dặt hàng hôm nay,nhận ngay khuyến mãi!</h3>
                                    <p>Đã có hơn 1000 đơn hàng được gửi đi ở khắp quốc gia.</p>
                                    <p><a href="product/shop.blade.php" class="btn btn-primary">Mua ngay</a> <a href="#"
                                                                                                                class="btn btn-primary btn-outline">Đọc
                                            thêm</a></p>
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
                        <h2><span>Sản phẩm mới</span></h2>
                        <p>Đây là những sản phẩm được ưa chuộng nhất năm 2019</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($productNews as $productNew)
                    <div class="col-md-3 text-center">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url(/backend/img/{{$productNew->img}});">
                                <div class="cart">
                                    <p>
										<span class="addtocart"><a href="{{route('addCart',$productNew->id)}}"><i
                                                    class="icon-shopping-cart"></i></a></span>
                                        <span><a href="{{route('detail',$productNew->id)}}"><i class="icon-eye"></i></a></span>


                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="product/detail.blade.php">{{$productNew->name}}</a></h3>
                                <p class="price"><span>{{number_format($productNew->price,2,'.',',')}} đ</span></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="colorlib-shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                        <h2><span>Sản phẩm nổi bật</span></h2>
                        <p>Đây là những sản phẩm mới của năm năm 2019</p>
                    </div>
                </div>

                <div class="row">
                    @foreach($productFeatureds as $productFeatured)
                    <div class="col-md-3 text-center">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url(/backend/img/{{$productFeatured->img}});">
                                <p class="tag"><span class="new">New</span></p>
                                <div class="cart">
                                    <p>
										<span class="addtocart"><a href="{{route('addCart',$productFeatured->id)}}"><i
                                                    class="icon-shopping-cart"></i></a></span>
                                        <span><a href="{{route('detail',$productFeatured->id)}}"><i class="icon-eye"></i></a></span>


                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="{{route('detail',$productFeatured->id)}}">{{$productFeatured->name}}</a></h3>
                                <p class="price"><span>{{number_format($productFeatured->price,2,'.',',')}} đ</span></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
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



