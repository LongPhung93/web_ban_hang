<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="colorlib-logo"><a href="/"><img src="images/logo-codegym.jpg" alt=""
                                                             style="width: 300px;height: 50px;"></a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="active"><a href="/">Trang chủ</a></li>
                        <li class="has-dropdown">
                            <a href="{{route('getAll')}}">Cửa hàng</a>
                            <ul class="dropdown">
                                <li><a href="{{route('cart.getAll')}}">Giỏ hàng</a></li>
                                <li><a href="/checkout">Thanh toán</a></li>

                            </ul>
                        </li>
                        <li><a href="{{route('about')}}">Giới thiệu</a></li>
                        <li><a href="{{route('contact')}}">Liên hệ</a></li>
                        <li><a href="{{route('cart.getAll')}}"><i class="icon-shopping-cart"></i> Giỏ hàng
                                [{{ Cart::count() }}]</a></li>

                        @can('crud-user')
                        <li><a href="{{route('admin.index')}}">Trang quản trị</a></li>
                        @endcan
                        <li class="has-dropdown">
                            @if(empty(\Illuminate\Support\Facades\Auth::check()))
                            <a href="{{route('login')}}">Đăng nhập</a>
                            <ul class="dropdown">
                                <li><a href="{{route('register.show')}}">Đăng ký</a></li>
                            </ul>
                            @else
                                <a ></a>
                            @endif
                        </li>
                        <li> @if(\Illuminate\Support\Facades\Auth::check())
                                {{\Illuminate\Support\Facades\Auth::user()->email}}
                            @endif</li>
                        <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
