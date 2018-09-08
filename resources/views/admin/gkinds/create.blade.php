@extends('admin')

@section('title','分类管理')


   

@section('content')
<div class="tpl-portlet-components" style="height:800px">
    
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" action="/gkinds" method="POST">
                    {{csrf_field()}}
                    
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">父级分类</label>
                            
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}"  name="pid" style="display: block;">
                                <option value="0">根分类</option>
                            @foreach($gkinds_data as $v)
                                <option value="{{$v->id}}">{{$v->tname}}</option>
                            @endforeach
                            </select>
                           
                        </div>
                    </div>
                  
                   
                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">添加分类 </label>
                          
                        <div class="am-u-sm-9">
                            <input type="text" id="user-weibo" name="tname">
                            <div></div>
                        </div>
                    </div>
                  
                  
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button  class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



