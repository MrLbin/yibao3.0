@extends('layouts.admin') @section('title','广告列表') @section('content')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 广告列表
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a href="/advers/create" type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                </div>
            </div>

            <div class="am-u-sm-12 am-u-md-3">
              <form action="/advers" method="get">
                <div class="am-input-group am-input-group-sm">
                    <input type="text" name="keywords" class="am-form-field" value="{{request()->keywords}}">
                    <span class="am-input-group-btn">
                                 <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"></button>
                               </span>
                </div>
                </form>
            </div>
        </div>
        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-striped am-table-hover table-main">
                    <thead>
                        <tr>
                            <th class="table-check">
                                <input type="checkbox" class="tpl-table-fz-check">
                            </th>

                            <th class="table-title">ID</th>
                            <th class="table-title">广告名</th>
                            <th class="table-title">价格</th>
                            <th class="table-title">客户信息</th>
                            <th class="table-title">有效时间</th>
                            <th class="table-title">有效时间</th>
                            <th class="table-title">广告1信息</th>
                            <th class="table-title">广告1图片</th>
                            <th class="table-title">广告1url</th>
                            <th class="table-title">广告2信息</th>
                            <th class="table-title">广告2图片</th>
                            <th class="table-title">广告2url</th>
                            <th class="table-title">状态</th>
                            <th class="table-set">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($advers as $v)
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>{{$v['id']}}</td>
                            <td>{{$v['atitle']}}</td>
                            <td>{{$v['aprice']}}</td>
                            <td>{{$v['acustomer']}}</td>
                            <td>{{$v['data_max']}}</td>
                            <td>{{$v['data_min']}}</td>
                            <td>{{$v['guanggaowei1']}}</td>
                            <td><img src="{{$v['pic1']}}" width="50" alt=""></td>
                            <td>{{$v['aurl1']}}</td>
                            <td>{{$v['guanggaowei2']}}</td>
                            <td><img src="{{$v['pic2']}}" width="50" alt=""></td>
                            <td>{{$v['aurl2']}}</td>
                            <td>{{$v['cate']}}</td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a href="/advers/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                        <form style="float:left" action="/advers/{{$v['id']}}" method="post">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                        </form>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <style>
                                   .pagination{
                                       padding-left: 0;
                                       margin: 1.5rem 0;
                                       list-style: none;
                                       color: #999;
                                       text-align: left;
                                       padding: 0;
                                   }

                                   .pagination li{
                                          display: inline-block;
                                   }

                                   .pagination li a, .pagination li span{
                                          color: #23abf0;
                                       border-radius: 3px;
                                       padding: 6px 12px;
                                       position: relative;
                                       display: block;
                                       text-decoration: none;
                                       line-height: 1.2;
                                       background-color: #fff;
                                       border: 1px solid #ddd;
                                       border-radius: 0;
                                       margin-bottom: 5px;
                                       margin-right: 5px;
                                   }

                                   .pagination .active span{
                                          color: #23abf0;
                                       border-radius: 3px;
                                       padding: 6px 12px;
                                       position: relative;
                                       display: block;
                                       text-decoration: none;
                                       line-height: 1.2;
                                       background-color: #fff;
                                       border: 1px solid #ddd;
                                       border-radius: 0;
                                       margin-bottom: 5px;
                                       margin-right: 5px;
                                       background: #23abf0;
                                       color: #fff;
                                       border: 1px solid #23abf0;
                                       padding: 6px 12px;
                                   }
                            </style>
                <div class="am-cf">
                    <div class="am-fr">
                        {{ $advers->appends(request()->all())->links() }}
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
@endsection