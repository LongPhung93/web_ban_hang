@extends('backend.master.master')
@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh mục</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý danh mục</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
            <form action="" method="post">
                @csrf
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-5">

								<div class="form-group">
									<label for="">Danh mục cha:</label>
									<select class="form-control" name="parent" id="">
										<option value="0">Danh muc</option>
										{{getCategory($categories,0,"",0)}}
									</select>
								</div>
								<div class="form-group">
									<label for="">Tên Danh mục</label>
									<input type="text" class="form-control" name="name" id="" placeholder="Tên danh mục mới">
                                    {!! showError($errors,'name') !!}
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                          <strong>{{session('error')}}</strong>
                                        </div>
                                    @endif
								</div>
								<button type="submit" class="btn btn-primary">Thêm danh mục</button>
							</div>
							<div class="col-md-7">
                                @if(session('message'))
                                    <div class="alert bg-success" role="alert">
                                        <svg class="glyph stroked checkmark">
                                            <use xlink:href="#stroked-checkmark"></use>
                                        </svg> {{session('message')}} <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                    </div>
                                    @endif

								<h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
								<div class="vertical-menu">
									<div class="item-menu active">Danh mục </div>
                                    {{showCategory($categories,0,"")}}


								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
            </form>
			<!--/.col-->


		</div>
		<!--/.row-->
	</div>
	<!--/.main-->
@endsection
<script>
    function delCategory() {
        return confirm('Are you sure delete ?');
    }
</script>
