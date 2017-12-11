@extends('admin.index')

@section('title')
用户列表
@endsection

@section('content')
<div class="main-content">
    <!-- #section:basics/content.breadcrumbs -->
    <div class="breadcrumbs" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                UI库列表页
            </li>
        </ul><!-- /.breadcrumb -->

        <!-- #section:basics/content.searchbox -->
        <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" name="keywords" value="{{$keywords}}" placeholder="请输入关键字 ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                </span>
            </form>
        </div> <!-- /.nav-search-->

        <!-- /section:basics/content.searchbox -->
    </div>

    <div class="page-content">
        <!-- /section:settings.box -->
        <div class="page-content-area">
            <div class="row">
                <div class="col-xs-12">
                    <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 185px;">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">用户名</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 205px;">邮箱</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 161px;">头像</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 121px;">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($users) > 0)
                                @foreach($users as $k=>$v)
                                <tr class="gradeA odd" role="row">
                                    <td class="sorting_1">{{$v->id}}</td>
                                    <td>{{$v->username}}</td>
                                    <td>{{$v->email}}</td>
                                    <td class="center"><img width="20" src="{{$v->profile}}" alt=""></td>
                                    <td class="center">
                                        <a class="btn btn-info btn-sm pull-left menu-icon fa fa-pencil-square-o" href="/admin/user/{{$v->id}}/edit"></a>
                                        <form class="del" action="/admin/user/{{$v->id}}" method="post">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <button class="btn btn-danger btn-sm menu-icon fa fa-book pull-left"></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                            <tr><td colspan="5" class="text-center">暂无数据</td></tr>
                            @endif
                        </tbody>
                    </table>
                <div class="text-right">
                    {{$users->appends(['num=>$num','keywords'=>$keywords])->links()}}
                </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
                    
    </div>




    <!-- /.page-content -->
</div>
@endsection











