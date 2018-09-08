@extends('layouts.admin') 
@section('title') 用户修改 @endsection 
@section('title','用户修改') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 用户修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/user/{{$user['id']}}" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="username" value="{{$user['username']}}" class="tpl-form-input" id="user-name" placeholder="">
                            <small>请填写标题文字6-20位字母数字下划线</small>
                        </div>
                    </div>


                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">年龄 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="age" value="{{$user['age']}}" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">性别 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="radio" name="sex" @if($user['sex'] == 0) checked @endif  id="user-name" placeholder="" value="0">男
                            <input type="radio" name="sex" @if($user['sex'] == 1) checked @endif  id="user-name" placeholder=""value="1">女
                            
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">电话 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="tel" value="{{$user['tel']}}" class="tpl-form-input" id="user-name" placeholder="" maxlength="11">
                        </div>
                    </div>


                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">权限 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="radio" name="auth" value="0" @if($user['auth'] == 0) checked @endif  id="user-name" placeholder="">普通用户
                            <input type="radio" name="auth" value="1" @if($user['auth'] == 1) checked @endif  id="user-name" placeholder="">管理员
                        </div>
                    </div>

                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">邮箱 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="email" value="{{$user['email']}}" class="tpl-form-input" id="user-name" placeholder="">
                            
                        </div>
                    </div>


                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">头像 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="upic" value="{{$user['upic']}}" class="tpl-form-input" id="user-name" placeholder="">
                            
                        </div>
                    </div>


                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">积分 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="score" value="{{$user['score']}}" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>

                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">状态 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="status" value="{{$user['status']}}" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>

                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">地址 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="uaddr" value="{{$user['uaddr']}}" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                     




                    {{method_field('PUT')}}
					{{csrf_field()}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection