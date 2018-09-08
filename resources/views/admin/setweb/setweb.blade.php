@extends('layouts.admin') 
@section('title') 后台设置 @endsection 
@section('title','后台设置') 

@section('content')
<hr>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 后台设置
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/admin/setweb" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">网站名称 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                           <input type="text" name="sname" class="tpl-form-input" id="user-name" placeholder="" value="{{$setweb ? $setweb->sname : ''}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">网站描述 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                           <input type="text" name="sdesc" class="tpl-form-input" id="user-name" placeholder="" value="{{$setweb ? $setweb->sdesc : ''}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">联系方式 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                           <input type="text" name="dtel" class="tpl-form-input" id="user-name" placeholder="" value="{{$setweb ? $setweb->dtel : ''}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">网址 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                           <input type="text" name="daddr" class="tpl-form-input" id="user-name" placeholder="" value="{{$setweb ? $setweb->daddr : ''}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">备案号 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                           <input type="text" name="dnul" class="tpl-form-input" id="user-name" placeholder="" value="{{$setweb ? $setweb->dnul : ''}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">版本信息 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                           <input type="text" name="detial" class="tpl-form-input" id="user-name" placeholder="" value="{{$setweb ? $setweb->detial : ''}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">状态 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                           <input type="text" name="status" class="tpl-form-input" id="user-name" placeholder="" value="{{$setweb ? $setweb->status : ''}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">关键字 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                           <input type="text" name="keywords" class="tpl-form-input" id="user-name" placeholder="" value="{{$setweb ? $setweb->sname : ''}}">
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">图片 </label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                    <i class="am-icon-cloud-upload"></i> 添加图标图片</button>
                                <input id="doc-form-file" type="file" name="logo">
                            </div>
                        </div>
                    </div>
                    <script>
                        var ue = UE.getEditor('editor');
                    </script>

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