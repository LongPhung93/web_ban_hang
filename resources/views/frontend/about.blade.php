@extends('frontend.master.master')
@section('content')
    <!-- main -->

    <div id="colorlib-about">
        <div class="container">
            <div class="row">
                <div class="about-flex">
                    <div class="col-one-forth">
                        <div class="row">
                            <div class="col-md-12 about">
                                <h2>Thông tin</h2>

                                <ul>
                                    <li><a href="#">Lịch sử phát triển</a></li>
                                    <li><a href="#">Thành tựu</a></li>
                                    <li><a href="#">Tầm nhìn</a></li>
                                    <li><a href="#">sứ mệnh</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-three-forth">
                        <h2>Lịch sử phát triển</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    Công nghệ Thông tin là một ngành lớn và quan trọng của Việt Nam, nhưng sự thiếu hụt
                                    nhân lực cả về số lượng và chất lượng luôn là một rào cản để phát triển.

                                    Nhân lực là mấu chốt quan trọng nhất để thúc đẩy ngành CNTT nước nhà phát triển.
                                    Thấu hiểu được tình trạng đó, các nhà sáng lập của CodeGym – vốn xuất thân là các
                                    lập trình viên nhiều năm kinh nghiệm, giảng viên, chủ doanh nghiệp phần mềm có tâm
                                    huyết – đã quyết định xây dựng nên một mô hình đào tạo lập trình đột phá, giúp nâng
                                    cao hiệu quả và chất lượng đào tạo. Không chỉ đủ để đóng góp một số lượng lớn lập
                                    trình viên cho ngành, mà còn thông qua đó nâng cao tiêu chuẩn chất lượng của ngành.
                                </p>
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
    <!--end  subscribe -->
@endsection
