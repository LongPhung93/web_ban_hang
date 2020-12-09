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
                        <div class="process text-center active">
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
            <div class="row">
                <form method="post" class="colorlib-form">
                    @csrf

                <div class="col-md-7">

                        <h2>Chi tiết thanh toán</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">Họ & Tên</label>
                                    <input type="text" id="fname" name="name" class="form-control"
                                           placeholder="First Name">
                                    {!! showError($errors,'name') !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fname">Địa chỉ</label>
                                    <input type="text" id="address" name="address" class="form-control"
                                           placeholder="Nhập địa chỉ của bạn">
                                    {!! showError($errors,'address') !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="email">Địa chỉ email</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                           placeholder="Ex: youremail@domain.com">
                                    {!! showError($errors,'email') !!}
                                </div>
                                <div class="col-md-6">
                                    <label for="Phone">Số điện thoại</label>
                                    <input type="text" id="zippostalcode" name="phone" class="form-control"
                                           placeholder="Ex: 0123456789">
                                    {!! showError($errors,'phone') !!}
                                </div>
                            </div>
                        </div>


                    <div class="form-group">
                        <div class="col-md-12">

                        </div>
                    </div>


                </div>
                <div class="col-md-5">
                    <div class="cart-detail">
                        <h2>Tổng Giỏ hàng</h2>
                        <ul>
                            <li>
                                @foreach($carts as $cart)
                                <ul>
                                    <li><span>{{$cart->qty}} x {{$cart->name}}</span> <span> {{number_format($cart->price,0,'.',',')}}₫ </span></li>

                                </ul>
                                @endforeach
                            </li>

                            <li><span>Tổng tiền đơn hàng</span> <span>{{$total}}₫</span></li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
{{--                            <p><a href="{{route('checkout.complete',$orderId)}}" type="submit" class="btn btn-primary">Đặt hàng</a></p>--}}
                            <button class="btn btn-success" name="add-product" type="submit">Đặt hàng</button>
                            <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                        </div>
                    </div>

                </div>
                </form>
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


    <!-- Main -->
@endsection
<script src="js/main.js"></script>
<script>
    $(document).ready(function () {

        var quantitiy = 0;
        $('.quantity-right-plus').click(function (e) {

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function (e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            if (quantity > 0) {
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>

