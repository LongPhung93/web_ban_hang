@extends('backend.master.master')
@section('content')
	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Đơn hàng</li>
			</ol>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
                    <a href="{{route('order.order')}}" class="btn btn-warning" style="margin-top: 3px;margin-bottom: 3px;"><span class="glyphicon glyphicon-gift" ></span>Đơn Chưa xử lý</a>
					<div class="panel-heading">Danh sách đơn đặt hàng đã xử lý</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">

								<table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Tên khách hàng</th>
                                            <th>Email</th>
                                            <th>Sđt</th>
                                            <th>Địa chỉ</th>
                                            <th>Thời gian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $key=>$order)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$order->name}}</td>
                                            <td>{{$order->email}}</td>
                                            <td>{{$order->phone}}</td>
                                            <td>{{$order->address}}</td>
                                            <td>{{\Illuminate\Support\Carbon::parse($order->update_at)->format('d-m-Y')}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
							</div>
						</div>
						<div class="clearfix"></div>
                        <div align="right">
                            {{$orders->links()}}
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!--/.row-->


	</div>
	<!--end main-->
@endsection
