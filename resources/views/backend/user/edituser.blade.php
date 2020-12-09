@extends('backend.master.master')
@section('content')
    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <!--/.row-->
        <div class="row">

            <div class="col-xs-12 col-md-12 col-lg-12" style="padding-top: 10px">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fas fa-user"></i> Sửa thành viên - {{$user->email}}</div>
                    <div class="panel-body">
                        <div class="row justify-content-center" style="margin-bottom:40px">
                            <form action="{{ route('user.update',$user->id) }}" method="post">
                                @csrf
                                <div class="col-md-8 col-lg-8">

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" disabled class="form-control" value="{{$user->email}}">
                                        {!! showError($errors,'email') !!}

                                    </div>

                                    <div class="form-group">
                                        <label>Full name</label>
                                        <input type="full" name="name" class="form-control" value="{{$user->name}}">
                                        {!! showError($errors,'name') !!}
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="address" name="address" class="form-control"
                                               value="{{$user->address}}">
                                        {!! showError($errors,'address') !!}
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="phone" name="phone" class="form-control" value="{{$user->phone}}">
                                        {!! showError($errors,'phone') !!}
                                    </div>

                                    <div class="form-group">
                                        <label>Level</label>
                                        <select name="role_id" class="form-control" value="">
                                            <option @if($user->level==1) selected @endif value="1">admin</option>
                                            <option @if($user->level==2) selected @endif value="2">user</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-lg-8 text-right">
                                        <button class="btn btn-success" type="submit">Sửa thành viên</button>
                                        <button class="btn btn-danger" onclick="window.history.go(-1); return false;" type="reset"><a ">Huỷ bỏ</a></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>

        </div>

        <!--/.row-->
    </div>

    <!--end main-->
@endsection
